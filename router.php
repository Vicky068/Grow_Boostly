<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$queryString = $_SERVER['QUERY_STRING'] ?? '';
$root = __DIR__;

// Redirect .php and /path/index.php requests to clean URLs
if (preg_match('#^(.*)/index\.php$#', $uri, $m)) {
    $target = ($m[1] === '') ? '/' : $m[1];
    header('Location: ' . $target . ($queryString !== '' ? '?' . $queryString : ''), true, 301);
    exit;
}
if (preg_match('#^(.+)\.php$#', $uri, $m) && strpos($uri, '/assets/') === false) {
    header('Location: ' . $m[1] . ($queryString !== '' ? '?' . $queryString : ''), true, 301);
    exit;
}

if ($uri !== '/' && $uri !== '') {
    $static = $root . $uri;
    if (is_file($static)) {
        return false;
    }
}

if ($uri === '/' || $uri === '/index' || $uri === '/index/') {
    chdir($root);
    require $root . '/index.php';
    return true;
}

$path = trim($uri, '/');

// Hub pages: industries.php / packages.php take priority over same-named folders
if ($path === 'industries' && is_file($root . '/industries.php')) {
    chdir($root);
    require $root . '/industries.php';
    return true;
}
if ($path === 'pricing' || $path === 'pricing/') {
    header('Location: /packages' . ($queryString !== '' ? '?' . $queryString : ''), true, 301);
    exit;
}
if (preg_match('#^pricing/(.+)$#', $path, $m)) {
    $slug = preg_replace('/-pricing$/', '-packages', $m[1]);
    header('Location: /packages/' . $slug . ($queryString !== '' ? '?' . $queryString : ''), true, 301);
    exit;
}
if ($path === 'packages' && is_file($root . '/packages.php')) {
    chdir($root);
    require $root . '/packages.php';
    return true;
}

$candidate = $root . '/' . $path . '.php';

if (is_file($candidate)) {
    chdir(dirname($candidate));
    require $candidate;
    return true;
}

$dirIndex = $root . '/' . $path . '/index.php';
if (is_file($dirIndex)) {
    chdir(dirname($dirIndex));
    require $dirIndex;
    return true;
}

http_response_code(404);
echo '404 Not Found';
return true;

<?php
if (!function_exists('gb_clean_path')) {
    function gb_clean_path(string $path): string
    {
        $path = trim(str_replace('\\', '/', $path), '/');
        if ($path === '' || $path === 'index' || $path === 'index.php') {
            return 'index';
        }
        return preg_replace('/\.php$/', '', $path);
    }

    /** Root-absolute site URL — works from any page depth (/industries/, /services/foo, etc.) */
    function gb_url(string $path = 'index'): string
    {
        $path = gb_clean_path($path);
        if ($path === 'index') {
            return '/';
        }
        return '/' . $path;
    }

    /** Root-absolute asset URL (with filemtime cache-buster when the file exists) */
    function gb_asset(string $path): string
    {
        $rel = ltrim(str_replace('\\', '/', $path), '/');
        $url = '/assets/' . $rel;
        $file = dirname(__DIR__) . '/assets/' . $rel;
        if (is_file($file)) {
            $url .= '?v=' . filemtime($file);
        }
        return $url;
    }

    function gb_canonical_url(?string $scriptName = null): string
    {
        $scriptName = $scriptName ?? parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
        $scriptName = $scriptName ?: ($_SERVER['SCRIPT_NAME'] ?? '/index.php');
        $path = trim(str_replace('\\', '/', $scriptName), '/');

        if ($path === '' || $path === 'index.php') {
            return 'https://www.growboostly.com/';
        }

        $path = preg_replace('#(^|/)index\.php$#', '$1', $path);
        $path = preg_replace('/\.php$/', '', $path);
        $path = trim($path, '/');

        if ($path === '') {
            return 'https://www.growboostly.com/';
        }

        return 'https://www.growboostly.com/' . $path;
    }

    function gb_canonical_tag(?string $scriptName = null): string
    {
        return '<link rel="canonical" href="' . htmlspecialchars(gb_canonical_url($scriptName), ENT_QUOTES, 'UTF-8') . '" />';
    }
}

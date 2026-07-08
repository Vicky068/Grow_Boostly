<?php
if (!function_exists('gb_asset')) {
    require_once __DIR__ . '/url_helper.php';
}
?>
<?php echo gb_canonical_tag(); ?>
<link rel="stylesheet" href="<?php echo htmlspecialchars(gb_asset('css/style.css'), ENT_QUOTES, 'UTF-8'); ?>">
<link rel="stylesheet" href="<?php echo htmlspecialchars(gb_asset('css/mobile-responsive.css'), ENT_QUOTES, 'UTF-8'); ?>">

<?php
define('THEME_DIR', get_stylesheet_directory());
define('IMAGE_PATH', get_stylesheet_directory_uri() . '/assets/img/');

require_once 'includes/bootstrap.php';

if (class_exists('acf')) {
  require_once 'includes/acf.php';
}

function jmb_load_assets() {
  wp_enqueue_script('jmb-bundle', get_template_directory_uri() . '/dist/bundle.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'jmb_load_assets');

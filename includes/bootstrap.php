<?php
function jmb_bootstrap_theme() {
  add_theme_support('menus');
  add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
}
add_action('init', 'jmb_bootstrap_theme');

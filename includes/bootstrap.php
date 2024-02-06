<?php
function bootstrap_theme() {
  add_theme_support('menus');
  add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script']);
}
add_action('init', 'bootstrap_theme');

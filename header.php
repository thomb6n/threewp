<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header id="site-header">
    <div class="site-branding">
      <a href="<?php bloginfo('wpurl'); ?>" id="logo">
        <?php bloginfo('sitename'); ?>
      </a>
    </div>

    <nav id="site-menu" aria-label="main menu">
      <?php wp_nav_menu(); ?>
    </nav>
  </header>
<?php
get_header();

if (have_posts()) {
  while (have_posts()) {
    the_post();
    if (have_rows('layouts')) {
      while (have_rows('layouts')) {
        the_row();
        $filename = str_replace('_', '-', get_row_layout());
        get_template_part('layouts/' . $filename . '/' . $filename);
      }
    }
  }
}

get_footer();

<?php
function jmb_register_layouts() {
  $layouts = array();
  $layouts_dir = THEME_DIR . '/layouts';
  $layout_dirs = array_diff(scandir($layouts_dir), array('..', '.'));

  foreach ($layout_dirs as $dir) {
    $acf_file = "$layouts_dir/$dir/acf.php";

    if (file_exists($acf_file)) {
      include_once $acf_file;
    }
  }

  acf_add_local_field_group(
    array(
      'key' => 'group_layouts',
      'title' => 'Layouts',
      'fields' => array(
        array(
          'key' => 'field_layouts',
          'name' => 'layouts',
          'label' => 'Layouts',
          'type' => 'flexible_content',
          'layouts' => $layouts,
          'button_label' => 'Add layout'
        )
      ),
      'location' => array(
        array(
          array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'page'
          )
        )
      ),
      'menu_order' => 0,
      'position' => 'acf_after_title',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'active' => true,
      'hide_on_screen' => array(
        0 => 'the_content'
      )
    )
  );
}
add_action('acf/include_fields', 'jmb_register_layouts');

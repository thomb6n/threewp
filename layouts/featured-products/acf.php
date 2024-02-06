<?php
$layout_name = 'featured_products';

$layouts[$layout_name] = array(
  'key' => 'layout_' . $layout_name,
  'name' => $layout_name,
  'label' => 'Featured Products',
  'sub_fields' => array(
    array(
      'key' => 'field_' . $layout_name . '_title',
      'name' => $layout_name . '_title',
      'label' => 'Title',
      'type' => 'text'
    ),
    array(
      'key' => 'field_' . $layout_name . '_subtext',
      'name' => $layout_name . '_subtext',
      'label' => 'Subtext',
      'type' => 'text'
    ),
    array(
      'key' => 'field_' . $layout_name . '_products',
      'name' => $layout_name . '_products',
      'label' => 'Products',
      'type' => 'relationship',
      'filters' => array(
        0 => 'search',
      ),
      'post_type' => array(
        0 => 'product'
      )
    )
  )
);

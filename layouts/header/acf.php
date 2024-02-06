<?php
$layout_name = 'header';

$layouts[$layout_name] = array(
  'key' => 'layout_' . $layout_name,
  'name' => $layout_name,
  'label' => 'Header',
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
  )
);

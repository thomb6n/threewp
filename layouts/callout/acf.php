<?php
$layout_name = 'callout';

$layouts[$layout_name] = array(
  'key' => 'layout_' . $layout_name,
  'name' => $layout_name,
  'label' => 'Call out',
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
      'key' => 'field_' . $layout_name . '_button',
      'name' => $layout_name . '_button',
      'label' => 'Button',
      'type' => 'link'
    ),
    array(
      'key' => 'field_' . $layout_name . '_background',
      'name' => $layout_name . '_background',
      'label' => 'Background Color',
      'type' => 'radio',
      'choices' => array(
        'primary' => 'Primary',
        'primary-light' => 'Primary Light',
        'secondary' => 'Secondary',
        'secondary-light' => 'Secondary Light'
      ),
      'default_value' => 'primary-light'
    ),
    array(
      'key' => 'field_' . $layout_name . '_text_color',
      'name' => $layout_name . '_text_color',
      'label' => 'Text Color',
      'type' => 'radio',
      'choices' => array(
        '#222' => 'Dark',
        '#fff' => 'Light'
      ),
      'default_value' => 'dark'
    )
  )
);

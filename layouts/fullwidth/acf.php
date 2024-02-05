<?php
$layout_name = 'fullwidth';

$layouts[$layout_name] = [
  'key' => 'layout_' . $layout_name,
  'name' => $layout_name,
  'label' => 'Full Width',
  'sub_fields' => [
    [
      'key' => 'field_' . $layout_name . '_mesh_color',
      'name' => $layout_name . '_mesh_color',
      'label' => 'Mesh Color',
      'type' => 'color_picker',
      'default_value' => '#0000ff',
      'required' => 1
    ],
    [
      'key' => 'field_' . $layout_name . '_scene_color',
      'name' => $layout_name . '_scene_color',
      'label' => 'Scene Color',
      'type' => 'color_picker',
      'default_value' => '#ffffff',
      'required' => 1,
    ],
    [
      'key' => 'field_' . $layout_name . '_wireframe',
      'name' => $layout_name . '_wireframe',
      'label' => 'Wireframe',
      'type' => 'true_false'
    ],
    [
      'key' => 'field_' . $layout_name . '_shape',
      'name' => $layout_name . '_shape',
      'label' => 'Shape',
      'type' => 'radio',
      'choices' => [
        'box' => 'Box',
        'donut' => 'Donut',
        'sphere' => 'Sphere'
      ]
    ]
  ]
];

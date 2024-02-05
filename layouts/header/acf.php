<?php
$layout_name = 'header';

$layouts[$layout_name] = [
  'key' => 'layout_' . $layout_name,
  'name' => $layout_name,
  'label' => 'Header',
  'sub_fields' => [
    [
      'key' => 'field_' . $layout_name . '_title',
      'name' => $layout_name . '_title',
      'label' => 'Title',
      'type' => 'text'
    ],
    [
      'key' => 'field_' . $layout_name . '_subtext',
      'name' => $layout_name . '_subtext',
      'label' => 'Subtext',
      'type' => 'text'
    ],
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

<?php
$layout_name = 'columns';

$layouts[$layout_name] = [
  'key' => 'layout_' . $layout_name,
  'name' => $layout_name,
  'label' => 'Columns',
  'sub_fields' => [
    [
      'key' => 'field_' . $layout_name . '_columns',
      'name' => $layout_name . '_columns',
      'label' => 'Columns',
      'type' => 'repeater',
      'sub_fields' => [
        [
          'key' => 'field_' . $layout_name . '_column',
          'name' => $layout_name . '_column',
          'label' => 'Column',
          'type' => 'wysiwyg',
        ]
      ],
      'max' => 4,
    ]
  ]
];

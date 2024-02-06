<?php
$layout_name = basename(__FILE__, '.php');
$prefix = $layout_name . '_';
$mesh_color = get_sub_field($prefix . 'mesh_color');
$scene_color = get_sub_field($prefix . 'scene_color');
$wireframe = get_sub_field($prefix . 'wireframe');
$shape = get_sub_field($prefix . 'shape');
?>
<section class="fullwidth">
  <canvas id="three-fullwidth" data-mesh-color="<?php echo $mesh_color; ?>" data-scene-color="<?php echo $scene_color; ?>" data-wireframe="<?php echo $wireframe; ?>" data-shape="<?php echo $shape; ?>"></canvas>
</section>
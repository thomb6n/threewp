<?php
$layout_name = basename(__FILE__, '.php');
$prefix = $layout_name . '_';
$title = get_sub_field($prefix . 'title');
$subtext = get_sub_field($prefix . 'subtext');
$mesh_color = get_sub_field($prefix . 'mesh_color');
$scene_color = get_sub_field($prefix . 'scene_color');
$wireframe = get_sub_field($prefix . 'wireframe');
$shape = get_sub_field($prefix . 'shape');
?>
<section class="header">
  <div class="content">
    <?php
    if ($title) {
    ?>
      <h1 class="title"><?php echo $title; ?></h1>
    <?php
    }

    if ($subtext) {
    ?>
      <p class="subtext"><?php echo $subtext; ?></p>
    <?php
    }
    ?>
  </div>
  <div class="experience">
    <canvas id="three" data-mesh-color="<?php echo $mesh_color; ?>" data-scene-color="<?php echo $scene_color; ?>" data-wireframe="<?php echo $wireframe; ?>" data-shape="<?php echo $shape; ?>"></canvas>
  </div>
</section>
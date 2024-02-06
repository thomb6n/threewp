<?php
$layout_name = str_replace('-', '_', basename(__FILE__, '.php'));
$prefix = $layout_name . '_';
$title = get_sub_field($prefix . 'title');
$subtext = get_sub_field($prefix . 'subtext');
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
</section>
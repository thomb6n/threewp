<?php
$layout_name = str_replace('-', '_', basename(__FILE__, '.php'));
$prefix = $layout_name . '_';
$title = get_sub_field($prefix . 'title');
$subtext = get_sub_field($prefix . 'subtext');
$button = get_sub_field($prefix . 'button');
$text_color = get_sub_field($prefix . 'text_color');
$background = get_sub_field($prefix . 'background');
?>
<section class="callout background-<?php echo $background; ?> text-<?php echo $text_color; ?>">
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

    if ($button) {
    ?>
      <a class="button" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
    <?php
    }
    ?>
  </div>
</section>
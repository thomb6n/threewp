<?php
$layout_name = str_replace('-', '_', basename(__FILE__, '.php'));
$prefix = $layout_name . '_';
$title = get_sub_field($prefix . 'title');
$subtext = get_sub_field($prefix . 'subtext');
$products = get_sub_field($prefix . 'products');
?>
<section class="products">
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

    if ($products) {
    ?>
      <div class="products">
        <?php
        foreach ($products as $product) {
          get_template_part('template-parts/product', '', array('product_id' => $product->ID));
        }
        ?>
      </div>
    <?php
    }
    ?>
  </div>
</section>
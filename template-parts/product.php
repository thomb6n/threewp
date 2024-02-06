<?php
$product_id = $args['product_id'];
$product_title = get_the_title($product_id);
?>
<h3><?php echo $product_title; ?></h3>
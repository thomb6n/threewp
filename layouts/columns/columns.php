<?php
$layout_name = basename(__FILE__, '.php');
$prefix = $layout_name . '_';
$columns = get_sub_field($prefix . 'columns');
if (!count($columns)) {
  return;
}
?>
<section class="columns grid-<?php echo count($columns); ?>">
  <?php
  foreach ($columns as $column) {
    $content = $column['columns_column'];
  ?>
    <div class="column-content">
      <?php echo $content; ?>
    </div>
  <?php
  }
  ?>
</section>
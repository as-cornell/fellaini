<?php
// Show the twitter block
?>
<?php print $header; ?>

<div class="<?php print $classes; ?>">
  <?php if ($rows): ?>
  <?php print $rows; ?>
  <?php elseif ($empty): ?>
  <div class="view-empty">
  <?php print $empty; ?>
  </div>
  <?php endif; ?>
</div>

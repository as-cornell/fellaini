<?php
// Show the instagram block
?>

<div class="<?php print $classes; ?>">
  <?php if ($rows): ?>
  <?php print $rows; ?>
  <?php elseif ($empty): ?>
  <div class="view-empty">
  <?php print $empty; ?>
  </div>
  <?php endif; ?>
</div>

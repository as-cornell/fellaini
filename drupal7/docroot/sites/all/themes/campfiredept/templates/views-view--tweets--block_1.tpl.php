<?php
// Show the twitter block
?>

<div class="<?php print $classes; ?>">
  <?php print $header; ?>
  <?php if ($rows): ?>
  <?php print $rows; ?>
  <?php elseif ($empty): ?>
  <div class="view-empty">
  <?php print $empty; ?>
  </div>
  <?php endif; ?>
</div>

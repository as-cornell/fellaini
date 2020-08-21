<?php
// Show the instagram block
?>


<a href="https://instagram.com/cornellcas/" class="instagram">
<div class="<?php print $classes; ?>">
  <?php if ($rows): ?>
  <?php print $rows; ?>
  <?php elseif ($empty): ?>
  <div class="view-empty">
  <?php print $empty; ?>
  </div>
  <?php endif; ?>
</div>
</a>

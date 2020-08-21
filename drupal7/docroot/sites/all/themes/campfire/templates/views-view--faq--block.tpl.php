<?php
  // ouput for FAQ view. 
?>
<!-- <h2>Frequently asked questions</h2> -->
<div class="faqs">
  <?php if ($rows): ?>
      <?php print $rows;?>
  <?php elseif ($empty): ?>
    <div class="view-empty">
      <?php print $empty;?>
    </div>
  <?php endif;?>
</div>



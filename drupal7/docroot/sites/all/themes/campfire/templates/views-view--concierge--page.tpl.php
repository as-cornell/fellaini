<div class="as-container">
 <div class="as-popular-links__destinations">
          <?php
          $block = block_load('views', '-exp-concierge-page');
          $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
          print $output; ?>
        </div>
  <?php if ($rows): ?>
    <div class="view-content as-cards">
      <?php print $rows; ?>
    </div>
  <?php elseif ($empty): ?>
    <div class="view-empty">
      <?php print $empty; ?>
    </div>
  <?php endif; ?>
</div>






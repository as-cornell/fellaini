<div class="as-page__block">
<div class="view-content as-container <?php print $classes; ?>">
  <?php if ($rows): ?>
  <?php print $rows; ?>
  <?php elseif ($empty): ?>
  <div class="view-empty">
  <?php print $empty; ?>
  </div>
  <?php endif; ?>
</div>
</div>

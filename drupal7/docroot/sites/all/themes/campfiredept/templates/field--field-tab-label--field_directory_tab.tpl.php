<?php foreach ($items as $delta => $item): ?>
  <!--PRINT TAB LABELS HERE TOO-->

  <div class="tab__pane active" id="<?php print str_replace(" ", "-",strtolower($item['#markup'])); ?>">
  <h2><?php print $item['#markup']; ?>
</h2>
  <table class="as-table">
<?php endforeach; ?>

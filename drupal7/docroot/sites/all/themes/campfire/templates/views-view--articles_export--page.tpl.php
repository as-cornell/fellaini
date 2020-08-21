<h1 class="pageTitle">
  Exported Articles
</h1>

<?php if ($exposed): ?>
    <div class="as-container view-filters">
      <?php print $exposed; ?>
    </div>
<?php endif; ?>

<?php if ($rows): ?>
  <div class="as-container">
    <?php print $rows; ?>
  </div>
<?php elseif ($empty): ?>
  <div class="view-empty">
    <?php print $empty; ?>
  </div>
<?php endif; ?>

<?php if ($pager): ?>
      <p>&nbsp;</p>
      <?php print $pager; ?>
<?php endif; ?>
<p>&nbsp;</p>

<h2>Courses</h2>
<?php if ($rows): ?>
	<?php print $rows; ?>
<?php elseif ($empty): ?>
	<div class="view-empty">
	<?php print $empty; ?>
	</div>
<?php endif; ?>

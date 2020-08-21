<div class="eventList eventList--horizontal">
<h2>Upcoming Events</h2>
<a href="/calendar-node-field-date-event/month" class="viewAll as-button as-button--light">View All Events</a>
<?php if ($rows): ?>
<div class="eventList__list">
<?php print $rows; ?>
</div>
	
	
<?php elseif ($empty): ?>
	<div class="view-empty">
	<?php print $empty; ?>
	</div>
<?php endif; ?>
</div>
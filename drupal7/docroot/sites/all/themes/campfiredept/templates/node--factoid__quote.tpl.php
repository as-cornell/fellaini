<?php
if (!empty($content['field_related_person'])): ?>

	<?php print render($content['field_related_person']); ?>
	<p class="quote__quote">
		<?php print render($content['field_description']); ?>
	</p>
	</div>

<?php else: ?>

	<?php if (!empty($content['field_image'])): ?>

			<?php print render($content['field_image']); ?>

	<?php endif; ?>
	<div class="field-description">
		<p class="quote__quote">
			<?php print render($content['field_description']); ?>
		</p>
	<?php if (!empty($content['field_quote_citation'])): ?>
		<p class="quote__citation">&mdash;<?php print render($content['field_quote_citation']); ?></p>
	<?php endif; ?>
	</div>
<?php endif; ?>

<div class="as-container pictureText pictureText--quote <?php if ($content['field_image']): ?>pictureText--quote--image<?php endif; ?>">
<?php if (!empty($content['field_related_person'])): ?>
	<?php print render($content['field_related_person']); ?>
	<p class="quote__quote">
		<?php print render($content['field_description']); ?>
	</p>
	</div>

<?php else: ?>

		<?php if ($content['field_image']): ?>
			<div class="field-image">
				<?php print render($content['field_image']); ?>
			</div>
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
</div>

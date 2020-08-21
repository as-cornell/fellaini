<!-- new faculty 15-16 -->
<div class="as-page__block">
	<div class="as-container">

		<div class="as-page__content--full">
			<h1 class="pageTitle"><?php print $title_attributes; ?><?php print $title; ?></h1>
			<?php print render($content['field_primary_body']); ?>
		</div>
		<div class="as-cards">
			<?php print render($content['field_first_persons_block']); ?>
		</div>
		<div class="as-page__content--full">
			<?php print render($content['field_secondary_body']); ?>
		</div>

		<div class="as-cards">
			<?php print render($content['field_second_persons_block']); ?>
		</div>

		<div class="as-page__content--full">
			<?php print render($content['field_tertiary_body']); ?>
		</div>

		<div class="as-cards">
			<?php print render($content['field_third_persons_block']); ?>
		</div>

		<div class="as-page__content--full">
			<?php print render($content['field_fourth_body']); ?>
		</div>
		<div class="as-cards">
		<?php print render($content['field_fourth_persons_block']); ?>
		</div>
		<div class="as-page__content--full">
			<?php print render($content['field_fifth_body']); ?>
		</div>
		<div class="as-cards">
		<?php print render($content['field_fifth_persons_block']); ?>
		</div>
		<?php if (!empty($content['field_sixth_body'])): ?>
		<div class="as-page__content--full">
			<?php print render($content['field_sixth_body']); ?>
		</div>
		<div class="as-cards">
		<?php print render($content['field_sixth_person_block']); ?>
		<?php endif; ?>
		</div>
	</div>
</div>

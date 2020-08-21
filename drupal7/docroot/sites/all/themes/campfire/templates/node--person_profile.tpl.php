<div class="as-page as-page__block">
	<div class="as-container">
		<article class='as-grid as-grid--one-two'>
			<div>
				<h1 class="pageTitle">
				<?php print $title; ?>
				</h1>
				<?php if (!empty($content['field_person_title']) || (!empty($content['field_primary_department_list']))): ?>
				<h2>
					<?php print render($content['field_person_title']); ?><br /> 
					<?php print render($content['field_primary_department_list']); ?>
				</h2>
				<?php endif; ?>
				<?php print render($content['field_image']); ?>
			</div>
			<div>
			<?php print render($content['body']); ?>
			</div>
		</article>

	</div>
</div>

<div class="as-container m-bottom-4">
	<h1>Featured Course</h1>
	<div class="as-grid as-grid--one-two course--spotlight">
		<div class="course__info">
			<h2 class="course__title"><?php print render($title); ?></h2>
			<span class="course__number">
				<?php
					print render($content['field_department_prefix']);
					print render($content['field_course_number']);
				?>
			</span>
		<?php if (!empty($content['field_courses_crosslisted'])): ?>
		<span class="course__crossListed">
			Crosslisted as: <br /><?php print render($content['field_courses_crosslisted']); ?>
		</span>
		<?php endif; ?>
		<span class="course__semester">
			<?php print render($content['field_semester']); ?>
		</span>
		<?php if ($content['field_related_person']): ?>
		<span class="course__professor">
			Instructor: <?php print render($content['field_related_person']); ?>
		</span>
		<?php else: ?>
		<span class="course__professor">Instructor:<br />
			<?php
				for($i=0, $count = count($content['field_person_first_name']);$i<$count;$i++) {
					if ($content['field_person_first_name'][$i]['#markup'] != ''){
						print "<a href='http://www.cornell.edu/search/people.cfm?q=".$content['field_person_first_name'][$i]['#markup']."%20".$content['field_person_last_name'][$i]['#markup']."'>";
						print $content['field_person_first_name'][$i]['#markup'];
						print "&nbsp;";
						print $content['field_person_last_name'][$i]['#markup'];
						print "</a><br />";
					}
				}
			?>
		</span>
		<?php endif; ?>
		</div>
		<div class="field-description">
			<?php print render($content['body']); ?>
		</div>
	</div>
</div>

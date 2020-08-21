<div class="course_teaser">
	<div class="course__number-title">
		<?php print render($content['field_department_prefix']); ?> <span class="course__number"><?php print render($content['field_course_number']); ?></span> : <span class="course__title"><?php print render($title); ?>
		</span>
	</div>

	<?php if (!empty($content['field_courses_crosslisted'])): ?>
		<span class="course__crossListed">
			<strong>Crosslisted as:</strong> <?php print render($content['field_courses_crosslisted']); ?>
		</span>
	<?php endif; ?>
	<span class="course__semesters">
		<strong>Semester offered:</strong> <span class="course__semester"><?php print render($content['field_semester']); ?></span>
	</span>

	<?php if (!empty($content['field_person_netid'])): ?>
		<span class="course__professor"><strong>Instructor:</strong>
			<div>
			<?php
				for($i=0, $count = count($content['field_person_netid']);$i<$count;$i++) {
					if (!empty($content['field_person_netid'][$i]['#markup'])){
							//$instructor = $node->field_person_netid['und'][$i]['value'];
							$instructor = $node->field_person_first_name['und'][$i]['value'];
							$instructor = $instructor ." ". $node->field_person_last_name['und'][$i]['value'] ."</br>";
              print $instructor;
					}
			}
			?>
		</div>
		</span>
	<?php endif; ?>
	<div class="course__details">
		<?php print render($content['body']); ?>
		<span class="course__link btn btn--clear btn--small"><a href="<?php print render($content['field_links']); ?>" target="_blank">Full details of <?php print render($content['field_department_prefix']);?> <?php print render($content['field_course_number']);?></a>
	</div>
	<span class="btn btn--small btn--gray btn--sort as-toggle__trigger">Description</span>
</div>

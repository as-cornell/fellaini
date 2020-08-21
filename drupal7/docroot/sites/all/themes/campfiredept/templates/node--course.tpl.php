<div class="as-page__block ">
  <div class="as-container course">
    <h2 class="element-invisible">You are here</h2><div class="breadcrumb">
    <a href="/">Home</a> » <a href="/academics">Academics</a> » <a href="/courses-index">Courses</a> » <?php print $title; ?></div>
    <div class="course--header">
      <span class="course__number"><?php print render($content['field_department_prefix']); ?><?php print render($content['field_course_number']); ?></span> <span class="course__title"><?php print render($title); ?></span>
      <span class="course__professor">Instructor:
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

    <?php if (!empty($content['field_courses_crosslisted'])): ?>
      <span class="course__professor">Crosslisted as: <?php print render($content['field_courses_crosslisted']); ?></span>
    <?php endif; ?>
      <span class="course__professor"><?php print render($content['field_semester']); ?></span>
    </div>

    <div class="course--main">
      <p class="course__description"><?php print render($content['body']); ?></p>
      <span class="course__link"><?php print render($content['field_links']); ?></span>
    </div>
  </div>
</div>

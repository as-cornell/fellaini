<div class="as-page__block">
<div class="as-container">
  <div class='as-quick-view'>
    <div class='as-quick-view__main'>
      <h2>
      <?php print render($content['field_department_prefix']); ?>&nbsp;<?php print render($content['field_course_number']); ?>
      </h2>
      <h3>
      <?php print $title_attributes; ?><?php print $title; ?>
      </h3>
      <h4>
      <?php print render($content['field_person_first_name']); ?>&nbsp;<?php print render($content['field_person_last_name']) ?>&nbsp;(<?php print render($content['field_person_netid']);?>&nbsp;)
      </h4>
      <?php print render($content['body']); ?>
    </div>
    <div class='as-divider'></div>
    <div class='as-quick-view__sidebar'>
      <h3>More Information</h3>
      <?php print render($content['field_links']); ?>
    </div>
  </div>
</div>
</div>

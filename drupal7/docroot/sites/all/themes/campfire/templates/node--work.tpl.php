<div class="as-page__block ">
  <div class="as-container person">
    <div class="person--sidebar">
      <h1 class="pageTitle"><?php print $title; ?></h1>
        <div class='person--picture'>
        <?php if ($content['field_image']): ?>
            <?php print render($content['field_image']); ?>
        <?php else: ?>
            <img typeof="foaf:Image" src="http://as.dd:8083/sites/as.dd/files/department_image/French400.jpg">
        <?php endif; ?>
        </div>
      <div class="divider divider--horizontal--center"></div>
    </div>
​
    <div class="person--main">
        <div class='person--overview'><h2>Overview</h2>
        <?php print render($content['body']); ?>
        </div>
        <div class='person--research'>
        <h2>Year</h2>
        <?php print render($content['field_dateline']); ?>
        </div>
        <h2>Related People</h2>
        <?php if ($content['field_related_people']): ?>
            <?php print render($content['field_related_people']); ?>
        <?php else: ?>
            <?php print render($content['field_byline']); ?>
        <?php endif; ?>
        </div>
        <div class='person--publications'>
        <h2>Related Departments or Programs</h2>
        <?php if ($content['field_related_dept_prog']): ?>
            <?php print render($content['field_related_dept_prog']); ?>
        <?php else: ?>
            <?php print render($content['field_department_prefix']); ?>
        <?php endif; ?>
        </div>
        <div class='person--publications'>
        <h2>Links</h2>
        <?php print render($content['field_links']); ?>
        </div>
        <div class='person--publications'>
        <h2>Type</h2>
        <?php print render($content['field_work_type']); ?>
        </div>
    </div>
  </div>
</div>
</div>


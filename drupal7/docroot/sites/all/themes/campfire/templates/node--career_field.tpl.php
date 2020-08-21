<div class="as-page__block">
  <div class="as-container">
    <h1>Career Field</h1>
    <div class='as-quick-view'>

      <div class='as-quick-view__main'>
        <h1>
        <?php print $title_attributes; ?><?php print $title; ?>
        </h1>
        <?php print render($content['body']); ?>
        <?php if ($content['field_students_careers']): ?>
            <h3>Careers</h3>
            <?php print render($content['field_students_careers']); ?>
        <?php endif ;?>
        <?php if ($content['field_related_major_minor_or_gra']): ?>
            <h3>Related Major or Minor</h3>
            <?php print render($content['field_related_major_minor_or_gra']); ?>
        <?php endif; ?>
        <?php if ($content['field_related_articles']): ?>
            <h3>Student and Alumni Stories</h3>
            <?php print render($content['field_related_articles']); ?>
        <?php endif; ?>
      </div>
      <div class='as-divider'></div>
      <div class='as-quick-view__sidebar'>
        <?php print render($content['field_image']); ?>
        <?php print render($content['field_links']); ?>

        <?php if (($content['field_related_persons']) OR ($content['field_related_people'])): ?>
            <h3>Related People</h3>
            <?php if ($content['field_related_persons']):?>
                <div class="m-bottom-0">
                    <?php print render($content['field_related_persons']); ?>
                </div>
            <?php endif; ?>
            <?php if ($content['field_related_people']): ?>
                <?php print render($content['field_related_people']); ?>
            <?php endif;?>


        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

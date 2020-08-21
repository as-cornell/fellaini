
<div class="<?php print $classes; ?> clearfix feature-story curriculum-review"<?php print $attributes; ?>>
    <div class="as-page__block">
        <div class="as-container">
            <h1 class="pageTitle">Arts & Sciences Curriculum Proposal</h1>
            <div class="wrap">
                <!-- body -->
                <?php print render($content['description_field']); ?>
                <!-- two -->
                <?php print render($content['field_secondary_body']); ?>
                <!-- three -->
                <?php print render($content['field_tertiary_body']); ?>
                <?php if ($content['field_curriculum_items']): ?>
                    <h2 style="margin-left:0;">The Curriculum</h2>
                    <?php print render($content['field_curriculum_items']); ?>
                <?php endif; ?>
                <!-- four -->
                <?php print render($content['field_fourth_body']); ?>    
                <!-- five -->
                <?php print render($content['field_fifth_body']); ?>
            </div>
        </div>
    </div>
</div>

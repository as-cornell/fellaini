<div class="card card--person">

  <a href="<?php print $node_url; ?>">
    <div class="card__image">
      <?php if (!empty($content['field_remote_image'])) {
            print "<img typeof='foaf:Image' src='".render($content['field_remote_image'])."' alt='".$title."'/>";
          }elseif (!empty($content['field_image'])) {
            print render($content['field_image']);
          }else{
              print "<img typeof='foaf:Image' src='https://as.cornell.edu/sites/as/files/Klarman_profile.jpg' alt='Klarman'/>";
          }
      ?>
    </div>
    <div class="card__content">
      <h1 class="card--person__name">
        <?php print $title_attributes; ?><?php print $title; ?>
      </h1>
      <h2 class="card--person__title">
        <?php print render($content['field_person_title']);?>
        <br />

      <?php if (!empty($content['field_other']['#anotherclass'])): ?>
        <?php print(rtrim($content['field_other']['#anotherclass']));?>
      <?php endif; ?>
      </h2>

    <!-- categories list -->
    <?php if (!empty($content['field_person_categories'])):?>
        <div class="person__categories">
            <p>Interests:</p>
            <?php print(rtrim($content['field_person_categories']['#catsList']));?>
        </div>
    <?php endif; ?>


      <div class="research hidden">all<?php if (!empty($content['field_person_categories'])): ?><?php print(rtrim($content['field_person_categories']['#newclass']));?><?php endif; ?></div>


      <div class="region hidden">all<?php if (!empty($content['field_regions'])): ?><?php print(rtrim($content['field_regions']['#newclass']));?><?php endif; ?></div>


      <div class="type hidden">all<?php if (!empty($content['field_other']['#newclass'])): ?><?php print(rtrim($content['field_other']['#newclass']));?><?php endif; ?></div>


  </div>
      <p class="card__linkText">
        Learn More
      </p>

  </a>

</div>

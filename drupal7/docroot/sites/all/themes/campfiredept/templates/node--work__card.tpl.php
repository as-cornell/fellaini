<div class="card card--work">
    <a href="#nid-<?php print $node->nid?>" class="magnific">
        <div class="card__image">
            <?php if (!empty($content['field_image'])): ?>
            <?php print render($content['field_image']);?>
            <?php else: ?>
            <img typeof='foaf:Image' src='http://as.cornell.edu/sites/as/files/Klarman_profile.jpg'>
            <?php endif;?>
        </div>
        <div class="card__content">
            <h1 class="card__title"><?php print $title;?></h1>
            <h2 class="card__subtitle"><?php print render($content['field_related_person']);?></h2>
        </div>
    </a>
</div>

<div id="nid-<?php print $node->nid?>" class="inline-popup mfp-hide">
  <div class='as-quick-view quick-view--work'>

    <div class='as-quick-view__main'>
      <h1 class="work__title">
        <?php print $title;?>
      </h1>
      <div class="work__author">
        <?php if (!empty($content['field_related_person'])): ?>
            <!-- Link to related_person -->
            <?php
$thisnid = "node/" . $node->field_related_person['und'][0]['target_id'];
$alias = drupal_get_path_alias($thisnid);
?>
            <p><a href="<?php print $alias;?>"><?php print render($content['field_related_person']);?></a>
          </p>
        <?php endif;?>
      </div>
      <div class="work__overview">
        <?php print render($content['body']);?>
      </div>


    </div>
    <div class='as-quick-view__sidebar'>
      <?php print render($content['field_image']);?>
        <?php if (!empty($content['field_related_dept_prog_link'])): ?>
          <h3>Related Departments or Programs</h3>
          <?php print render($content['field_related_dept_prog_link']);?>
        <?php endif;?>
         <br>
      <div class="work__links">
        <h3>Links</h3>
        <?php print render($content['field_links']);?>
      </div>

    </div>
  </div>
</div>

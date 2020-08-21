<article class="as-card card--work">
  <a href="#nid-<?php print $node->nid?>" class="magnific">
    <div class="as-card__img">
      <?php if ($content['field_image']): ?>
        <?php print render($content['field_image']); ?>
      <?php else: ?>
        <img typeof='foaf:Image' src='http://as.cornell.edu/sites/as/files/Klarman_profile.jpg'>
      <?php endif; ?>
    </div>
    <div class="as-card__inner">
      <div class="as-card__copy">
        <h1 class="work__title">
          <?php print $title; ?>
        </h1>
        <div class="work__people">
        <?php if ($content['field_related_people']): ?>
          <?php print render($content['field_related_people']); ?>
        <?php else: ?>
          <?php print render($content['field_byline']); ?>
        <?php endif; ?>
        </div>

        <?php if ($content['field_related_dept_prog']): ?>
          <?php print render($content['field_related_dept_prog']); ?>
        <?php endif; ?>

      </div>
    </div>
  </a>
</article>

<div id="nid-<?php print $node->nid?>" class="inline-popup mfp-hide">
  <div class='as-quick-view quick-view--work'>

    <div class='as-quick-view__main'>
      <h1 class="work__title">
        <?php print $title; ?>
      </h1>
      <div class="work__author">
        <?php if ($content['field_related_people']){
            $personlink = '';
            for($i=0, $count = count($content['field_related_people']);$i<$count;$i++) {
              if ($content['field_related_people'][$i]['#markup'] != ''){
                $nodeurl = url('node/'. $node->field_related_people['und'][$i]['target_id']);
                $nodeurl = $GLOBALS['base_url'].$nodeurl;
                $personlink = $personlink ."<a href='".$nodeurl."'>". $content['field_related_people'][$i]['#markup']."</a><br>\n";
                  }
                }
            print $personlink;
           } else {
            print render($content['field_byline']);
        }
         ?>
      </div>
      <div class="work__overview">
      <h2>Overview</h2>
        <?php print render($content['body']); ?>
      </div>
      <div class="work__pubDate">
        <h3>Published Date</h3>
        <?php print render($content['field_dateline']); ?>
      </div>

    </div>
    <div class='as-quick-view__sidebar'>
      <?php print render($content['field_image']); ?>
      <h3>Related Departments or Programs</h3>
        <?php if ($content['field_related_dept_prog']){
            $deptlink = '';
            for($i=0, $count = count($content['field_related_dept_prog']);$i<$count;$i++) {
              if ($content['field_related_dept_prog'][$i]['#markup'] != ''){
                $nodeurl = url('node/'. $node->field_related_dept_prog['und'][$i]['target_id']);
                $nodeurl = $GLOBALS['base_url'].$nodeurl;
                $deptlink = $deptlink ."<a href='".$nodeurl ."'>". $content['field_related_dept_prog'][$i]['#markup']."</a><br>\n";
                  }
                }
            print $deptlink;
           } else {
             print render($content['field_department_prefix']);
        }
         ?>
         <br>
      <div class="work__links">
        <h3>Links</h3>
        <?php print render($content['field_links']); ?>
      </div>

    </div>
  </div>
</div>

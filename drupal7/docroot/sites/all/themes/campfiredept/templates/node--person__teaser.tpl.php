<?php if (!empty($content['field_remote_image'])) {
      print "<img typeof='foaf:Image' src='".render($content['field_remote_image'])."' alt='".$title."'/>";
    }elseif (!empty($content['field_image'])) {
      print render($content['field_image']);
    }else{
        print "<img typeof='foaf:Image' src='https://as.cornell.edu/sites/as/files/Klarman_profile.jpg' alt=''/>";
    }
?>
<div class="as-card__inner">
  <div class="as-card__copy">
    <div class="as-card__title"
      <?php print $title_attributes; ?>><?php print $title; ?>
    </div>
    <div class="as-card__link">
      <a href="<?php print $node_url; ?>" class="as-link--arrow">Learn More</a>
    </div>
    <div>This is a person teaser.</div>
  </div>
</div>

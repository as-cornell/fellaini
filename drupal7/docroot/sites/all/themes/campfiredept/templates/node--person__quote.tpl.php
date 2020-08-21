<!-- template for quote from related person in spotlight -->

<div class="field-image">
  <?php if (!empty($content['field_remote_image'])) {
        print "<img typeof='foaf:Image' src='".render($content['field_remote_image'])."' alt='".$title."'/>";
      }elseif (!empty($content['field_image'])) {
        print render($content['field_image']);
      }else{
          print "<img typeof='foaf:Image' src='https://as.cornell.edu/sites/as/files/Klarman_profile.jpg' alt=''/>";
      }
  ?>
</div>
<div class="field-description">
 <p class="quote__citation">
 	&mdash;<a href="<?php print $node_url; ?>">
	<?php
	print render($content['field_person_first_name']);
	print render($content['field_person_last_name']);
	print ",&nbsp;";
	print render($content['field_person_title']);
	?></a>
</p>

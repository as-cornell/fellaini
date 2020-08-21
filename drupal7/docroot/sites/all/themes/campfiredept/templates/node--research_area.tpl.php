<!-- Research Area -->
<?php $site_name =  variable_get('site_name', 'Drupal'); ?>
<div class="as-page__block as-page__block--top">
  <div class="as-container">
    <div class="grid grid--two-one">
    	<div>
            <h1 class="pageTitle">
        <?php print $title; ?>
      </h1>

    		<?php print render($content['body']); ?>
    	</div>
    	<div><?php print render($content['field_image']); ?>
            <?php if (!empty($content['field_area_faculty'])): ?>
              <?php // will need to check vs site name for special labels
                if ($site_name == "Carl Sagan Institute") {
                    echo "<h2 class='first'>Affiliated Team Members</h2>";
                } else {
                    echo "<h2 class='first'>Faculty</h2>";
                }
              ?>

        
              
    		<ul>
  	  		<?php print render($content['field_area_faculty']); ?>
    		</ul>
        <?php endif; ?>
    		<?php print render($content['field_secondary_body']); ?>
    	</div>
    </div>
  </div>
    <div class="divider divider--horizontal--center"></div>
  <div class="as-container">
    <h2 class="centered">Other
        <?php // will need to check vs site name for special labels
        if ($site_name == "Department of Asian Studies") {
            echo "Languages";
        } else {
            echo "Research";
        }
        ?>
    </h2>
    <div class="btns btns--horizontal">
      <?php
        print views_embed_view('research', 'research_list');
      ?>
    </div>
  </div>
</div>

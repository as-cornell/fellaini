<?php //print views_embed_view('factoid_blocks', 'block_1', 2356); ?>

<div class="as-img">
  <div class="as-hero">
    <?php print render($content['field_pano_image']); ?>
    <div class="as-container">
      <div class="as-hero__copy">
        <?php print render($content['field_hero']); ?>
      </div>
    </div>
  </div>
</div>
<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

 <!-- popular places  + concierge -->
  <div class="as-page__block contain as-page__block contain--gray">
    <div class="content as-places">
      <div class="as-container">
  <!-- action links -->
        <div class="links links--inline">
          <?php print render($content['field_secondary_action_link']); ?>
        </div>

        <!--<h3 class="field-label">Pick a Destination</h3>
        <div class="as-popular-links__destinations">
          <?php
          //$block = block_load('views', '-exp-concierge-page');
          //$output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
          //print $output; ?>
        </div>-->
        <div class='as-divider'></div>
        <div class="as-container links links--inline links--gray centered">
          <?php print render($content['field_links']); ?>
        </div>
      </div>
    </div>
  </div>

<div class="as-page__block">
  <div class="as-container featureIntroduction">
    <?php print render($content['field_secondary_body']); ?>
  </div>
  
  <div class="as-container imageText--feature">
    <?php print render($content['field_image_text']); ?>
  </div>
</div>

<!--
<div class="as-page__block contain">
      <div class="as-container pictureText pictureText--colorbar pictureText--colorbar--gold" aria-labeledby="title">
        <div class="field-image">
          <img src="https://as.cornell.edu/sites/as/files/Klarman%20sunset600_0.jpg" alt="">
        </div>
         <div class="field-description">
          <h1 class="as-section__title" id="title">
              Visit the College
          </h1>
            <p>
                The best way to know if Arts & Sciences is the right fit for you is to visit our campus in Ithaca, NY. You can take a tour, attend an information session, or meet students and faculty members.
            </p>
          <a href="http://www.cornell.edu/visit">Plan your visit</a><br />
          <a href="https://issuu.com/cornellcas/docs/artsci_lead_finalweb">View A&amp;S brochure</a>
        </div>
    </div>
</div>
-->
<!-- 
<div class="as-page__block contain">
      <div class="as-container pictureText pictureText--colorbar pictureText--colorbar--blue pictureText--lr">
         <div class="field-image">
          <img src="https://as.cornell.edu/sites/as/files/ambassador.jpg" alt="">

        </div>
        <div class="field-description">
          <h1 class="as-section__title">
              Student Views
          </h1>
           <p>Want to know more about life on campus? Our student ambassadors blog about everything from food to friends to finals week here.</p>
          <a href="http://ambassadors.as.cornell.edu">Meet the A&amp;S Ambassadors</a>
        </div>
    </div>
</div>
 -->
<!--
  <?php print render($content['field_primary_body']); ?>
-->


  <!-- stats -->
  <div class="as-page__block contain">
    <h3 class="centered">By the Numbers</h3>
    <?php if ($content['field_stat']): ?>
        <div class="as-stats">
          <?php print render($content['field_stat']); ?>
        </div>
      <?php else: ?>
        <div class="as-stats">
          <?php
          $block = block_load('views', 'factoid_blocks-block');
          $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
          print $output; ?>
        </div>
    <?php endif; ?>
  </div>

  <!-- bottom feature -->


  <!-- bottom feature -->
  <div class="color: shade($as-gold, 66.6%);">
    <?php print render($content['field_major_minor_feature']); ?>
  </div>
   <!-- 'views', 'factoid_blocks-quote_block' removed 8/27 -->

  <!-- person, switched to article lookup per Tricia on 8/7 -->
    <div class="color: shade($as-gold, 66.6%);">
      <?php print render($content['field_article']); ?>
    </div>

  <!-- action links moved to top to replace concierge 8/27 -->

  <!--<div>This is the admissions bean.</div>  -->

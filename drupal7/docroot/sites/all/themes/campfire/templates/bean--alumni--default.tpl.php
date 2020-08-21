<!-- Alumi Bean -->

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

 <!-- popular places -->
  <div class="as-page__block">
    <div class="content as-places">
      <div class="as-container">
        <h3 class="field-label">Pick a Destination</h3>


        <div class="as-container links links--inline links--long links--gray centered">
          <?php print render($content['field_links']); ?>
        </div>

      </div>
    </div>
  </div>
   <!-- Stay Connected -->
  <div class="as-page__block">
    <div class="as-container">
      <?php print render($content['field_primary_body']); ?>
      </div>
    </div>
  </div>

  <!-- Alumni Stories -->
  <div class="as-page__block">
    <div id="alumni-news" class="as-container">
      <h1>Alumni News</h1>
      <div class="as-cards as-cards__wrapper">
        <?php if (!empty($content['field_article'])): ?>
          <?php print render($content['field_article']); ?>
        <?php else: ?>
          <?php
          $block = block_load('views', '5398f1e205e28b926afc9ed67a1c97d8');
          $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
          print $output; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <!-- Support -->
  <div class="content centered">
    <h2>Support Arts &amp; Sciences</h2>
    <div class="as-color-bar4">
      <div class="as-container as-tabloid">
        <div class="as-tabloid__copy--full">
          <p>When you give to the College of Arts &amp; Sciences, you are supporting the nexus of research and teaching at Cornell University.</p>
          <a href="https://www.giving.cornell.edu/give/?gifttype=1&gifttype2=4&refer_code=AAWeb

">Donate</a>
        </div>
      </div>
    </div>
    <div class="as-container as-grid as-grid--four contact-boxes">
      <div>
        <span><span class="as-icon as-icon--call "></span></span>
        <p><strong>Call</strong><br/>(800) 279.3099</p>
      </div>
      <div>
        <span><span class="as-icon as-icon--mail "></span></span>
        <p><strong>Mail</strong><br />Box 37334<br />Boone, IA <br />50037-0334</p>
      </div>
      <div>
        <span><span class="as-icon as-icon--gift "></span></span>
        <p><strong>Gift of Securities</strong><br /><a href="https://giving.cornell.edu/waystogive/securities.cfm">Make a gift</a></p>
      </div>
      <div>
        <span><span class="as-icon as-icon--heart "></span></span>
        <p><strong>Planned Giving</strong><br /><a href="http://alumni.cornell.giftplans.org/">Make plans with us</a></p>
      </div>
    </div>
  </div>



  <div class="divider divider--horizontal"></div>
  <!-- three block -->
  <div class="as-page__block">
    <div class="as-container">
      <?php print render($content['field_secondary_body']); ?>
      </div>
    </div>
  </div>


  <!-- bottom feature -->
  <div class="color: shade($as-gold, 66.6%);">
    <?php print render($content['field_bottom_feature']); ?>
  </div>


   <!-- quote
<div class="as-page__block">
  <?php
    ## $block = block_load('views', 'factoid_blocks-quote_block');
    ## $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
    ## print $output;
  ?>
</div>-->
<div class="divider divider--horizontal"></div>
<div class="as-page__block">
  <div class="as-container as-container--narrow centered">
    <?php print render($content['field_tertiary_body']); ?>
  </div>
</div>

  <!-- action links -->
  <div class="content">
    <div class="as-container">
      <div class="links links--inline">
        <?php print render($content['field_secondary_action_link']); ?>
      </div>
    </div>
  </div>
  <!--<div>This is the alumni bean.</div>  -->

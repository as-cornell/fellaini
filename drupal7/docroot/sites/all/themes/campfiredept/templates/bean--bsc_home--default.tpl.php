<div class="as-page" style="padding-bottom: 0px;">
  <div class="as-container">
<h1 class="pageTitle">
  <?php print $title; ?>
</h1>

  </div>
</div>

  <!-- top content block -->
  <?php if ($content['field_description']): ?>
  <div class="as-page__block">
    <div class="as-container as-grid as-grid--two-one">
      <div class="as-page__content">
        <?php print render($content['field_description']); ?>
      </div>
      <div class="as-page__sidebar">
        <?php print render($content['field_section_text']); ?>

      </div>
    </div>
  </div>
  <?php endif; ?>

  <div class="as-page__block">
    <div class="as-container">
      <h3 class="centered">Popular Questions for the BSC</h3>
        <div class="as-container links links--gray links--inline centered">
          <?php print render($content['field_popular_links']); ?>
        </div>
    </div>
  </div>



<div class="as-page__block">
  <div class="as-container as-grid as-grid--one-two">
    <div>
      <?php print render($content['field_text_one']); ?>
    </div>
    <div>
      <h2>BSC Quick Links:</h2>
      <div class="as-grid">
      <?php print render($content['field_text_two']);?>
      </div>
    </div>
    <!-- <div>
    <?php print render($content['field_text_three']); ?>
    </div> -->

  </div>
</div>

  <!--  photo and text content blocks  -->
  <?php if (!empty($content['field_phototext_1'])): ?>
  <div class="as-page__block">
    <div class="as-container">
      <?php print render($content['field_phototext_1']); ?>
    </div>
    <?php if (!empty($content['field_phototext_2'])): ?>
    <div class="as-container pictureText">
      <?php print render($content['field_phototext_2']); ?>
    </div>
    <?php endif; ?>
  </div>
  <?php endif; ?>

  <!--  quote  -->
  <?php if (!empty($content['field_related_factoid'])): ?>
  <div class="as-page__block">
    <div class="as-container pictureText pictureText--quote">
      <?php print render($content['field_related_factoid']); ?>
    </div>
  </div>
  <?php endif; ?>





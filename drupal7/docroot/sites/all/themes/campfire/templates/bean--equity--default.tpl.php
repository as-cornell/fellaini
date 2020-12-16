<!-- Introduction -->
<div class="as-page__block">
  <div class="as-container as-container__narrow m-bottom-3">
    <?php print render($content['field_primary_body']); ?>
  </div>
  <div class="as-container as-container__960 m-bottom-3">
    <?php print render($content['field_secondary_body']); ?>
    <div class="as-grid">
      <div>
        <?php print render($content['field_tertiary_body']); ?>
      </div>
      <div class="as-grid">
        <?php print render($content['field_related_major_minor_or_gra']); ?>
      </div>
    </div>

  </div>
  <div class="as-container m-bottom-3">
    <?php print render($content['field_fourth_body']); ?>
  </div>
  <div class="as-container m-bottom-3">
    <h2>Faculty Research in the News</h2>
    <div class="as-grid as-grid--four">
      <?php print render($content['field_article']); ?>
    </div>
  </div>
  <div class="as-container as-container__960 m-bottom-3">
    <?php print render($content['field_fifth_body']); ?>
    <?php print render($content['field_sixth_body']); ?>
  </div>
  <div class="as-container">
    <h2>A&S News Related to Diversity, Equity and Justice </h2>
    <div class="as-grid as-grid--four">
      <?php print views_embed_view('factoid_blocks', 'block_1', 'Equity'); ?>
    </div>

  </div>

</div>
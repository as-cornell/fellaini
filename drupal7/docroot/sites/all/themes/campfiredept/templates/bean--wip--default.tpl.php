<!-- hero -->
<!-- hero -->
<div class="as-img">
  <div class="as-hero">
    <?php print render($content['field_pano_image']); ?>
    <div class="as-container">
      <div class="as-hero__copy">
        <h1>
          <?php print $title; ?>
        </h1>
      </div>
    </div>
  </div>
</div>



  <!-- top content block -->
  <div class="as-page__block">
    <div class="as-container as-grid as-grid--two-one">
      <div>
        <?php print render($content['field_text_one']); ?>
      </div>
      <div class="">
        <h2>Join the WiP+ Listserv</h2>
        <form action="https://www.list.cornell.edu/subscribe/subscribe.tml" method="POST" class="single">
            <input type="text" name="email" value="" placeholder="Email address" class="input">
            <input type="submit" class="submit" value="subscribe" title="subscribe" alt="subscribe"  name="subscribe" align="left" class="submit">
            <input type="hidden" name="list" value="physwomen-l"><input type="hidden" name="lists" value="physwomen-l" >
        <input type="hidden" name="demographics" value="" >
        <input type="hidden" name="name_required" value="" >
        <input type="hidden" name="pw_required" value="" >
        <input type="hidden" name="confirm" value="one" >
        <input type="hidden" name="showconfirm" value="T" >
        <input type="hidden" name="url" value="" >
        <input type="hidden" name="appendsubinfotourl" value="" >
        <input type="hidden" name="secx" value="54e81846" >
        </form>

          <?php print render($content['field_related_articles']); ?>

      </div>

    </div>
    <div class="as-container">
        <?php print render($content['field_text_three']); ?>
    </div>
  </div>


  <div class="as-page__block">
      <div class="as-container">
          <h2>What do Scientists Look Like?</h2>
           <div class="slider slider--tabloid slider--tabloid--wip" id="carousel" aria-live="polite">
              <ul class="slides no-circles">
                  <?php if (!empty($content['field_phototext_2'])): ?>
                    <?php print render($content['field_phototext_2']); ?>
                  <?php endif; ?>
              </ul>
              <fieldset class="navigation" aria-label="carousel buttons" aria-controls="carousel">
                <button class="prev" aria-label="previous">Prev<span class="as-icon as-icon--arrow-down"></span></button>
                <button class="next" aria-label="next"><span class="as-icon as-icon--arrow-down"></span>Next</button>
              </fieldset>
          </div>
      </div>
  </div>

  <div class="as-page__block">
      <div class="as-container">
           <?php print render($content['field_text_two']); ?>
      </div>

  </div>
  <!-- News Stories -->
  <div class="as-page__block">
    <div id="research-news" class="as-container">
      <h1>WiP+ in the News</h1>
      <a href="/news/wip" class="viewAll as-button as-button--light">View News</a>
      <div class="cards grid grid--four">
      <?php //print views_embed_view('article_blocks', '4_articles_flt'); ?>
      <?php print views_embed_view('article_blocks', '8_articles_flt', 'wip'); ?>
      </div>


    </div>

  </div>
  <div class="as-page__block">

      <div class="as-container">
          <?php print render($content['field_text_four']); ?>
      </div>
  </div>
  <!--  photo and text content blocks  -->
  <?php if ($content['field_phototext_1']): ?>
    <div class="as-page__block">
        <div class="as-container">
            <h2>Meet our Students</h2>
            <div class="">
                <?php print render($content['field_phototext_1']); ?>
            </div>

        </div>
    </div>
  <?php endif; ?>

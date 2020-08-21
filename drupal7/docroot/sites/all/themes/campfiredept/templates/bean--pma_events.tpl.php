
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
    <div class="as-container as-page__content--wideSidebar">
      <div class="as-page__content as-page__introduction">
        <?php print render($content['field_description']); ?>
      </div>
      <div class="as-page__sidebar">
        <h3 class="centered">In this section</h3>
        <div class="as-container links links--gray links--stacked centered">
          <?php print render($content['field_popular_links']); ?>
        </div>
      </div>
    </div>
  </div>

  <div class="divider divider--horizontal--center"></div>



  <!-- Upcoming Events stories -->
  <div class="as-page__block">
    <section id="research-news" class="as-container as-cards__wrapper">
      <h1>Upcoming PMA Events</h1>
      <div class="content as-cards--straight as-cards--events">
      <div class="cards grid grid--four">
      <?php print views_embed_view('article_blocks', '16_articles_flt', 'pmaevent'); ?>
      </div>
      </div>
    </section>

</div>
<!-- dates -->

    <div class="as-page__block">
      <div class="as-container">
        <!-- event listing -->
        <div>
          <h2>Cornell Cinema</h2>
          <!-- <a href="http://events.cornell.edu" class="viewAll as-button as-button--light">View All</a> -->
          <div class="eventList eventList--horizontal">
            <?php print render($content['field_eventsblk']); ?>
          </div>
        </div>
      </div>




  <!-- Past Events stories -->

    <section id="research-news" class="as-container as-cards__wrapper">
      <h1>Past PMA Events</h1>
      <div class="content as-cards--straight as-cards--events">
      <div class="cards grid grid--four">
      <?php print views_embed_view('article_blocks', '16_flt_open', 'pmapastevent'); ?>
      </div>
      </div>
    </section>
</div>
  <div class="divider divider--horizontal--center"></div>

  <!--content_two
    <div class="as-container">
      <?php //print render($page['content_two']) ?>
    </div>
  -->


  <!--  photo and text content blocks  -->
  <?php if (!empty($content['field_phototext_1'])): ?>

      <article class="as-container pictureText">
        <?php print render($content['field_phototext_1']); ?>
      </article>
      <?php if (!empty($content['field_phototext_2'])): ?>
      <article class="as-container pictureText">
        <?php print render($content['field_phototext_2']); ?>
      </article>
      <?php endif; ?>
    </div>
  <?php endif; ?>

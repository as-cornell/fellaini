
<!--<div class="as-page__block">
  <div class="as-container">-->
    <?php if ($header): ?>
    <div class="view-header">
      <?php print $header; ?>
    </div>
  <?php endif; ?>


<div class="view-content as-container as-cards as-cards__wrapper <?php print $classes; ?>">
  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <?php print $title; ?>title
  <?php endif; ?>
  <?php print render($title_suffix); ?>


  <?php if ($exposed): ?>
    <div class="as-container view-filters">
      <?php print $exposed; ?>
    </div>
  <?php endif; ?>

  <?php if ($attachment_before): ?>
    <div class="attachment attachment-before">
      <?php print $attachment_before; ?>
    </div>
  <?php endif; ?>

  <?php if ($rows): ?>
      <article class="as-card as-card--article stamp" aria-label="seniors discussing their journeys">
              <a class="popLink" href="https://www.youtube.com/watch?v=52zfbN7ueso">
            <div class="hasIcon-YT">
                <img src="http://as.cornell.edu/sites/as/files/journeys-video.jpg" alt="2017 Seniors in theatre">
            </div>


          <div class="as-card__inner">
              <div class="as-card__copy">
                  <h1 class="as-card__title">
                       Our students share how their Cornell experiences have transformed their views of the world.
                  </h1>
                  <h2 class="as-card__subtitle">Extraordinary Journeys</h2>
                  <span class="as-card__link">
                      Watch the video
                  </span>
              </div>
          </div>
          </a>
      </article>

      <?php print $rows; ?>
  <?php elseif ($empty): ?>
    <div class="view-empty">
      <?php print $empty; ?>
    </div>
  <?php endif; ?>



  <?php if ($attachment_after): ?>
    <div class="attachment attachment-after">
      <?php print $attachment_after; ?>
    </div>
  <?php endif; ?>

  <?php if ($more): ?>
    <?php print $more; ?>
  <?php endif; ?>

  <?php if ($footer): ?>
    <div class="view-footer">
      <?php print $footer; ?>
    </div>
  <?php endif; ?>

  <?php if ($feed_icon): ?>
    <div class="feed-icon">
      <?php print $feed_icon; ?>
    </div>
  <?php endif; ?>


</div>

<?php if ($pager): ?>
    <?php print $pager; ?>
  <?php endif; ?>

<?php /* class view */ ?>
<!--</div>
</div>-->

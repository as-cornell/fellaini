
<div class="<?php print $classes;?> clearfix"<?php print $attributes;?>>
  <!-- campfire -->
	<div class="as-container as-cards__wrapper">
		<div class="content as-cards as-cards--campfire">
			<?php print render($content['field_article']);?>
    </div>
    <p class="centered">
        <a href="https://as.cornell.edu/all-articles
" class="button">View all A&S News</a>
      </p>
	</div>

    <div class="as-container imageText--feature">
      <?php print render($content['field_tertiary_body']); ?>
    </div>

  <!-- popular destinations -->
  <div class="as-page__block as-page__block--gray">

    <div class="content as-places">
    	<div class="as-container">
        <!-- <h3 class="field-label">Information For</h3>

        <div class='as-divider'></div> -->
  	    <div class="as-container links links--inline links--gray centered">
          <?php print render($content['field_links']);?>
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
<div class="as-page__block as-page__block--no-top">
  <div class="as-container">
      <h2 class="centered">Upcoming Events</h2>
      <div class="eventList eventList--horizontal">
        <?php print render($content['field_events']);?>
      </div>
      <p class="centered">
        <a href="https://events.cornell.edu/search/events?order=date&search=cascal" class="button">View all A&S Events</a>
      </p>
    </div>
</div>
</div>

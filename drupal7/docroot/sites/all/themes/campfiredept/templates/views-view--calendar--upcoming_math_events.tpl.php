


    <?php $title = $view->get_title();?>


<div class="as-page__block">
  <div class="as-container">
    <h1 class="pageTitle pageTitle--first"><?php print t($title)?></h1>
  </div>

  <div class="as-container as-grid as-grid--one-two eventListingPage">
    <div>
      <?php print $header;?>

    </div>
    <div>
      <?php print $rows;?>
    </div>
  </div>
</div>
</div>

</div>
<div class="eventListing eventListing--calendar eventListItem">
  <span class="image" style="display: block; width: 100px;">
  [field_image]
  </span>
  <span class="eventListing__details">
    <h3> [field_series]<h3><br />
    <span class="eventListing__title">[title]</span><br />
    <span class="">[field_text_three]</span><br />
    <span class="">[field_short_text_two]</span>
  </span>
  <span class="date" style="display: block; width: 100px;">
    <span class="month">[field_date_event_1]</span>
    <span class="day">[field_date_event_2]</span><br />
    <span class="eventTime">[field_date_event_3]</span>
    <span class="">[field_short_text_one]</span>
  </span>
</div>


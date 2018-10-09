

  private function generate_event_item_markup($bean,$event_data, $current_count) {
    // Deal with localist's funky json structure
    $event = $event_data['event'];
    $event_description = $this->format_event_description($event['description']);
    $event_date = $this->format_event_date($event['event_instances'][0]['event_instance']['start']);
    $event_type_info = $this->format_event_type_info($event['filters']);
    $event_localist_url = $this->format_localist_event_url($event['localist_url']);
    $event_title = truncate_utf8(strip_tags($event['title']), 55, FALSE, TRUE);
    $event_photo = $this->format_event_description($event['photo_url']);
    $event_location = $this->format_event_description($event['location_name']);
    $event_location_url = $this->format_event_description($event['venue_url']);

    // Create the markup



    $markup = "<div class='eventListing'>\n<a href='{$event_localist_url}' itemprop='url' class='eventListing__link' itemscope itemtype='http://schema.org/Event'> ";
    $markup .= "<span class='eventListing__date' itemprop='startDate'
  content='". $event_date ['ymdhm'] ."'><span class='month'>" . $event_date ['month'] . "</span><span class='day'> " . $event_date ['date'] . "</span></span>";

    $markup .= "<span class='eventListing__details'><span itemprop='name' class='eventListing__title'>{$event_title}</span>\n";

    $markup .= "<span itemprop='description' class='eventListing__description'>{$event_description}</span>\n";

    $markup .= "<span class='eventListing__image'><img src='{$event_photo}'/></span><span class='eventListing__more'>See More</span></span>\n";
    //$markup .= "<a href='{$event_localist_url}' itemprop='url' class='eventListing__link'><span itemprop='name' class='eventListing__title'>{$event_title}</span></a>\n";
    $markup .= "</a>\n</div><!-- end article -->\n\n";

    return $markup;
  }





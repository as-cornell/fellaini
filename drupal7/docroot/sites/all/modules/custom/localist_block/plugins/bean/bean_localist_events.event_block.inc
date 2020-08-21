<?php
/**
 * @file
 * Listing bean plugin.
 */

class EventBlockBean extends BeanPlugin {
  /**
   * Declares default block settings.
   */
  public function values() {
    $values = array(
      'events_shown'  => 3,
      'calendar_link'      => '',
      'keywords'      => '',
      'query_type'    => 'inclusive',
      'calendar_desc' =>'',
    );

    return array_merge(parent::values(), $values);
  }

  /**
   * Builds extra settings for the block edit form.
   */
  public function form($bean, $form, &$form_state) {
    $form = array();
    $form['events_shown'] = array(
      '#type' => 'textfield',
      '#title' => t('Number of events'),
      '#size' => 5,
      '#default_value' => $bean->events_shown,
      '#description' => t('Use 0 (zero) to show all events.'),
      '#required' => TRUE,
    );
    $form['calendar_desc'] = array(
      '#type' => 'textarea',
      '#title' => t('Calendar Description'),
      '#default_value' => $bean->calendar_desc,
      '#description' => t('This is a short description of the calendar. Leave blank if not required.'),
      '#required' => FALSE,
    );

    $form['calendar_link'] = array(
      '#type' => 'textfield',
      '#title' => t('Calendar Link'),
      '#default_value' => $bean->calendar_link,
      '#description' => t('Provide a link to an alternate page listing all events of this type.'),
      '#required' => FALSE,
    );

    $form['keywords'] = array(
      '#type' => 'textfield',
      '#title' => t('Keywords'),
      '#default_value' => $bean->keywords,
      '#description' => t('Try "cascal". Separate multiple keywords with commas.'),
      '#required' => TRUE,
    );

    $form['query_type'] = array(
      '#type' => 'radios',
      '#title' => t('Keyword filtering'),
      '#default_value' => $bean->query_type,
      '#options' => array('inclusive' => 'Any', 'exclusive' => 'All'),
      '#description' => t('Select events with all the chosen keywords or any of them?'),
    );

    $form['#submit'][] = 'localist_block_clear_cache';
    return $form;
  }

  /**
   * Displays the bean.
   * <p>'.$calendar_desc.'</p> need to have this somewhere.
   */
  public function view($bean, $content, $view_mode = NULL, $langcode = NULL) {
    $event_json = $this->get_event_json($bean);
    $calendar_keywords = $bean->keywords;
    if ($bean->calendar_link) {
    $calendar_link = $bean->calendar_link;
    }else{
    $calendar_link = "https://events.cornell.edu/search?search=".$calendar_keywords;
    }
    $calendar_desc = $bean->calendar_desc;
    $calendar_title = $bean->title;
    $view_mode = $bean->view_mode;
    $content['events'] = $this->generate_events_view($bean, $event_json, $calendar_link);
    $content['events']['#weight'] = '-1';
    if (module_exists('as_department_beans')) {
    $content['link'] ['#markup']= '<h2>'.$calendar_title.'</h2>';
    $content['link']['#weight'] = '-2';
    }
    return $content;
  }

  public static function get_cache_key($keywords) {
    return str_replace(',', '-', rawurlencode(strtolower($keywords)));
  }
  /**
   * Retrieves the json from localist or the cache
   */
  private function get_event_json($bean) {
    $keyword_params = $this->generate_keyword_params($bean);
    $cache_key = EventBlockBean::get_cache_key($bean->keywords);
    // Caching strategies based on http://www.lullabot.com/articles/beginners-guide-caching-data-drupal-7
    if ($cache = cache_get('bean_localist_events-' . $cache_key)) {
      $event_json = $cache->data;
    } else {
      $url = "https://cornell.localist.com/api/2/events?days=365&pp=30{$keyword_params}";
      $data = file_get_contents($url);
      $json = json_decode($data, true);
      $event_json = $json['events'];
      cache_set('bean_localist_events-' . $cache_key, $event_json, 'cache', time() + 60 * 60); //60 * 60 = 60 mins
    }
    return $event_json;
  }

  /**
   * Loops through the json items or returns empty message
   * @param  [json] $event_json The json that was returned from localist or the cache
   * @return [array] $content The render array with #markup
   */
  private function generate_events_view($bean, $event_json, $calendar_link) {
    $event_count = 1;
    $events = array();

    if (!empty($event_json)) {
      $events[] = array('#markup' => '<div class="eventList__list">');
      foreach($event_json as $event_data) {
        if ($event_count <= $bean->events_shown || $bean->events_shown == 0) {
          $markup = $this->generate_event_item_markup($bean,$event_data,$event_count);
          // Add the markup to the render array
          $events[] = array('#markup' => $markup);
          $event_count++;
        }

      }
    //$events[] = array('#markup' => $bean->keywords);
    $events[] = array('#markup' => '<a href="'.$calendar_link.'" class="btn">View all events</a></div>');

    } // There were no events
    else {
      //$events[] = array('#markup' => '<p>There are no upcoming events for this category.</p>');
      $events[] = array('#markup' => '<p class="as-card__link"><a href="https://events.cornell.edu/search?search='.$bean->keywords.'">Upcoming events </a></p>');
    }


    return $events;
  }

  /**
   * Generates the markup for each event item
   * @param  [json] $event_data The data from the event json object
   * @param  [current_count] The number of event items that have been processed
   * @return [string] $markup
   * @todo Refactor out hard-coded data-eq-pts
   */
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

    if ($bean->view_mode == 'newsletter_events') {

    $markup = "<table class='event__newsletter' style='background: white;padding:10px 0 10px 0; border:none; margin-bottom: 10px; border-collapse:collapse; width: 600px; border-radius:4px;'>\n";
    $markup .= "<tr>\n";
    $markup .= "<td style='text-align: center; width: 100px; padding: 15px 20px 0 0;' rowspan='2' valign='top' width='20%'><p> \n";
    $markup .=  "<span>" . $event_date ['day'] . "<br /><span style='font-size: 20px;'>" . $event_date ['month'] . " " . $event_date ['date'] . "</span></span><br />" . $event_date ['time'] . "</p><p><img src='". $event_photo . "' width='100' style='max-width: 100px; margin-top: 10px;'/>";
    $markup .= "</p></td>";
    $markup .= "<td style='padding: 15px 20px 0 0;'>{$event_title}</span></td>\n";
    $markup .= "</tr>\n";
    $markup .= "<tr>\n";
    $markup .= "<td style='font-size: 16px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px; line-height: 22px;' width='70%' valign='top'> <p>\n";
    $markup .="$event_description";
    $markup .="</p><p><a style='display: block; padding-top: 10px;' href='{$event_location_url}'><font color='#b31b1b'>{$event_location}</font></a></p></td></tr>";
    $markup .="<tr><td></td><td style='word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 8px 0;vertical-align: top;text-align: center;color: white;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: initial !important;font-size: 18px;box-sizing: border-box; -moz-box-sizing: border-box;-webkit-box-sizing: border-box;display: block;background: #9ad8ea;border: 1px solid #2284a1;-webkit-border-radius: 15px;-moz-border-radius: 15px;border-radius: 15px;border-collapse: collapse !important;float: right;margin: 0 15px 15px 0;' width='30%'><a href='{$event_localist_url}' style='color: #ffffff;text-decoration: none;font-family: Helvetica, Arial, sans-serif;font-size: 14px;display: block;height: 100%;width: 100%; text-decoration: none;'><font color='#ffffff'>More Information</font></a></td></tr>";
    $markup .= "</table>\n";

    }else{

    $markup = "<div class='eventListing'>\n<a href='{$event_localist_url}' itemprop='url' class='eventListing__link' itemscope itemtype='https://schema.org/Event'> ";
    $markup .= "<span class='eventListing__date' itemprop='startDate'
  content='". $event_date ['ymdhm'] ."'><span class='month'>" . $event_date ['month'] . "</span><span class='day'> " . $event_date ['date'] . "</span></span>";

    $markup .= "<span class='eventListing__details'><span itemprop='name' class='eventListing__title'>{$event_title}</span>\n";
    if (module_exists('as_department_beans')) {
    $markup .= "<span itemprop='description' class='eventListing__description'>{$event_description}</span>\n";
    }
    // $markup .= "<span class='eventListing__image'><img src='{$event_photo}' alt=''/></span><span class='eventListing__more'>See More</span></span>\n";

    $markup .= "</a>\n</div><!-- end article -->\n\n";
    }
    return $markup;
  }

  /**
   * Formats the date string from the json
   */
  private function format_event_date($start_date) {
    $event_start_datetime = strtotime($start_date);
    $month = strtoupper (format_date($event_start_datetime, 'custom', 'M'));
    $day = format_date($event_start_datetime, 'custom', 'D');
    $date = format_date($event_start_datetime, 'custom', 'd');
    $time = format_date($event_start_datetime, 'custom', 'g:i a');
    //$yearmonthday = format_date($event_start_datetime, 'custom', 'Y-m-jTH:i');
    $ymdhm = strftime('%Y-%m-%dT%H:%M:%SZ', $event_start_datetime);
    return array(
      'month' => $month,
      'day' => $day,
      'date' => $date,
      'ymdhm' => $ymdhm,
      'time' => $time
    );
  }

  /**
   * Strips tags from description and truncates it
   * to 200 characters (roughly 35 words)
   */
  private function format_event_description($event_description) {
    //truncate_utf8($string, $max_length, $wordsafe = FALSE, $add_ellipsis = FALSE, $min_wordsafe_length = 1)
    return truncate_utf8(strip_tags($event_description), 200, TRUE, TRUE);
  }

  /**
   * Looks for event type info, and adds it to the markup if found
   */
  private function format_event_type_info($filters) {
    $event_type = '';
    if (isset($filters['event_types']['0']['name'])) {
      $event_type = $filters['event_types']['0']['name'];
      if ($slash_pos = strpos($event_type, '/')) {
        $event_type = substr($event_type, 0, $slash_pos);
      }
    }
    return $event_type;
  }

  /**
   * Formats the localist link url to point to the cornell event site
   */
  private function format_localist_event_url($url) {
    return str_replace('//cornell.localist.com', '//events.cornell.edu', $url);
  }

  /**
   * Generates the keyword params that localist expects
   * Also formats "exclusive" matches
   */
  private function generate_keyword_params($bean){
    $keywords = rawurlencode(str_replace(', ',',',$bean->keywords));
    $keyword_array = explode("%2C", $keywords);
    $param_string = '';
    foreach($keyword_array as $keyword) {
      $param_string .= "&keyword[]={$keyword}";
    }
    if ($bean->query_type == 'exclusive') {
      $param_string .='&match=all';
    }
    return $param_string;
  }
}

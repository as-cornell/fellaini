<?php
/**
 * @file
 * Listing bean plugin.
 */

class InstagramBlockBean extends BeanPlugin {
  /**
   * Declares default block settings.
   */
  public function values() {
    $values = array(
      'posts_shown'  => '',
      'screenname'      => ''
    );

    return array_merge(parent::values(), $values);
  }

  /**
   * Builds extra settings for the block edit form.
   */
  public function form($bean, $form, &$form_state) {
    $form = array();
    $form['posts_shown'] = array(
      '#type' => 'textfield',
      '#title' => t('Number of posts'),
      '#size' => 5,
      '#default_value' => $bean->posts_shown,
      '#description' => t('The number of posts specified will display in a block'),
      '#required' => TRUE,
    );
    $form['screenname'] = array(
      '#type' => 'textfield',
      '#title' => t('Screen Name'),
      '#default_value' => $bean->screenname,
      '#description' => t('Try "cornellcas". Screen name of account to show.'),
      '#required' => TRUE,
    );

    $form['#submit'][] = 'as_instagram_block_clear_cache';
    return $form;
  }

  /**
   * Displays the bean.
   */
  public function view($bean, $content, $view_mode = NULL, $langcode = NULL) {
    $instagram_json = $this->get_instagram_json($bean);
    $posts_shown = $bean->posts_shown;
    $screenname = $bean->screenname;
    $view_mode = $bean->view_mode;
    $content['instagram'] = $this->generate_instagram_view($screenname, $instagram_json, $posts_shown);
    $content['instagram']['#weight'] = '-1';
    return $content;
  }
  /**
   * Gets a useable cache key.
   */
  public static function get_cache_key($screenname) {
    return str_replace(',', '-', rawurlencode(strtolower($screenname)));
  }
  /**
   * Retrieves the json from instagram or the cache
   */
  private function get_instagram_json($bean) {
    $screenname_params = $bean->screenname;
    $cache_key = EventBlockBean::get_cache_key($bean->screenname);
    // Caching strategies based on http://www.lullabot.com/articles/beginners-guide-caching-data-drupal-7
    if ($cache = cache_get('bean_instagram-' . $cache_key)) {
      $instagram_json = $cache->data;
    } else {
      $url = "https://www.instagram.com/{$screenname_params}/?__a=1";
      $data = file_get_contents($url);
      $json = json_decode($data, true);
      $instagram_json = $json['graphql']['user']['edge_owner_to_timeline_media']['edges'];
      cache_set('bean_instagram-' . $cache_key, $instagram_json, 'cache', time() + 60 * 60); //60 * 60 = 60 mins
    }
    return $instagram_json;
  }



  /**
   * Generates the markup for each post item
   * @param  [json] $post_data The data from the event json object
   * @return [string] $markup
   */
  private function generate_post_markup($post_data) {
    $markup = "";
    //$user_full_name = $post_data['user']['full_name'];
    $display_url = $post_data['node']['thumbnail_src'];
    $text = $post_data['node']['edge_media_to_caption']['edges'][0]['node']['text'];
    $alt_text = $post_data['node']['accessibility_caption'];
    $insta_link = $post_data['node']['shortcode'];
    $insta_link = "https://www.instagram.com/p/" . $insta_link . "/";
        if (!empty($display_url)){
        $markup = $markup . "<span class='insta__item'><a href='" . $insta_link . "'><img class='img' src='" . $display_url . "' alt='" . $alt_text . "'></a></span>";
            }
        if ($text){
        $markup = $markup . "<div  class='photoText__text'><p>" . $text . "<p/></div>";
            }
    return $markup;
  }

  /**
   * Loops through the json items or returns empty message
   * @param  [json] $instagram_json The json that was returned from instagramt or the cache
   * @return [array] $content The render array with #markup
   */
  private function generate_instagram_view($screenname, $instagram_json, $posts_shown) {
    //subtract 1 to show actual number of posts
    $posts_shown = $posts_shown - 1;
    $post_count = 0;
    if (!empty($instagram_json)) {
      $content[] = array('#markup' => '<a href="https://instagram.com/'.$screenname.'/"><div class="view view-instagrams"><div class="as-social-bar__item as-social-bar__item--instagram"><span class="as-icon as-icon--instagram"></span>
        <div class="as-social-bar__title">Instagram</div><div>');
      foreach($instagram_json as $post_data) {
        if ($post_count <= $posts_shown) {
          //print_r ($this->generate_post_markup($post_data));
            $content[] = array('#markup' =>  $this->generate_post_markup($post_data));
          $post_count++;
        }
      }

    } // There were no posts
    else {
      $content[] = array('#markup' => '<p class="as-card__link"><a href="https://www.instagram.com/'.$screenname.'/">All posts </a></p>');
    }
    $content[] = array('#markup' => '</div></div></a>');

    return $content;
  }
}

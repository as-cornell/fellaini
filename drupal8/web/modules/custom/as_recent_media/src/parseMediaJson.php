<?php

namespace Drupal\as_recent_media;

/**
 * extend Drupal's Twig_Extension class
 */
class parseMediaJson extends \Twig_Extension
{

  /**
   * {@inheritdoc}
   * Let Drupal know the name of custom extension
   */
  public function getName()
  {
    return 'as_recent_media.parse.json';
  }


  /**
   * {@inheritdoc}
   * Return custom twig function to Drupal
   */
  public function getFunctions()
  {
    return [
      new \Twig_SimpleFunction('parse_media_json', [$this, 'parse_media_json']),
    ];
  }

  /**
   * Parses media JSON data into array for theming
   *
   * @param string $netid
   *   person netid passed from field in twig template
   *
   * @return array $person_record
   *   data in array for theming
   */
  public function parse_media_json($items_shown)
  {

    $recent_media = [];
    $departments = '';
    //kint($items_shown);
    if (!empty($items_shown)) {
      $items_shown = intval($items_shown) -1;
    }


    $items_count = 0;
    $recent_media_json = as_recent_media_get_json();
    //dump ($recent_media_json);
    if (!empty($recent_media_json)) {
      foreach($recent_media_json as $media_data) {
        if ($items_count <= $items_shown) {
            $recent_media[$items_count]['title'] = $media_data['node']['title'];
            $recent_media[$items_count]['source'] = $media_data['node']['media_source'];
            $recent_media[$items_count]['link'] = $media_data['node']['link'];
            $recent_media[$items_count]['date'] = $media_data['node']['field_news_date'];
            $recent_media[$items_count]['people'] = $media_data['node']['related_people'];
            $recent_media[$items_count]['departments'] = $media_data['node']['related_department'];
          $items_count++;
        }
      }

    }
    return $recent_media;
  }
}

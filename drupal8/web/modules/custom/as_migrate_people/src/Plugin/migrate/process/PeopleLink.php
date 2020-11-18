<?php

namespace Drupal\as_migrate_people\Plugin\migrate\process;

use Drupal\migrate\MigrateException;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\Row;

/**
 * Split string of links into array and split each 2 part link into array components.
 *
 * @MigrateProcessPlugin(
 *   id = "people_link",
 * )
 */
class PeopleLink extends ProcessPluginBase {

  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    try {

    // send pptstring
    if (!empty($value)) {
      $linkstring = $value;
      // break string into title and uri
      $linkarray = explode(',', $linkstring);
      $personlinks = array();
      foreach ($linkarray as $key => $link) {
        // get everything before http
        $title = explode('http', $link, 2);
        $personlinks[$key]['title'] = $title[0];
        // get everything after http
        $personlinks[$key]['uri'] = strstr($link, 'http');
        }
      }
    }
    catch (\Exception $e) {
      throw new MigrateException('Invalid link string.');
    }
    return $personlinks;
  }
}

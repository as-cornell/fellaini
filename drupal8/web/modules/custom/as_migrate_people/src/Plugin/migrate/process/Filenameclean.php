<?php

namespace Drupal\as_migrate_people\Plugin\migrate\process;

use Drupal\migrate\MigrateException;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\Row;

/**
 * Format baseline start date.
 *
 * @MigrateProcessPlugin(
 *   id = "filenameclean",
 * )
 */
class FilenameClean extends ProcessPluginBase {

  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    try {
      $title = ltrim(strtolower(end(explode('|', $value))));
      $sep = '-';
      // get just extension
      $arr = explode("|", $value, 2);
      $extension = end(explode('.', $arr[0]));
      $title = preg_replace('#[^A-Za-z0-9-]#', ' ', $title);
      $filename = preg_replace('/[[:space:]]+/', $sep, $title);
      $value = 'public://'.$filename.'.'.$extension;
    }
    catch (\Exception $e) {
      throw new MigrateException('Invalid filename.');
    }
    return $value;
  }
}

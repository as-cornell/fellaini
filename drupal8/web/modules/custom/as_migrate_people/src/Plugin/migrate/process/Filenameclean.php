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
      $sep='-';
      $value = strtolower($value);
      $value = preg_replace('#[^A-Za-z0-9-./:/]#', ' ', $value);
      $value = preg_replace('/[[:space:]]+/', $sep, $value);
    }
    catch (\Exception $e) {
      throw new MigrateException('Invalid filename.');
    }
    return trim($value, $sep);
  }
}

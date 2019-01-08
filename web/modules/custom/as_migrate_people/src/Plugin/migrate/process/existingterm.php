<?php

namespace Drupal\as_migrate_people_descriptions\Plugin\migrate\process;

use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\MigrateSkipProcessException;
use Drupal\migrate\Row;
use Drupal\taxonomy\Entity\Term;

/**
 * Check if term exists and create new if doesn't.
 *
 * @MigrateProcessPlugin(
 *   id = "existingterm"
 * )
 */
class ExistingTerm extends ProcessPluginBase {

  /**
   * {@inheritdoc}
   */
  public function transform($term_name, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    $vocabulary = $this->configuration['vocabulary'];
    if (empty($term_name)) {
      throw new MigrateSkipProcessException();
    }
    if ($tid = $this->getTidByName($term_name, $vocabulary)) {
      $term = Term::load($tid);
    }
    else {
      $term = Term::create([
        'name' => $term_name,
        'vid'  => $vocabulary,
      ])->save();
      if ($tid = $this->getTidByName($term_name, $vocabulary)) {
        $term = Term::load($tid);
      }
    }
    return [
      'target_id' => is_object($term) ? $term->id() : 0,
    ];
  }

  /**
   * Load term by name.
   */
  protected function getTidByName($name = NULL, $vocabulary = NULL) {
    $properties = [];
    if (!empty($name)) {
      $properties['name'] = $name;
    }
    if (!empty($vocabulary)) {
      $properties['vid'] = $vocabulary;
    }
    $terms = \Drupal::entityManager()->getStorage('taxonomy_term')->loadByProperties($properties);
    $term = reset($terms);
    return !empty($term) ? $term->id() : 0;
  }

}

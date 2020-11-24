<?php
namespace Drupal\as_people_json\Plugin\views\query;

use Drupal\views\Plugin\views\query\QueryPluginBase;

/**
 * People JSON views query plugin which wraps calls to people.as.cornell.edu jsonapi in order to
 * expose the results to views.
 *
 * @ViewsQuery(
 *   id = "people_json",
 *   title = @Translation("People Json"),
 *   help = @Translation("Query against people.as.cornell.edu jsonapi.")
 * )
 */
class PeopleJson extends QueryPluginBase {
  public function ensureTable($table, $relationship = NULL) {
  return '';
}
public function addField($table, $field, $alias = '', $params = array()) {
  return $field;
}
}

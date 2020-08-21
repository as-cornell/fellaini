<?php
/**
 * @file
 * as_article.features.uuid_term.inc
 */

/**
 * Implements hook_uuid_features_default_terms().
 */
function as_article_uuid_features_default_terms() {
  $terms = array();

  $terms[] = array(
    'name' => 'Quote',
    'description' => '',
    'format' => 'full_html',
    'weight' => 0,
    'uuid' => '729c0728-84c5-4d3e-876b-7c4433f26e5c',
    'vocabulary_machine_name' => 'factoid_type',
    'path' => array(
      'pathauto' => 1,
    ),
  );
  $terms[] = array(
    'name' => 'FAQ',
    'description' => '',
    'format' => 'full_html',
    'weight' => 0,
    'uuid' => '8e355e92-00a9-4dde-95cd-7f1a8f43081d',
    'vocabulary_machine_name' => 'factoid_type',
    'path' => array(
      'pathauto' => 1,
    ),
  );
  $terms[] = array(
    'name' => 'Stat',
    'description' => '',
    'format' => 'full_html',
    'weight' => 0,
    'uuid' => 'ed98c9c4-180c-4aeb-8be1-58000981a084',
    'vocabulary_machine_name' => 'factoid_type',
    'path' => array(
      'pathauto' => 1,
    ),
  );
  return $terms;
}

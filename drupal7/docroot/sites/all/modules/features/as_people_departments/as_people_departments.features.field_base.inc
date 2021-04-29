<?php

/**
 * @file
 * as_people_departments.features.field_base.inc
 */

/**
 * Implements hook_field_default_field_bases().
 */
function as_people_departments_field_default_field_bases() {
  $field_bases = array();

  // Exported field_base: 'field_academic_role'.
  $field_bases['field_academic_role'] = array(
    'active' => 1,
    'cardinality' => -1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_academic_role',
    'field_permissions' => array(
      'type' => 0,
    ),
    'indexes' => array(
      'tid' => array(
        0 => 'tid',
      ),
    ),
    'locked' => 0,
    'module' => 'taxonomy',
    'settings' => array(
      'allowed_values' => array(
        0 => array(
          'vocabulary' => 'sliceanddice',
          'parent' => 0,
        ),
      ),
      'options_list_callback' => 'title_taxonomy_allowed_values',
    ),
    'translatable' => 0,
    'type' => 'taxonomy_term_reference',
  );

  return $field_bases;
}

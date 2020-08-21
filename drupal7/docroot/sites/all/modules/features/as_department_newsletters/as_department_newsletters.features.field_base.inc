<?php
/**
 * @file
 * as_department_newsletters.features.field_base.inc
 */

/**
 * Implements hook_field_default_field_bases().
 */
function as_department_newsletters_field_default_field_bases() {
  $field_bases = array();

  // Exported field_base: 'field_newsletter_events'.
  $field_bases['field_newsletter_events'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_newsletter_events',
    'indexes' => array(
      'target_id' => array(
        0 => 'target_id',
      ),
    ),
    'locked' => 0,
    'module' => 'entityreference',
    'settings' => array(
      'handler' => 'base',
      'handler_settings' => array(
        'behaviors' => array(
          'views-select-list' => array(
            'status' => 0,
          ),
        ),
        'sort' => array(
          'type' => 'none',
        ),
        'target_bundles' => array(
          'event_block' => 'event_block',
        ),
      ),
      'target_type' => 'bean',
    ),
    'translatable' => 0,
    'type' => 'entityreference',
  );

  return $field_bases;
}

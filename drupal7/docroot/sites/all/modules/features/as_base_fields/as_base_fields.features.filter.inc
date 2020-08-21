<?php

/**
 * @file
 * as_base_fields.features.filter.inc
 */

/**
 * Implements hook_filter_default_formats().
 */
function as_base_fields_filter_default_formats() {
  $formats = array();

  // Exported format: Hard Coded.
  $formats['hard_coded'] = array(
    'format' => 'hard_coded',
    'name' => 'Hard Coded',
    'cache' => 1,
    'status' => 1,
    'weight' => -9,
    'filters' => array(),
  );

  return $formats;
}

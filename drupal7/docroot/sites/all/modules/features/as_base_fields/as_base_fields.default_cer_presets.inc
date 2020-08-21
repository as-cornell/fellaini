<?php

/**
 * @file
 * as_base_fields.default_cer_presets.inc
 */

/**
 * Implements hook_default_cer().
 */
function as_base_fields_default_cer() {
  $export = array();

  $cnr_obj = new stdClass();
  $cnr_obj->disabled = TRUE; /* Edit this to true to make a default cnr_obj disabled initially */
  $cnr_obj->api_version = 1;
  $cnr_obj->entity_types_content_fields = 'node*article*field_related_people*node*person*field_related_articles';
  $cnr_obj->enabled = 1;
  $export['node*article*field_related_people*node*person*field_related_articles'] = $cnr_obj;

  $cnr_obj = new stdClass();
  $cnr_obj->disabled = TRUE; /* Edit this to true to make a default cnr_obj disabled initially */
  $cnr_obj->api_version = 1;
  $cnr_obj->entity_types_content_fields = 'node*person*field_related_articles*node*article*field_related_people';
  $cnr_obj->enabled = 1;
  $export['node*person*field_related_articles*node*article*field_related_people'] = $cnr_obj;

  return $export;
}

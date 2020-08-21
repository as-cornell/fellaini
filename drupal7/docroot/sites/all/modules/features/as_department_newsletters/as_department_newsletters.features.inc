<?php
/**
 * @file
 * as_department_newsletters.features.inc
 */

/**
 * Implements hook_image_default_styles().
 */
function as_department_newsletters_image_default_styles() {
  $styles = array();

  // Exported image style: scale-crop-600-400.
  $styles['scale-crop-600-400'] = array(
    'label' => 'Scale and Crop 600x400',
    'effects' => array(
      6 => array(
        'name' => 'image_scale',
        'data' => array(
          'width' => 600,
          'height' => '',
          'upscale' => 0,
        ),
        'weight' => 1,
      ),
      11 => array(
        'name' => 'image_crop',
        'data' => array(
          'width' => 600,
          'height' => 400,
          'anchor' => 'center-top',
        ),
        'weight' => 2,
      ),
    ),
  );

  return $styles;
}

/**
 * Implements hook_node_info().
 */
function as_department_newsletters_node_info() {
  $items = array(
    'newsletter' => array(
      'name' => t('Newsletter'),
      'base' => 'node_content',
      'description' => t('Email newsletter with basic style and formatting friendly to various email clients.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}

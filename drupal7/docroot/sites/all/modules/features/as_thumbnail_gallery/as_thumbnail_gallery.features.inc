<?php
/**
 * @file
 * as_thumbnail_gallery.features.inc
 */

/**
 * Implements hook_image_default_styles().
 */
function as_thumbnail_gallery_image_default_styles() {
  $styles = array();

  // Exported image style: square_scale_and_crop.
  $styles['square_scale_and_crop'] = array(
    'label' => 'Square scale and crop',
    'effects' => array(
      6 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 300,
          'height' => 300,
        ),
        'weight' => 1,
      ),
    ),
  );

  return $styles;
}

/**
 * Implements hook_node_info().
 */
function as_thumbnail_gallery_node_info() {
  $items = array(
    'thumbnail_gallery' => array(
      'name' => t('Thumbnail Gallery'),
      'base' => 'node_content',
      'description' => t('Thumbnail to pop-up gallery'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}

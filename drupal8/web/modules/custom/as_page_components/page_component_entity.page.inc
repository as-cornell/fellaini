<?php

/**
 * @file
 * Contains page_component_entity.page.inc.
 *
 * Page callback for Item entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Item templates.
 *
 * Default template: page_component_entity.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_page_component_entity(array &$variables) {
  // Fetch PageComponentEntity Entity Object.
  $page_component_entity = $variables['elements']['#page_component_entity'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}

<?php

namespace Drupal\as_page_components\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Item type entity.
 *
 * @ConfigEntityType(
 *   id = "page_component_entity_type",
 *   label = @Translation("Item type"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\as_page_components\PageComponentEntityTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\as_page_components\Form\PageComponentEntityTypeForm",
 *       "edit" = "Drupal\as_page_components\Form\PageComponentEntityTypeForm",
 *       "delete" = "Drupal\as_page_components\Form\PageComponentEntityTypeDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\as_page_components\PageComponentEntityTypeHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "page_component_entity_type",
 *   admin_permission = "administer site configuration",
 *   bundle_of = "page_component_entity",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/page_component_entity_type/{page_component_entity_type}",
 *     "add-form" = "/admin/structure/page_component_entity_type/add",
 *     "edit-form" = "/admin/structure/page_component_entity_type/{page_component_entity_type}/edit",
 *     "delete-form" = "/admin/structure/page_component_entity_type/{page_component_entity_type}/delete",
 *     "collection" = "/admin/structure/page_component_entity_type"
 *   }
 * )
 */
class PageComponentEntityType extends ConfigEntityBundleBase implements PageComponentEntityTypeInterface {

  /**
   * The Item type ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Item type label.
   *
   * @var string
   */
  protected $label;

}

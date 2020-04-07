<?php

namespace Drupal\as_menu_plug\Plugin\Block;

use Drupal\Core\Block\BlockBase;
//use Drupal\Core\Form\FormStateInterface;
//use Drupal\node\Entity\Node;

/**
 * Provides a 'MenuPlugBlock' block.
 *
 * @Block(
 *  id = "menu_plug_block",
 *  admin_label = @Translation("Menu Plug block"),
 * )
 */
class MenuPlugBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['menu_plug_block']['#markup'] = "";
    $menu_link_id = "";
    $menu_children = "";
    $config = $this->getConfiguration();
    if (!empty($config['menu_link_id'])) {
      $menu_link_id = $config['menu_link_id'];
    }
    if (!empty($config['menu_children'])) {
      $menu_children = $config['menu_children'];
    }
    // strip $menu_link_id
    //$menu_link_id = as_menu_plug_strip_id($menu_link_id);
    // get $nid from $menu_link_id uri
    $nid = as_menu_plug_menulinkid_nid($menu_link_id);
    // strip $nid
    $nid = as_menu_plug_strip_id($nid);
    // get node alias
    $alias = \Drupal::service('path.alias_manager')->getAliasByPath('/node/'.$nid);
    // load node
    if (!empty($nid)) {
    $node =\Drupal::entityTypeManager()->getStorage('node')->load($nid);
    }
    //get field values
    if (!empty($node->field_page_components_entity)) {
    $fpce = $node->field_page_components_entity;
      }
    if (!empty($node->field_landing_page_component_ent)) {
    $flpce = $node->field_landing_page_component_ent;
      }

    // build markup
    $build['menu_plug_block']['#markup'] = $build['menu_plug_block']['#markup'] . '<ul>';

    // get page component entities
    if (!empty($fpce)) {
      $index = 0;
      foreach($fpce as $pce) {
            // this uses the component entity label as the link text
            //$link_title = $node->field_page_components_entity[$index]->entity->label();
            // this uses only field_page_section_title from a page section entity
            if (!empty($node->field_page_components_entity[$index]->entity->field_page_section_title[0])) {
            $link_title = $node->field_page_components_entity[$index]->entity->field_page_section_title[0]->value;
            $build['menu_plug_block']['#markup'] = $build['menu_plug_block']['#markup'] . as_menu_plug_generate_link_markup($link_title,$alias);
               }
        $index++;
        }
      }
    // get landing page component entities
    if (!empty($flpce)) {
      $index = 0;
    foreach($flpce as $lpce) {
          // this uses the component entity label as the link text
          //$link_title = $node->field_landing_page_component_ent[$index]->entity->label();
          // this uses only field_page_section_title from a page section entity
            if (!empty($node->field_landing_page_component_ent[$index]->entity->field_page_section_title[0])) {
          $link_title = $node->field_landing_page_component_ent[$index]->entity->field_page_section_title[0]->value;
          $build['menu_plug_block']['#markup'] = $build['menu_plug_block']['#markup'] . as_menu_plug_generate_link_markup($link_title,$alias);
          }
      $index++;
      }
    }
    if ($menu_children != TRUE){
    $build['menu_plug_block']['#markup'] = $build['menu_plug_block']['#markup'] .'</ul>';
   }
    return $build;
  }
}



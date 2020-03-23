<?php

namespace Drupal\as_menu_plug\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;



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
    $config = $this->getConfiguration();


    if (!empty($config['menu_link_id'])) {
      $menu_link_id = $config['menu_link_id'];
    }
    if (!empty($config['link_values'])) {
      //$link_values = $config['link_values'];
    }
    //strip $menu_link_id
    $menu_link_id = as_menu_plug_strip_id($menu_link_id);
    //go get the $nid from the uri for $menu_link_id
    $nid = as_menu_plug_menulinkid_nid($menu_link_id);
    //strip $nid
    $nid = as_menu_plug_strip_id($nid);
    //load node
    $node =\Drupal::entityTypeManager()->getStorage('node')->load($nid);


    $build['menu_plug_block']['#markup'] = '<ul>';

    if (!empty($link_values)) {
      foreach($link_values as $link_title) {
            $build['menu_plug_block']['#markup'] = $build['menu_plug_block']['#markup'] .as_menu_plug_generate_link_markup($link_title);
        }
      }
    if (!empty($node->field_page_components_entity)) {
      $index = 0;
      foreach($node->field_page_components_entity->getValue() as $pcc) {
            //print_r($pcc);
            $build['menu_plug_block']['#markup'] = $build['menu_plug_block']['#markup'] .  "<li>HI I'm a page component !!! ". $node->field_page_components_entity[$index]->entity->label() ."</li>";
        $index++;
        }
      }
      if (!empty($node->field_landing_page_component_ent)) {
        $index = 0;
      foreach($node->field_landing_page_component_ent->getValue() as $pcc) {
            //print_r($pcc);
            $build['menu_plug_block']['#markup'] = $build['menu_plug_block']['#markup'] .  "<li>HI I'm a landing page component !!! ". $node->field_landing_page_component_ent[$index]->entity->label() ."</li>";
        $index++;
        }
      }
    if (!empty($menu_link_id)) {
           $build['menu_plug_block']['#markup'] = $build['menu_plug_block']['#markup'] . "<li>menu link id " . $menu_link_id ."</li>";
            $build['menu_plug_block']['#markup'] = $build['menu_plug_block']['#markup'] . "<li>nid " . $nid ."</li>";
        $build['menu_plug_block']['#markup'] = $build['menu_plug_block']['#markup'] .'</ul>';
      }
    return $build;
  }

}

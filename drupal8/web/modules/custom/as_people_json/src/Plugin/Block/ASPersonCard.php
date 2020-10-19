<?php

namespace Drupal\as_people_json\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;

/**
 * Provides a Current Events Block.
 *
 * @Block(
 *   id = "person_card_block",
 *   admin_label = @Translation("Person Card Block"),
 *   category = @Translation("People"),
 * )
 */
class ASPersonCard extends BlockBase implements BlockPluginInterface {


  /**
   * {@inheritdoc}
   */


  public function build() {
    $config = $this->getConfiguration();

    if (!empty($config['netid'])) {
      $netid = $config['netid'];
    }
    else {
      $netid = 'hda1';
    }
    $build = [];
    $build['person_card_block']['#markup'] = '';
    $event_count = 0;
    $people_json = as_people_json_get_json($netid);


    if (!empty($people_json)) {
      foreach($people_json as $person_data) {
            $build['person_card_block']['#markup'] = $build['person_card_block']['#markup'] . as_people_json_generate_item_markup($person_data);
      }

    } // There were no events
    else {
      $build['person_card_block']['#markup'] = "<main>
                <p>There are no people records related to that netID.</p>
                </main>";
    }

    return $build;
  }
}

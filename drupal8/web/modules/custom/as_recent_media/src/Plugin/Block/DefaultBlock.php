<?php

namespace Drupal\as_recent_media\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'DefaultBlock' block.
 *
 * @Block(
 *  id = "recent_media_block",
 *  admin_label = @Translation("Recent Media"),
 * )
 */
class DefaultBlock extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['recent_media_block']['#markup'] = "<ul>";
    $config = $this->getConfiguration();
    //kint($config);
    if (!empty($config['items_shown'])) {
      //1 shows 2, 2 shows 3 etc. so subtract 1
      $items_shown = $config['items_shown'] - 1;
    }
    else {
      $items_shown = 2;
    }

    $items_count = 0;
    $recent_media_json = as_recent_media_get_json();
    //dump ($recent_media_json);
    if (!empty($recent_media_json)) {
      foreach($recent_media_json as $media_data) {
        if ($items_count <= $items_shown) {
            $build['recent_media_block']['#markup'] = $build['recent_media_block']['#markup'] . as_recent_media_generate_item_markup($media_data);
          $items_count++;
        }
      }
      $build['recent_media_block']['#markup'] = $build['recent_media_block']['#markup'] . "</ul>";
    } // There were no instagram posts
    else {
      $build['recent_media_block']['#markup'] = "<main>
                <p>There are no recent media items to list.</p>
                </main>";
    }

    return $build;
  }

}

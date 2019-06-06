<?php

namespace Drupal\as_instagram\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'DefaultBlock' block.
 *
 * @Block(
 *  id = "instagram_block",
 *  admin_label = @Translation("Instagram block"),
 * )
 */
class DefaultBlock extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['instagram_block']['#markup'] = "";
    $config = $this->getConfiguration();
    //kint($config);
    if (!empty($config['posts_shown'])) {
      //1 shows 2, 2 shows 3 etc. so subtract 1
      $posts_shown = $config['posts_shown'] - 1;
    }
    else {
      $posts_shown = 0;
    }

    if (!empty($config['keyword_params'])) {
      $keyword_params = $config['keyword_params'];
    }
    else {
      $keyword_params = "cornellcas";
    }

    $post_count = 0;
    $instagram_json = as_instagram_get_instagram_json($keyword_params);
    //dump ($instagram_json);
    if (!empty($instagram_json)) {
      foreach($instagram_json as $post_data) {
        if ($post_count <= $posts_shown) {
            $build['instagram_block']['#markup'] = $build['instagram_block']['#markup'] . as_instagram_generate_instagram_post_markup($post_data);
          $post_count++;
        }
      }
    } // There were no instagram posts
    else {
      $build['instagram_block']['#markup'] = "<main>
                <p>There are no Instagram posts to list.</p>
                </main>";
    }

    return $build;
  }

}

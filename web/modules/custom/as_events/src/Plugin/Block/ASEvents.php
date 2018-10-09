<?php

namespace Drupal\as_events\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a Current Weather Block.
 *
 * @Block(
 *   id = "events_block",
 *   admin_label = @Translation("Events Block"),
 *   category = @Translation("Upcoming Events"),
 * )
 */
class ASEvents extends BlockBase {

  /**
   * {@inheritdoc}
   */


  public function build() {
    $keyword_params = "cascal";
    $main = "";
    $event_count = 0;
    $events_shown = 1;
    $event_json = as_events_get_events_json($events_shown,$keyword_params);


    if (!empty($event_json)) {
      foreach($event_json as $event_data) {
        if ($event_count <= $events_shown) {
            $main = $main . as_events_generate_event_item_markup($event_data);
          $event_count++;
        }

      }

    } // There were no events
    else {
      $main = "<main>
                <h1>Events Calendar</h1>
                <p>There are no upcoming events</p>
                </main>";
    }




    return array(
      '#markup' => $this->t($main),
    );
  }
}

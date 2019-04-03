<?php

namespace Drupal\as_events\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a Current Events Block.
 *
 * @Block(
 *   id = "events_block",
 *   admin_label = @Translation("Events Block"),
 *   category = @Translation("Upcoming Events"),
 * )
 */
class ASEvents extends BlockBase implements BlockPluginInterface {


  /**
   * {@inheritdoc}
   */

  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);

    $config = $this->getConfiguration();

    $form['events_shown'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Events Shown'),
      '#description' => $this->t('How many events do you want to display in your block?'),
      '#default_value' => isset($config['events_shown']) ? $config['events_shown'] : '',
    ];

    $form['keyword_params'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Keyword'),
      '#description' => $this->t('What keyword or tag from localist do you want to display events for?'),
      '#default_value' => isset($config['keyword_params']) ? $config['keyword_params'] : '',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    parent::blockSubmit($form, $form_state);
    $values = $form_state->getValues();
    $this->configuration['events_shown'] = $values['events_shown'];
    $this->configuration['keyword_params'] = $values['keyword_params'];
  }



  /**
   * {@inheritdoc}
   */


  public function build() {
    $config = $this->getConfiguration();
    //kint($config);
    if (!empty($config['events_shown'])) {
      $events_shown = $config['events_shown']['#markup'];
    }
    else {
      $events_shown = 1;
    }

    if (!empty($config['keyword_params'])) {
      $keyword_params = $config['keyword_params']['#context']['value'];
    }
    else {
      $keyword_params = "casfeatured";
    }
    //$events_shown = 4;
    //$keyword_params = "casfeatured";
    $main = "";
    $event_count = 0;
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

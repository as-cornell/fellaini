<?php

namespace Drupal\as_people_json\Controller;

use Drupal\Core\Controller\ControllerBase;

class PeopleController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content($pathtoken) {

    return [
      '#theme' => 'person',
      '#pathtoken' => $this->t($pathtoken),
    ];
  }

}

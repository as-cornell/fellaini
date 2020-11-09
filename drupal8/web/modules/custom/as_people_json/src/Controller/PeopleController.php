<?php

namespace Drupal\as_people_json\Controller;

use Drupal\Core\Controller\ControllerBase;

class PeopleController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content($netid) {


    return [
      '#theme' => 'person',
      '#netid' => $this->t($netid),
    ];
  }

}

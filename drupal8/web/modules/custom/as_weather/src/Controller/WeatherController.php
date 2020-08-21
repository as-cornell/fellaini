<?php

namespace Drupal\as_weather\Controller;

use Drupal\Core\Controller\ControllerBase;

class WeatherController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content() {

    $main = "Hello Weather Page";
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('<div class="slides">
<article class="slide-aside">'.$main.'</article></div>'),
    );
  }

}

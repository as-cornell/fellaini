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
    $main = "";
    $people_json = as_people_json_get_json($netid);

    if (!empty($people_json)) {
      foreach($people_json as $person_data) {
          $main = $main . as_people_json_generate_item_markup($person_data);
      }

    } // There were no people
    else {
      $main = "<main>
                <p>There are no people records related to ".$netid.".</p>
                </main>";
    }
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('<div class="person">
<article class="person-aside">'.$main.'</article></div>'),
    );
  }

}

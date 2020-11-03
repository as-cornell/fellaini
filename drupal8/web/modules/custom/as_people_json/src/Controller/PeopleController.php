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

    $markup = "";
    $departments = "";
    $summary = "";
    $researchfocus = "";
    $people_json = as_people_json_get_person_json($netid);
    if (!empty($people_json['data'])) {
      // get image path from json
          $imagepath = $people_json['included'][1]['attributes']['uri']['url'];
      foreach($people_json['data'] as $person_data) {
          $alt = 'Image of ' . $person_data['attributes']['title'];
          $path = $person_data['attributes']['path']['alias'];
          $title = $person_data['attributes']['title'];
          $jobtitle = $person_data['attributes']['field_person_title'];
          $keywords = strip_tags($person_data['attributes']['field_keywords']['value']);
          $education = $person_data['attributes']['field_person_education']['value'];
          $publications = $person_data['attributes']['field_person_publications']['value'];
          // get department label from json
          foreach($person_data['relationships']['field_departments_programs']['data'] as $dept_data) {
            $deptuuid = $dept_data['id'];
            $dept_json = as_people_json_get_dept_json($deptuuid);
            $departments = $departments . $dept_json['data']['attributes']['name'] . ', ';
          }
          // get summary from json
          foreach($person_data['relationships']['field_summary']['data'] as $summary_data) {
            $summaryuuid = $summary_data['id'];
            $summary_json = as_people_json_get_people_summary_json($summaryuuid);
            $summary = $summary . $summary_json['data']['attributes']['field_description']['processed'];
            $researchfocus = $researchfocus . $summary_json['data']['attributes']['field_person_research_focus']['processed'];
          }
      }
      // Create the markup
      $markup = '<div> <img src="https://people.asd8.as.cornell.edu' . $imagepath .'" alt="'.$alt.'"></div>';
      $markup = $markup . '<h3>' . $title . '</a></div>';
      if ($jobtitle) {
        $markup = $markup . '<div>' . $jobtitle .'</div>';
      }
      if (!empty($departments)) {
        $markup = $markup . '<div>' . rtrim($departments, ', ') .'</div>';
      }
      if (!empty($keywords)) {
        $markup = $markup . '<div>' . $keywords .'</div>';
      }
      if (!empty($education)) {
        $markup = $markup . '<div><h3>Education</h3>' . $education .'</div>';
      }
      if (!empty($publications)) {
        $markup = $markup . '<div><h3>Publications</h3>' . $publications .'</div>';
      }
      if (!empty($summary)) {
        $markup = $markup . '<div><h3>Overview</h3>' . $summary .'</div>';
      }
      if (!empty($researchfocus)) {
        $markup = $markup . '<div><h3>Research Focus</h3>' . $researchfocus .'</div>';
      }
    } // There were no people
    else {
      $markup = "<main>
                <p>There are no people records related to ".$netid.".</p>
                </main>";
    }
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('<div class="person">
<article class="person-aside">'. $markup .'</article></div>'),
    );
  }

}

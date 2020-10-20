<?php

namespace Drupal\as_people_json;

/**
 * extend Drupal's Twig_Extension class
 */
class parsePeopleJson extends \Twig_Extension {

  /**
   * {@inheritdoc}
   * Let Drupal know the name of custom extension
   */
  public function getName() {
    return 'as_people_joson.parse.json';
  }


  /**
   * {@inheritdoc}
   * Return custom twig function to Drupal
   */
  public function getFunctions() {
    return [
      new \Twig_SimpleFunction('parse_people_json', [$this, 'parse_people_json']),
    ];
  }

  /**
   * Parses person JSON data into array for theming
   *
   * @param string $netid
   *   person netid passed from field in twig template
   *
   * @return array $person_record
   *   data in array for theming
   */
  public function parse_people_json($netid) {

    $person_record = [];
    $people_json = as_people_json_get_person_json($netid);
    if (!empty($people_json['data'])) {
      // get image path from json
      foreach($people_json['included'] as $image) {
          $person_record['imagepath'] = 'https://people.asd8.as.cornell.edu/' . $image['attributes']['uri']['url'];
        }
      foreach($people_json['data'] as $person_data) {
          $person_record['alt'] = $person_data['relationships']['field_image']['data']['meta']['alt'];
          $person_record['path'] = $person_data['attributes']['path']['alias'];
          $person_record['title'] = $person_data['attributes']['title'];
          $person_record['jobtitle'] = $person_data['attributes']['field_person_title'];
          // get department label from json
          foreach($person_data['relationships']['field_departments_programs']['data'] as $dept_data) {
            $deptuuid = $dept_data['id'];
            $dept_json = as_people_json_get_dept_json($deptuuid);
            $departments = $departments . $dept_json['data']['attributes']['name'] . ', ';
            }
          $person_record['departments'] = rtrim($departments, ', ');
        }
      }
    return $person_record;
  }


}

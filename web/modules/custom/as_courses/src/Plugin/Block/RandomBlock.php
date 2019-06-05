<?php

namespace Drupal\as_courses\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'RandomBlock' block.
 *
 * @Block(
 *  id = "random_block",
 *  admin_label = @Translation("Random block"),
 * )
 */
class RandomBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

$config = $this->getConfiguration();
    //kint($config);
    if (!empty($config['semester'])) {
      $semester = $config['semester'];
    }
    else {
      $semester = "FA19";
    }
    if (!empty($config['semestername'])) {
      $semestername = $config['semestername'];
    }
    else {
      $semestername = "Fall 2019";
    }
    //if (!empty($config['courses_shown'])) {
      //$courses_shown = $config['courses_shown'];
    //}
    //else {
      //1 shows 2, 2 shows 3 etc.
      //$courses_shown = 1;
    //}

    if (!empty($config['keyword_params'])) {
      $keyword_params = $config['keyword_params'];
    }
    else {
      $keyword_params = "MATH";
    }
    if (!empty($config['major_name'])) {
      $major_name = $config['major_name'];
    }
    else {
      $major_name = "Major Name";
    }
    $build = [];
    $build['random_block']['#markup'] = "";
    //$course_count = 0;
    $course_json = as_courses_get_courses_json($semester,$keyword_params);
    // https://stackoverflow.com/questions/31566377/randomly-select-item-from-json-in-php
    if (!empty($course_json)) {
      $course_data = ($course_json[rand(0, count($course_json) - 1)]);
      //dump ($course_data);
      $build['random_block']['#markup'] = $build['random_block']['#markup'] . as_courses_generate_course_item_markup($course_data,$semester);

      $build['random_block']['#markup'] = $build['random_block']['#markup'] . "<div><a href='https://classes.cornell.edu/browse/roster/" . $semester . "/subject/" . $keyword_params . "'>Full Listing of " . $major_name . " courses for " . $semestername . " Semester</a></div>";
    } // There were no courses
    else {
      $build['random_block']['#markup'] = "<main>
                <h1>Courses</h1>
                <p>There are no courses to list.</p>
                </main>";
    }
    //$build['random_block']['#markup'] = 'Implement RandomBlock.';
    return $build;
  }

}

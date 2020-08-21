<?php
/**
 * @file
 * as_base_fields.features.uuid_term.inc
 */

/**
 * Implements hook_uuid_features_default_terms().
 */
function as_base_fields_uuid_features_default_terms() {
  $terms = array();

  $terms[] = array(
    'name' => 'Social Sciences',
    'description' => '',
    'format' => 'full_html',
    'weight' => 3,
    'uuid' => '1314f75c-ee9c-4f1d-8aa7-563ac84cb6c5',
    'vocabulary_machine_name' => 'topic',
    'parent' => array(
      0 => '3b0f629c-2885-4c3f-be2c-aaaafc15068a',
    ),
  );
  $terms[] = array(
    'name' => 'Research',
    'description' => '',
    'format' => 'full_html',
    'weight' => 5,
    'uuid' => '2a6f099b-77a4-4ba2-8943-c5de27a905ce',
    'vocabulary_machine_name' => 'topic',
    'parent' => array(
      0 => '731f43f6-c9c8-429c-98e6-e9fe9fdcb85b',
    ),
  );
  $terms[] = array(
    'name' => 'Admissions',
    'description' => '',
    'format' => 'full_html',
    'weight' => 1,
    'uuid' => '2b180518-8e3a-4487-bc55-3954cc8cf8a7',
    'vocabulary_machine_name' => 'topic',
    'parent' => array(
      0 => '731f43f6-c9c8-429c-98e6-e9fe9fdcb85b',
    ),
  );
  $terms[] = array(
    'name' => 'Foreign Language',
    'description' => '',
    'format' => 'full_html',
    'weight' => 1,
    'uuid' => '2faa474e-239e-429f-b8de-e592074645a6',
    'vocabulary_machine_name' => 'topic',
    'parent' => array(
      0 => '3b0f629c-2885-4c3f-be2c-aaaafc15068a',
    ),
  );
  $terms[] = array(
    'name' => 'Disciplines',
    'description' => '',
    'format' => 'full_html',
    'weight' => 2,
    'uuid' => '3b0f629c-2885-4c3f-be2c-aaaafc15068a',
    'vocabulary_machine_name' => 'topic',
  );
  $terms[] = array(
    'name' => 'Sciences & Mathematics',
    'description' => NULL,
    'format' => 'full_html',
    'weight' => 0,
    'uuid' => '3f808f00-3074-447e-b2ff-314daafd24f0',
    'vocabulary_machine_name' => 'topic',
    'parent' => array(
      0 => '3b0f629c-2885-4c3f-be2c-aaaafc15068a',
    ),
  );
  $terms[] = array(
    'name' => 'Majors and Minors',
    'description' => '',
    'format' => 'full_html',
    'weight' => 4,
    'uuid' => '55b1eefc-5b4d-4dd0-82fa-837195fe708c',
    'vocabulary_machine_name' => 'topic',
    'parent' => array(
      0 => '731f43f6-c9c8-429c-98e6-e9fe9fdcb85b',
    ),
  );
  $terms[] = array(
    'name' => 'Interdisciplinary',
    'description' => '',
    'format' => 'full_html',
    'weight' => 4,
    'uuid' => '64f5e079-e371-4165-abd1-af1ad936bda8',
    'vocabulary_machine_name' => 'topic',
    'parent' => array(
      0 => '3b0f629c-2885-4c3f-be2c-aaaafc15068a',
    ),
  );
  $terms[] = array(
    'name' => 'Topics',
    'description' => NULL,
    'format' => NULL,
    'weight' => 8,
    'uuid' => '731f43f6-c9c8-429c-98e6-e9fe9fdcb85b',
    'vocabulary_machine_name' => 'topic',
  );
  $terms[] = array(
    'name' => 'Career Development',
    'description' => '',
    'format' => 'full_html',
    'weight' => 3,
    'uuid' => '7398a4e6-d3f3-4b47-a145-cf38cfda5e82',
    'vocabulary_machine_name' => 'topic',
    'parent' => array(
      0 => '731f43f6-c9c8-429c-98e6-e9fe9fdcb85b',
    ),
  );
  $terms[] = array(
    'name' => 'Academics',
    'description' => '',
    'format' => 'full_html',
    'weight' => 0,
    'uuid' => '96b6f855-197b-4968-bacf-4f2aed59b804',
    'vocabulary_machine_name' => 'topic',
    'parent' => array(
      0 => '731f43f6-c9c8-429c-98e6-e9fe9fdcb85b',
    ),
  );
  $terms[] = array(
    'name' => 'Humanities & Arts',
    'description' => '',
    'format' => 'full_html',
    'weight' => 2,
    'uuid' => 'b94a2f40-dc42-44ae-9b56-529a189bfd89',
    'vocabulary_machine_name' => 'topic',
    'parent' => array(
      0 => '3b0f629c-2885-4c3f-be2c-aaaafc15068a',
    ),
  );
  $terms[] = array(
    'name' => 'Student Life',
    'description' => '',
    'format' => 'full_html',
    'weight' => 6,
    'uuid' => 'd2379fac-e72e-443d-aadc-cf2a742415ed',
    'vocabulary_machine_name' => 'topic',
    'parent' => array(
      0 => '731f43f6-c9c8-429c-98e6-e9fe9fdcb85b',
    ),
  );
  $terms[] = array(
    'name' => 'Student Services',
    'description' => '',
    'format' => 'full_html',
    'weight' => 7,
    'uuid' => 'db570ab8-003f-43d5-81c5-507dcdcf7499',
    'vocabulary_machine_name' => 'topic',
    'parent' => array(
      0 => '731f43f6-c9c8-429c-98e6-e9fe9fdcb85b',
    ),
  );
  $terms[] = array(
    'name' => 'Alumni',
    'description' => '',
    'format' => 'full_html',
    'weight' => 2,
    'uuid' => 'f1c2561d-09d3-4cc5-9218-276056dd4e9f',
    'vocabulary_machine_name' => 'topic',
    'parent' => array(
      0 => '731f43f6-c9c8-429c-98e6-e9fe9fdcb85b',
    ),
  );
  return $terms;
}

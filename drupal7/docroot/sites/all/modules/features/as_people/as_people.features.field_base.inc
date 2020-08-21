<?php
/**
 * @file
 * as_people.features.field_base.inc
 */

/**
 * Implements hook_field_default_field_bases().
 */
function as_people_field_default_field_bases() {
  $field_bases = array();

  // Exported field_base: 'field_academic_role'.
  $field_bases['field_academic_role'] = array(
    'active' => 1,
    'cardinality' => -1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_academic_role',
    'field_permissions' => array(
      'type' => 0,
    ),
    'indexes' => array(
      'tid' => array(
        0 => 'tid',
      ),
    ),
    'locked' => 0,
    'module' => 'taxonomy',
    'settings' => array(
      'allowed_values' => array(
        0 => array(
          'vocabulary' => 'sliceanddice',
          'parent' => 0,
        ),
      ),
      'options_list_callback' => 'title_taxonomy_allowed_values',
    ),
    'translatable' => 0,
    'type' => 'taxonomy_term_reference',
  );

  // Exported field_base: 'field_educational_background'.
  $field_bases['field_educational_background'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_educational_background',
    'field_permissions' => array(
      'type' => 0,
    ),
    'indexes' => array(
      'format' => array(
        0 => 'format',
      ),
    ),
    'locked' => 0,
    'module' => 'text',
    'settings' => array(),
    'translatable' => 0,
    'type' => 'text_long',
  );

  // Exported field_base: 'field_email'.
  $field_bases['field_email'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_email',
    'indexes' => array(),
    'locked' => 0,
    'module' => 'email',
    'settings' => array(),
    'translatable' => 0,
    'type' => 'email',
  );

  // Exported field_base: 'field_keywords'.
  $field_bases['field_keywords'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_keywords',
    'field_permissions' => array(
      'type' => 0,
    ),
    'indexes' => array(
      'format' => array(
        0 => 'format',
      ),
    ),
    'locked' => 0,
    'module' => 'text',
    'settings' => array(),
    'translatable' => 0,
    'type' => 'text_long',
  );

  // Exported field_base: 'field_person_affiliation'.
  $field_bases['field_person_affiliation'] = array(
    'active' => 1,
    'cardinality' => -1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_person_affiliation',
    'field_permissions' => array(
      'type' => 0,
    ),
    'indexes' => array(
      'format' => array(
        0 => 'format',
      ),
    ),
    'locked' => 0,
    'module' => 'text',
    'settings' => array(
      'max_length' => 255,
    ),
    'translatable' => 0,
    'type' => 'text',
  );

  // Exported field_base: 'field_person_category'.
  $field_bases['field_person_category'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_person_category',
    'indexes' => array(
      'tid' => array(
        0 => 'tid',
      ),
    ),
    'locked' => 0,
    'module' => 'taxonomy',
    'settings' => array(
      'allowed_values' => array(
        0 => array(
          'vocabulary' => 'people_categories',
          'parent' => 0,
        ),
      ),
      'options_list_callback' => 'title_taxonomy_allowed_values',
    ),
    'translatable' => 0,
    'type' => 'taxonomy_term_reference',
  );

  // Exported field_base: 'field_person_graduate_fields'.
  $field_bases['field_person_graduate_fields'] = array(
    'active' => 1,
    'cardinality' => -1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_person_graduate_fields',
    'field_permissions' => array(
      'type' => 0,
    ),
    'indexes' => array(
      'format' => array(
        0 => 'format',
      ),
    ),
    'locked' => 0,
    'module' => 'text',
    'settings' => array(
      'max_length' => 255,
    ),
    'translatable' => 0,
    'type' => 'text',
  );

  // Exported field_base: 'field_person_publications'.
  $field_bases['field_person_publications'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_person_publications',
    'field_permissions' => array(
      'type' => 0,
    ),
    'indexes' => array(
      'format' => array(
        0 => 'format',
      ),
    ),
    'locked' => 0,
    'module' => 'text',
    'settings' => array(),
    'translatable' => 0,
    'type' => 'text_long',
  );

  // Exported field_base: 'field_primary_department'.
  $field_bases['field_primary_department'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_primary_department',
    'field_permissions' => array(
      'type' => 0,
    ),
    'indexes' => array(
      'format' => array(
        0 => 'format',
      ),
    ),
    'locked' => 0,
    'module' => 'text',
    'settings' => array(
      'max_length' => 255,
    ),
    'translatable' => 0,
    'type' => 'text',
  );

  // Exported field_base: 'field_primary_department_list'.
  $field_bases['field_primary_department_list'] = array(
    'active' => 1,
    'cardinality' => -1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_primary_department_list',
    'field_permissions' => array(
      'type' => 0,
    ),
    'indexes' => array(
      'value' => array(
        0 => 'value',
      ),
    ),
    'locked' => 0,
    'module' => 'list',
    'settings' => array(
      'allowed_values' => array(
        'AEROSPACE' => 'Aerospace Studies',
        'ANSC' => 'Animal Science (AN SC)',
        'ANTHR' => 'Anthropology (ANTHR)',
        'AEP' => 'Applied and Engineering Physics (A&amp;EP)',
        'ARCH' => 'Architecture (ARCH)',
        'ART' => 'Art (ART)',
        'ASIAN' => 'Asian Studies (ASIAN)',
        'ASRC' => 'Africana Studies and Research Center (ASRC)',
        'ASTRO' => 'Astronomy (ASTRO)',
        'BTRY' => 'Biological Statistics and Computational Biology (BSCB)',
        'BEE' => 'Biological and Environmental Engineering (BEE)',
        'BIOMD' => 'Biomedical Sciences (VTBMS)',
        'AEM' => 'Charles H. Dyson School of Applied Economics and Management (AEM)',
        'CHEME' => 'Chemical and Biomolecular Engineering (CHEME)',
        'CHEM' => 'Chemistry and Chemical Biology (CHEM)',
        'CRP' => 'City and Regional Planning (CRP)',
        'CEE' => 'Civil and Environmental Engineering (CEE)',
        'CLASS' => 'Classics (CLASS)',
        'CLSCI' => 'Clinical Sciences (VETCS)',
        'COMM' => 'Communication (COMM)',
        'COML' => 'Comparative Literature (COM L)',
        'COMS' => 'Computer Science (COM S)',
        'CSS' => 'Crop and Soil Sciences (CSS)',
        'DEA' => 'Design and Environmental Analysis (DEA)',
        'RSOC' => 'Development Sociology (D SOC)',
        'EN-EAS' => 'Earth and Atmospheric Sciences (EAS)',
        'BIOES-AS' => 'Ecology and Evolutionary Biology (EEB)',
        'ECON' => 'Economics (ECON)',
        'ECE' => 'Electrical and Computer Engineering (ECE)',
        'ENGL' => 'English (ENGL)',
        'ENTOM-AG' => 'Entomology (ENTOM)',
        'TXA' => 'Fiber Science &amp; Apparel Design (FSAD)',
        'FOOD-GNVA' => 'Food Science & Technology at Geneva',
        'FOOD-AG' => 'Food Science (FOOD)',
        'GERST' => 'German Studies (GERST)',
        'GOVT' => 'Government (GOVT)',
        'HIST' => 'History (HIST)',
        'HART' => 'History of Art and Visual Studies (ART H)',
        'HORT' => 'Horticulture (HORT)',
        'HD' => 'Human Development (HD)',
        'ILRHR' => 'Human Resource Studies (ILRHR)',
        'INFOSCI' => 'Information Science (INFOSCI)',
        'ILRIC' => 'International and Comparative Labor (ILRIC)',
        'ILRLE' => 'Labor Economics (ILRLE)',
        'ILRLR' => 'Labor Relations, Law, and History (ILRLR)',
        'JWST' => 'Jewish Studies',
        'LANAR' => 'Landscape Architecture (LA)',
        'LING' => 'Linguistics (LING)',
        'LSP' => 'Latina/o Studies Program (LSP)',
        'MSE' => 'Materials Science and Engineering (MS&E)',
        'MATH' => 'Mathematics (MATH)',
        'BIOMI-AG' => 'Microbiology (BIOMI)',
        'MICIM' => 'Microbiology and Immunology (VETMI)',
        'BIOMBG-AS' => 'Molecular Biology and Genetics (MBG)',
        'MOLMD' => 'Molecular Medicine (VETMM)',
        'MUSIC' => 'Music (MUSIC)',
        'NTRES' => 'Natural Resources (NTRES/DNR)',
        'NES' => 'Near Eastern Studies (NES)',
        'BIONB-AS' => 'Neurobiology and Behavior (BIO NB)',
        'ORIE' => 'Operations Research and Information Engineering (OR&IE)',
        'ILROB' => 'Organizational Behavior (ILROB)',
        'THETR' => 'Performing and Media Arts (PMA)',
        'PHIL' => 'Philosophy (PHIL)',
        'PHYS' => 'Physics (PHYS)',
        'BIOPL-AS' => 'Plant Biology (BIOPL)',
        'PLBR' => 'Plant Breeding and Genetics (PB&G)',
        'PLPA-AG' => 'Plant Pathology and Plant-Microbe Biology (PPPMB)',
        'PLPA-GNVA' => 'Plant Pathology at Geneva',
        'PAM' => 'Policy Analysis and Management (PAM)',
        'POPMD' => 'Population Medicine and Diagnostic Sciences (VTPMD)',
        'PSYCH' => 'Psychology (PSYCH)',
        'RELST' => 'Religious Studies',
        'OUREF' => 'Research & Learning Services',
        'ROMS' => 'Romance Studies (ROM S)',
        'STS' => 'Science and Technology Studies (S&TS)',
        'SOC' => 'Sociology (SOC)',
        'MAE' => 'Sibley School of Mechanical and Aerospace Engineering (M&AE)',
        'ILRST' => 'Social Statistics (ILRST)',
        'DSS' => 'Statistical Science (STSCI)',
        'EN-SYST' => 'Systems Engineering',
        'TAM' => 'Theoretical and Applied Mechanics (T&AM)',
      ),
      'allowed_values_function' => '',
    ),
    'translatable' => 0,
    'type' => 'list_text',
  );

  // Exported field_base: 'field_profile_type'.
  $field_bases['field_profile_type'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_profile_type',
    'field_permissions' => array(
      'type' => 0,
    ),
    'indexes' => array(
      'value' => array(
        0 => 'value',
      ),
    ),
    'locked' => 0,
    'module' => 'list',
    'settings' => array(
      'allowed_values' => array(
        'advisoryCouncil' => 'Advisory Council',
        'faculty' => 'Faculty',
        'alumni' => 'Alumni',
        'student' => 'Student',
        'staff' => 'Staff',
      ),
      'allowed_values_function' => '',
    ),
    'translatable' => 0,
    'type' => 'list_text',
  );

  // Exported field_base: 'field_related_articles'.
  $field_bases['field_related_articles'] = array(
    'active' => 1,
    'cardinality' => -1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_related_articles',
    'field_permissions' => array(
      'type' => 0,
    ),
    'indexes' => array(
      'target_id' => array(
        0 => 'target_id',
      ),
    ),
    'locked' => 0,
    'module' => 'entityreference',
    'settings' => array(
      'handler' => 'base',
      'handler_settings' => array(
        'behaviors' => array(
          'views-select-list' => array(
            'status' => 0,
          ),
        ),
        'sort' => array(
          'type' => 'none',
        ),
        'target_bundles' => array(
          'article' => 'article',
        ),
      ),
      'target_type' => 'node',
    ),
    'translatable' => 0,
    'type' => 'entityreference',
  );

  // Exported field_base: 'field_research_focus'.
  $field_bases['field_research_focus'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_research_focus',
    'field_permissions' => array(
      'type' => 0,
    ),
    'indexes' => array(
      'format' => array(
        0 => 'format',
      ),
    ),
    'locked' => 0,
    'module' => 'text',
    'settings' => array(),
    'translatable' => 0,
    'type' => 'text_long',
  );

  return $field_bases;
}

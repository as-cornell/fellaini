<?php
/**
 * @file
 * as_people_departments.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function as_people_departments_taxonomy_default_vocabularies() {
  return array(
    'regions' => array(
      'name' => 'Regions',
      'machine_name' => 'regions',
      'description' => 'Taxonomy per department for categorizing people and research into regions',
      'hierarchy' => 0,
      'module' => 'taxonomy',
      'weight' => 0,
      'rdf_mapping' => array(
        'rdftype' => array(
          0 => 'skos:ConceptScheme',
        ),
        'name' => array(
          'predicates' => array(
            0 => 'dc:title',
          ),
        ),
        'description' => array(
          'predicates' => array(
            0 => 'rdfs:comment',
          ),
        ),
      ),
    ),
    'subdisciplines' => array(
      'name' => 'Subdisciplines',
      'machine_name' => 'subdisciplines',
      'description' => 'Taxonomy per department for categorizing people and research into subdisciplines',
      'hierarchy' => 0,
      'module' => 'taxonomy',
      'weight' => 0,
      'rdf_mapping' => array(
        'rdftype' => array(
          0 => 'skos:ConceptScheme',
        ),
        'name' => array(
          'predicates' => array(
            0 => 'dc:title',
          ),
        ),
        'description' => array(
          'predicates' => array(
            0 => 'rdfs:comment',
          ),
        ),
      ),
    ),
  );
}

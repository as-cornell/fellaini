<?php
/**
 * @file
 * as_majors_minors_grad.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function as_majors_minors_grad_taxonomy_default_vocabularies() {
  return array(
    'discipline' => array(
      'name' => 'Discipline',
      'machine_name' => 'discipline',
      'description' => 'Taxonomy of disciplines for Major Minor Grad field',
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
    'level' => array(
      'name' => 'Level',
      'machine_name' => 'level',
      'description' => 'Taxonomy of student levels for Major Minor Grad field',
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

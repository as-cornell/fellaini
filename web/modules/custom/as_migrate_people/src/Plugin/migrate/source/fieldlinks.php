<?php

class Fieldlinks extends SourcePluginBase {
  public function prepareRow(Row $row) {
    parent::prepareRow($row);

    // I do some data manipulation to end up with an array that looks like this,
    // which I want to import into multi-value link field.
    $links = [
      [
        'title' => 'Link 1',
        'uri' => 'URI 1',
      ],
      [
        'title' => 'Link 2',
        'uri' => 'URI 2',
      ],
      [
        'title' => 'Link 3',
        'uri' => 'URI 3',
      ],
    ];
    $row->setSourceProperty('links', $links);
  }
}

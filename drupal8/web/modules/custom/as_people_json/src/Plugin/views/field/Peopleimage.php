<?php
namespace Drupal\as_people_json\Plugin\views\field;

use Drupal\views\Plugin\views\field\FieldPluginBase;
use Drupal\views\ResultRow;

/**
 * Class Peopleimage
 *
 * @ViewsField("people_image")
 */
class Peopleimage extends FieldPluginBase {
  /**
   * {@inheritdoc}
   */
  public function render(ResultRow $values) {
    $peopleimage = $this->getValue($values);
    if ($peopleimage) {
      return [
        '#theme' => 'image',
        '#uri' => $peopleimage,
        '#alt' => $this->t('People Image'),
      ];
    }
  }
}

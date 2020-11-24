<?php
namespace Drupal\as_people_json\Plugin\views\filter;
/**
 * Simple filter to handle filtering People results by NetID.
 * @ViewsFilter("people_netid")
 */
class Netid extends FilterPluginBase {
  public $no_operator = TRUE;
  /**
   * {@inheritdoc}
   */
  protected function valueForm(&$form, FormStateInterface $form_state) {
    $form['value'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Value'),
      '#size' => 30,
      '#default_value' => $this->value,
    ];
  }
}

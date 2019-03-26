<?php

namespace Drupal\as_page_components\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class PageComponentEntityTypeForm.
 */
class PageComponentEntityTypeForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $page_component_entity_type = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $page_component_entity_type->label(),
      '#description' => $this->t("Label for the Item type."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $page_component_entity_type->id(),
      '#machine_name' => [
        'exists' => '\Drupal\as_page_components\Entity\PageComponentEntityType::load',
      ],
      '#disabled' => !$page_component_entity_type->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $page_component_entity_type = $this->entity;
    $status = $page_component_entity_type->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Item type.', [
          '%label' => $page_component_entity_type->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Item type.', [
          '%label' => $page_component_entity_type->label(),
        ]));
    }
    $form_state->setRedirectUrl($page_component_entity_type->toUrl('collection'));
  }

}

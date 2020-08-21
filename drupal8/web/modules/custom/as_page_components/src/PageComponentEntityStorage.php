<?php

namespace Drupal\as_page_components;

use Drupal\Core\Entity\Sql\SqlContentEntityStorage;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Language\LanguageInterface;
use Drupal\as_page_components\Entity\PageComponentEntityInterface;

/**
 * Defines the storage handler class for Item entities.
 *
 * This extends the base storage class, adding required special handling for
 * Item entities.
 *
 * @ingroup as_page_components
 */
class PageComponentEntityStorage extends SqlContentEntityStorage implements PageComponentEntityStorageInterface {

  /**
   * {@inheritdoc}
   */
  public function revisionIds(PageComponentEntityInterface $entity) {
    return $this->database->query(
      'SELECT vid FROM {page_component_entity_revision} WHERE id=:id ORDER BY vid',
      [':id' => $entity->id()]
    )->fetchCol();
  }

  /**
   * {@inheritdoc}
   */
  public function userRevisionIds(AccountInterface $account) {
    return $this->database->query(
      'SELECT vid FROM {page_component_entity_field_revision} WHERE uid = :uid ORDER BY vid',
      [':uid' => $account->id()]
    )->fetchCol();
  }

  /**
   * {@inheritdoc}
   */
  public function countDefaultLanguageRevisions(PageComponentEntityInterface $entity) {
    return $this->database->query('SELECT COUNT(*) FROM {page_component_entity_field_revision} WHERE id = :id AND default_langcode = 1', [':id' => $entity->id()])
      ->fetchField();
  }

  /**
   * {@inheritdoc}
   */
  public function clearRevisionsLanguage(LanguageInterface $language) {
    return $this->database->update('page_component_entity_revision')
      ->fields(['langcode' => LanguageInterface::LANGCODE_NOT_SPECIFIED])
      ->condition('langcode', $language->getId())
      ->execute();
  }

}

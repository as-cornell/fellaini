<?php

namespace Drupal\as_page_components;

use Drupal\Core\Entity\ContentEntityStorageInterface;
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
interface PageComponentEntityStorageInterface extends ContentEntityStorageInterface {

  /**
   * Gets a list of Item revision IDs for a specific Item.
   *
   * @param \Drupal\as_page_components\Entity\PageComponentEntityInterface $entity
   *   The Item entity.
   *
   * @return int[]
   *   Item revision IDs (in ascending order).
   */
  public function revisionIds(PageComponentEntityInterface $entity);

  /**
   * Gets a list of revision IDs having a given user as Item author.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The user entity.
   *
   * @return int[]
   *   Item revision IDs (in ascending order).
   */
  public function userRevisionIds(AccountInterface $account);

  /**
   * Counts the number of revisions in the default language.
   *
   * @param \Drupal\as_page_components\Entity\PageComponentEntityInterface $entity
   *   The Item entity.
   *
   * @return int
   *   The number of revisions in the default language.
   */
  public function countDefaultLanguageRevisions(PageComponentEntityInterface $entity);

  /**
   * Unsets the language for all Item with the given language.
   *
   * @param \Drupal\Core\Language\LanguageInterface $language
   *   The language object.
   */
  public function clearRevisionsLanguage(LanguageInterface $language);

}

<?php

namespace Drupal\as_page_components;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Item entity.
 *
 * @see \Drupal\as_page_components\Entity\PageComponentEntity.
 */
class PageComponentEntityAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\as_page_components\Entity\PageComponentEntityInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished item entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published item entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit item entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete item entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add item entities');
  }

}

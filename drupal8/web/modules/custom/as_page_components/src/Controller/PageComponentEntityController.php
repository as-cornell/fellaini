<?php

namespace Drupal\as_page_components\Controller;

use Drupal\Component\Utility\Xss;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Url;
use Drupal\as_page_components\Entity\PageComponentEntityInterface;

/**
 * Class PageComponentEntityController.
 *
 *  Returns responses for Item routes.
 */
class PageComponentEntityController extends ControllerBase implements ContainerInjectionInterface {

  /**
   * Displays a Item  revision.
   *
   * @param int $page_component_entity_revision
   *   The Item  revision ID.
   *
   * @return array
   *   An array suitable for drupal_render().
   */
  public function revisionShow($page_component_entity_revision) {
    $page_component_entity = $this->entityManager()->getStorage('page_component_entity')->loadRevision($page_component_entity_revision);
    $view_builder = $this->entityManager()->getViewBuilder('page_component_entity');

    return $view_builder->view($page_component_entity);
  }

  /**
   * Page title callback for a Item  revision.
   *
   * @param int $page_component_entity_revision
   *   The Item  revision ID.
   *
   * @return string
   *   The page title.
   */
  public function revisionPageTitle($page_component_entity_revision) {
    $page_component_entity = $this->entityManager()->getStorage('page_component_entity')->loadRevision($page_component_entity_revision);
    return $this->t('Revision of %title from %date', ['%title' => $page_component_entity->label(), '%date' => format_date($page_component_entity->getRevisionCreationTime())]);
  }

  /**
   * Generates an overview table of older revisions of a Item .
   *
   * @param \Drupal\as_page_components\Entity\PageComponentEntityInterface $page_component_entity
   *   A Item  object.
   *
   * @return array
   *   An array as expected by drupal_render().
   */
  public function revisionOverview(PageComponentEntityInterface $page_component_entity) {
    $account = $this->currentUser();
    $langcode = $page_component_entity->language()->getId();
    $langname = $page_component_entity->language()->getName();
    $languages = $page_component_entity->getTranslationLanguages();
    $has_translations = (count($languages) > 1);
    $page_component_entity_storage = $this->entityManager()->getStorage('page_component_entity');

    $build['#title'] = $has_translations ? $this->t('@langname revisions for %title', ['@langname' => $langname, '%title' => $page_component_entity->label()]) : $this->t('Revisions for %title', ['%title' => $page_component_entity->label()]);
    $header = [$this->t('Revision'), $this->t('Operations')];

    $revert_permission = (($account->hasPermission("revert all item revisions") || $account->hasPermission('administer item entities')));
    $delete_permission = (($account->hasPermission("delete all item revisions") || $account->hasPermission('administer item entities')));

    $rows = [];

    $vids = $page_component_entity_storage->revisionIds($page_component_entity);

    $latest_revision = TRUE;

    foreach (array_reverse($vids) as $vid) {
      /** @var \Drupal\as_page_components\PageComponentEntityInterface $revision */
      $revision = $page_component_entity_storage->loadRevision($vid);
      // Only show revisions that are affected by the language that is being
      // displayed.
      if ($revision->hasTranslation($langcode) && $revision->getTranslation($langcode)->isRevisionTranslationAffected()) {
        $username = [
          '#theme' => 'username',
          '#account' => $revision->getRevisionUser(),
        ];

        // Use revision link to link to revisions that are not active.
        $date = \Drupal::service('date.formatter')->format($revision->getRevisionCreationTime(), 'short');
        if ($vid != $page_component_entity->getRevisionId()) {
          $link = $this->l($date, new Url('entity.page_component_entity.revision', ['page_component_entity' => $page_component_entity->id(), 'page_component_entity_revision' => $vid]));
        }
        else {
          $link = $page_component_entity->link($date);
        }

        $row = [];
        $column = [
          'data' => [
            '#type' => 'inline_template',
            '#template' => '{% trans %}{{ date }} by {{ username }}{% endtrans %}{% if message %}<p class="revision-log">{{ message }}</p>{% endif %}',
            '#context' => [
              'date' => $link,
              'username' => \Drupal::service('renderer')->renderPlain($username),
              'message' => ['#markup' => $revision->getRevisionLogMessage(), '#allowed_tags' => Xss::getHtmlTagList()],
            ],
          ],
        ];
        $row[] = $column;

        if ($latest_revision) {
          $row[] = [
            'data' => [
              '#prefix' => '<em>',
              '#markup' => $this->t('Current revision'),
              '#suffix' => '</em>',
            ],
          ];
          foreach ($row as &$current) {
            $current['class'] = ['revision-current'];
          }
          $latest_revision = FALSE;
        }
        else {
          $links = [];
          if ($revert_permission) {
            $links['revert'] = [
              'title' => $this->t('Revert'),
              'url' => $has_translations ?
              Url::fromRoute('entity.page_component_entity.translation_revert', ['page_component_entity' => $page_component_entity->id(), 'page_component_entity_revision' => $vid, 'langcode' => $langcode]) :
              Url::fromRoute('entity.page_component_entity.revision_revert', ['page_component_entity' => $page_component_entity->id(), 'page_component_entity_revision' => $vid]),
            ];
          }

          if ($delete_permission) {
            $links['delete'] = [
              'title' => $this->t('Delete'),
              'url' => Url::fromRoute('entity.page_component_entity.revision_delete', ['page_component_entity' => $page_component_entity->id(), 'page_component_entity_revision' => $vid]),
            ];
          }

          $row[] = [
            'data' => [
              '#type' => 'operations',
              '#links' => $links,
            ],
          ];
        }

        $rows[] = $row;
      }
    }

    $build['page_component_entity_revisions_table'] = [
      '#theme' => 'table',
      '#rows' => $rows,
      '#header' => $header,
    ];

    return $build;
  }

}

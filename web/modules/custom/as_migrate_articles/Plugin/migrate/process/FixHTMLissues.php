<?php

namespace Drupal\as_migrate_articles\Plugin\migrate\process;

use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\file\FileInterface;
use Drupal\migrate\Row;
use Drupal\media_entity\Entity\Media;
use Drupal\Core\Database\Database;
use Drupal\Component\Utility\Unicode;

/**
 * @MigrateProcessPlugin(
 *   id = "fix_html_issues"
 * )
 */
class FixHTMLissues extends ProcessPluginBase {

  /**
   * {@inheritdoc}
   */
  public function transform($html, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {

    // Values for the following variables are specified in the YAML file above.
    $images_source = $this->configuration['images_source'];
    $destination = $this->configuration['images_destination'];

    preg_match_all('/<img[^>]+>/i', $html, $result);

    if (!empty($result[0])) {

      foreach ($result as $img_tags) {
        foreach ($img_tags as $img_tag) {

          preg_match_all('/(alt|title|src)=("[^"]*")/i', $img_tag, $tag_attributes);

          $filepath = str_replace('"', '', $tag_attributes[2][1]);

          if (!empty($tag_attributes[2][1])) {

            // Create file object from a locally copied file.
            $filename = basename($filepath);

            if (file_prepare_directory($destination, FILE_CREATE_DIRECTORY)) {

              if (filter_var($filepath, FILTER_VALIDATE_URL)) {
                $file_contents = file_get_contents($filepath);
              }
              else {
                $file_contents = file_get_contents($images_source . $filepath);
              }
              $new_destination = $destination . '/' . $row->getSourceProperty('id') . '-' . $filename;

              if (!empty($file_contents)) {

                if ($file = file_save_data($file_contents, $new_destination, FILE_EXISTS_REPLACE)) {

                  // Create media entity using saved file.
                  $media = Media::create([
                    'bundle'      => 'image',
                    'uid'         => \Drupal::currentUser()->id(),
                    'langcode'    => \Drupal::languageManager()->getDefaultLanguage()->getId(),
                    'status'      => Media::PUBLISHED,
                    'field_image' => [
                      'target_id' => $file->id(),
                      'alt'       => !empty($tag_attributes[2][0]) ? Unicode::truncate(str_replace('"', '', $tag_attributes[2][0]), 512) : '',
                      'title'     => !empty($tag_attributes[2][0]) ? Unicode::truncate(str_replace('"', '', $tag_attributes[2][0]), 1024) : '',
                    ],
                  ]);

                  $media->save();
                  $uuid = $this->getMediaUuid($file);
                  $html = str_replace($img_tag, '<p><drupal-entity
                    data-embed-button="embed_image"
                    data-entity-embed-display="entity_reference:media_thumbnail"
                    data-entity-embed-display-settings="{"image_style":"large","image_link":""}"
                    data-entity-type="media"
                    data-entity-uuid="' . $uuid . '"></drupal-entity>></p>', $html);
                }

              }

            }
          }
        }
      }
    }
    return $html;
  }

  /**
   * Get Media UUID by File ID.
   */
  protected function getMediaUuid(FileInterface $file) {
    $query = db_select('media__field_image', 'f', ['target' => 'default']);
    $query->innerJoin('media', 'm', 'm.mid = f.entity_id');
    $query->fields('m', ['uuid']);
    $query->condition('f.field_image_target_id', $file->id());
    $uuid = $query->execute()->fetchField();
    return $uuid;
  }

}

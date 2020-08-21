<div class="as-page">
<div class="as-page__container as-grid as-grid--one-two">
  <div class="fullPage__sidebar">
    <div class="sticky">
      <h2 class="menu-title sidebarNav__trigger">On This Page</h2>
        <ul class="fullPage__sidebarNav">
          <?php
          // Modal page sidebar links, markup provided by as_modal_links module
            $link_count=0;
            foreach($content['field_text_group']['#items'] as $item) {
            $index=$item['value'];
            if ($content['field_text_group'][$link_count]['entity']['field_collection_item'][$index]['field_section_title'][0]['#markup']) {
            print render($content['field_text_group'][$link_count]['entity']['field_collection_item'][$index]['field_section_title'][0]['#linktext']);
            }
            $link_count++;
            }
          ?>
        </ul>
        <?php if (!empty($content['field_article'])): ?>
          <h2>Related News</h2>
          <div class="small-cards">
            <?php print render($content['field_article']);?>
          </div>
        <?php endif;?>

    </div>
  </div>

<div class="fullPage__body as-modal__content">
    <?php if (!empty($content['field_image'])):?>
        <div class="as-img">
          <div class="as-hero as-hero--mini">
              <div class="field-pano-image">
                  <?php print render($content['field_image']); ?>
              </div>

        <h1 class="as-hero__copy pageTitle"><?php print $title; ?></h1>
    </div>
</div>
    <?php else: ?>
        <h1><?php print $title; ?></h1>
    <?php endif; ?>


<?php
$breadcrumb = theme('breadcrumb', array('breadcrumb' => drupal_get_breadcrumb())) ;
print $breadcrumb ?>

  <div class="as-card__text">
    <?php
        // Modal page section title and text, anchor tag markup provided by as_modal_links module
        $text_count=0;
        foreach($content['field_text_group']['#items'] as $item) {
        $index=$item['value'];
        $sectionid = $content['field_text_group'][$text_count]['entity']['field_collection_item'][$index]['field_section_title'][0]['#class'];
        $sectiontitle = $content['field_text_group'][$text_count]['entity']['field_collection_item'][$index]['field_section_title'][0]['#markup'];
        $sectiontext = $content['field_text_group'][$text_count]['entity']['field_collection_item'][$index]['field_section_text'][0]['#markup'];
        print "<div id='{$sectionid}' class='navTarget'>";
        if (!empty($sectiontitle)) {
        print render ($sectiontitle);
          }
        if (!empty($sectiontext)) {
        print render($sectiontext);
          }
        print "</div>";
        $text_count++;
          }
      ?>
    <?php print render($content['field_related_webform']); ?>
  </div>
  </div>
</div>

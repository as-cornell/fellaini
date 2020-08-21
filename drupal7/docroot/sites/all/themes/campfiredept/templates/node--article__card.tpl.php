<article class="card card--article" aria-labelledby="article-title-<?php print $node->nid?>">
  <a href="<?php print $node_url; ?>">
    <div class="card__image">
			<?php
//imagethang
$imgsrc = render($content['field_image_remote_path']);
$imgalt = render($content['field_image_remote_alt']);
$imgmarkup = '<div class="field-image">
		      <img typeof="foaf:Image" src="' . $imgsrc . '" alt="' . $imgalt . '" />
		    </div>';
if (!empty($content['field_image_remote_path'])) {
    print $imgmarkup;
} elseif (!empty($content['field_image'])) {
    print render($content['field_image']);
} else {
    print '<div class="field-image">
		      <img typeof="foaf:Image" src="https://as.cornell.edu/sites/as/files/field/image/Klarmanarticle.jpg
" alt="Klarman Hall at sunset" />
		    </div>';
}
?>
    </div>
    <div class="card__content">

        <?php if (!empty($content['field_dateline'])):?>
          <div class="card__copy--date">
          <?php print render($content['field_dateline']); ?>
          </div>
          <?php endif; ?>
        <h1 class="card__title"
          <?php print $title_attributes; ?> id="article-title-<?php print $node->nid?>"><?php print $title; ?>
        </h1>
        <?php if (!empty($content['field_card_label'])): ?>
        <h2 class="card__subtitle">
          <?php print render($content['field_card_label']); ?>
        </h2>
        <?php endif; ?>


    </div>
    <p class="card__linkText">
      Learn More
    </p>
  </a>

</article>

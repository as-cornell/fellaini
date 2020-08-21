<article class="as-card as-card--article <?php if (empty($content['field_image'])): ?>as-card--article--noImage<?php endif; ?>" id="<?php print $title; ?>" aria-labelledby="article-title-<?php print $node->nid?>">
  <a href="<?php print $node_url; ?>" title="<?php print $title; ?>" class="newsCard">
    <?php if (!empty($content['field_image'])): ?>
      <div class="as-card__img">
        <?php print render($content['field_image']); ?>
      </div>
    <?php endif; ?>
    <div class="as-card__inner">
      <div class="as-card__copy">
        <h1 class="as-card__title" id="article-title-<?php print $node->nid?>">    <span>



          <?php if ((!empty($content['field_link_text']) && ($node->field_link_text['und'][0]['value'] != 'Learn More'))): ?>
            <?php print render($content['field_link_text']); ?>
          <?php else: ?>
            <?php print $title; ?>
        <?php endif; ?></span>
        </h1>
        <?php if (!empty($content['field_card_label'])): ?>
        <h2 class="as-card__subtitle">
          <?php print render($content['field_card_label']); ?>
        </h2>
        <?php endif; ?>
        <p class="as-card__link">
          Learn more
        </p>
      </div>
    </div>
  </a>
</article>

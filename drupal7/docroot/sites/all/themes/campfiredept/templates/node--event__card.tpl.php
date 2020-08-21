<article class="card card--event" aria-labelledby="event-title-<?php print $node->nid?>">
  <a href="<?php print $node_url; ?>">
    <div class="card__image">
      <?php print render($content['field_image']); ?>
    </div>
    <div class="card__content">

        <h1 class="card__title"
          <?php print $title_attributes; ?> id="event-title-<?php print $node->nid?>"><?php print $title; ?>
        </h1>



    </div>
    <p class="card__linkText">
      Learn More
    </p>
  </a>

</article>

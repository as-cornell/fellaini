<div class="card card--research">

  <a href="<?php print $node_url; ?>">
    <div class="card__image">
    <?php print render($content['field_image']); ?>
    </div>
    <div class="card__content">
      <h1 class="">
        <?php print $title; ?>
      </h1>
<?php print render($content['body']); ?>
      <p class="card__linkText">
        Learn More
      </p>
      </div>
  </a>

</div>

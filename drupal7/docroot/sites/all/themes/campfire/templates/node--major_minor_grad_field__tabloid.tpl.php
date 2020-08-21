<div class="as-page__block">
<article class="as-container pictureText <!--pictureText--colorbar pictureText--colorbar--blue-->">

    <?php print render($content['field_image']); ?>


  <div class="field-description">
    <p class="">Featured Major or Minor</p>
    <h1 class="as-section__title"
      <?php print $title_attributes; ?>><?php print $title; ?>
    </h1>

    <?php
    $summarydescription = array(
      'label'=>'hidden',
      'type' => 'text_summary_or_trimmed',
      );
    $summarydescription = field_view_field('node', $node, 'body', $summarydescription);
    print render($summarydescription);
    ?>

      <a href="<?php print $node_url; ?>">Learn More about <?php print $title; ?></a>

  </div>

</article>
</div>

<article class="as-card as-cards--page">
  <div class="as-card__inner">

  <h1>
    <a href="<?php print $node_url;?>"><?php print $title_attributes; ?><?php print $title; ?></a>
  </h1>

 
  <div class="as-card__img">
    <?php print render($content['field_pano_image']); ?>
  </div>
  
  

  <div class="as-card__copy">
    <div class="as-card__text">
      <?php print render($content['body']); ?>
    </div>
     
</div>
</div>
</article>

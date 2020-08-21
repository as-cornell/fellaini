<article itemscope itemtype="http://schema.org/NewsArticle" aria-labelledby="article-title-<?php print $node->nid?>">
  <a href="<?php print $node_url; ?>" class="articleListing__link">
    <!---<img itemprop="image" src="http://lorempixel.com/output/people-q-c-400-400-9.jpg" alt="thumbnail 1 summary"/>-->
    <?php
    //imagethang
    $imgsrc = render($content['field_image_remote_path']);
    $imgalt = render($content['field_image_remote_alt']);
    $imgmarkup = '<div class="field-image">
          <img typeof="foaf:Image" src="'.$imgsrc.'" alt="'.$imgalt.'" />
        </div>';
    if (!empty($content['field_image_remote_path'])){
        print $imgmarkup;
      }elseif (!empty($content['field_image'])){
        print render($content['field_image']);
      }else{
        print '<div class="field-image">
          <img typeof="foaf:Image" src="https://as.cornell.edu/sites/as/files/field/image/Klarmanarticle.jpg
" alt="Klarman Hall at sunset" />
        </div>';
      }
    ?>
    <div class="articleListing__content">
      <h1 class="articleListing__headline" itemprop="headline" id="article-title-<?php print $node->nid?>"><?php print $title_attributes; ?><?php print $title; ?></h1>
      <span class="articleListing__description" itemprop="description"><?php print render($node->body[$node->language][0]['safe_summary']);  ?></span>
    </div>
  </a>
  <meta itemprop="datePublished" content="<?php print format_date($created, 'iso'); ?>"/>
</article>

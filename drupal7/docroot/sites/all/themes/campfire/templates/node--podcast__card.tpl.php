<article class="as-grid" id="<?php print $title; ?>" aria-labelledby="article-title-<?php print $node->nid?>">
    <div class="art">
        <?php print render($content['field_image']);?>
    </div>
    <div>
        <h1 id="article-title-<?php print $node->nid?>">
            <?php print $title;?>
        </h1>


        <?php print render($content['body']);?>
        <!-- <p>
            <a href="https://itunes.apple.com/us/podcast/what-makes-us-human/id1290247786#">iTunes</a><br /><a href="<?php print render($content['name_field']);?>">Sound Cloud</a>
        </p> -->
        <p>
        <a href="/node/<?php print render($content['field_related_articles']);?>"> <?php print $title;?></a>
        </p>
    </div>
</article>

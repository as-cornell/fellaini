
<div class="as-page">
	<div class="as-container">
		<!-- just don't include as0page__content--withSidebar for article with embeded video -->
		<?php if (!empty($content['field_featured_video'])): ?>
			<article class='as-page__content' itemscope itemtype="http://schema.org/NewsArticle"aria-label="<?php print $title; ?>">
		<?php else: ?>
			<article class='as-page__content--withSidebar' itemscope itemtype="http://schema.org/NewsArticle" id="<?php print $title; ?>" aria-label="<?php print $title; ?>">
		<?php endif; ?>
			<div class="as-page__content">
				<h1 class="pageTitle" itemprop="headline">
					<?php print $title; ?>
				</h1>
				<ul class="shareButtons">
					<li><a href="http://www.facebook.com/sharer/sharer.php?u=<?php print $GLOBALS['base_url']; ?><?php print $node_url; ?>&title=<?php print $title; ?>"><span class='as-icon as-icon--facebook' aria-hidden="true"></span><span class="visually-hidden">Share this story on Facebook</span></a></li>
					<li><a href="http://twitter.com/intent/tweet?status=<?php print $title; ?>+<?php print $GLOBALS['base_url']; ?><?php print $node_url; ?>" class="twitter-share-button" data-via="cornellCAS" data-count="none"><span class='as-icon as-icon--twitter' aria-hidden="true"></span><span class="visually-hidden">Share this story on Twitter</span></a>
					</li>

				</ul>

				<p>
					<?php if (!empty($content['field_byline'])): ?>
						By: <?php print render($content['field_byline']); ?>,&nbsp;<?php print render($content['field_media_source']); ?><br />
					<?php endif; ?>
					<?php if (!empty($content['field_dateline'])):?>
						<?php print render($content['field_dateline']); ?>
					<?php endif; ?>
				</p>

				<?php if (!empty($content['field_featured_video'])): ?>
				<!-- if featured video -->
				<p class="videoContainer"><?php print render($content['field_featured_video']); ?></p>

					<div class="as-page__content--full" itemprop="articleBody">

						<?php print render($content['body']); ?>

					</div>
					<div class="divider divider--horizontal"></div>

				<?php else: ?>
				<!-- no featured video -->
					<div itemprop="articleBody">
						<?php print render($content['body']); ?>
					</div>

				<?php endif; ?>
			</div>


			<!-- don't include if embeded video -->
			<?php if (empty($content['field_featured_video'])): ?>
			<div class="as-page__sidebar">
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
				<?php if (!empty($content['field_article'])): ?>
					<?php print render($content['field_article']); ?>
				<?php endif; ?>



				<?php print render($content['field_related_discipline']); ?>

				<?php print render($content['field_related_dept_prog']); ?>
				<?php print render($content['field_topic']); ?>
				<?php if (!empty(views_embed_view('tweets', 'block_1'))): ?>
					<!-- if view Tweets -->
					<div class="tweets">
						<?php print views_embed_view('tweets', 'block_1'); ?>
					</div>
				<?php endif; ?>
			</div>
			<?php endif; ?>


			<meta itemprop="datePublished" content="<?php print format_date($node->created, 'iso'); ?>"/>
		</article>
		</div>


		<?php if (!empty($content['field_article_view_tags'])): ?>
		<?php if ($content ['field_article_view_tags'][0]['#title'] == 'pmaevent'): ?>
			<div id="college-news" class="as-container as-cards__wrapper">
				<h1>Upcoming Events</h1>
					<div class="cards grid grid--four">
						<?php print views_embed_view('article_blocks', '4_articles_flt', 'pmaevent'); ?>
					</div>
				</div>
		<?php elseif ($content ['field_article_view_tags'][0]['#title'] == 'Course Flyers'): ?>
			<div id="college-news" class="as-container as-cards__wrapper">
				<h1>Other Courses</h1>
					<div class="cards grid grid--four">
						<?php print views_embed_view('article_blocks', '4_articles_flt', 'course-flyers'); ?>
					</div>
				</div>
		<?php endif;?>
		<?php else: ?>
    	<div id="department-news" class="as-container">
				<h1>Other News</h1>
				<a href="/news" class="viewAll as-button as-button--light">View News</a>
				<div class="cards grid grid--four">
					<?php print views_embed_view('article_blocks', '4_articles'); ?>
				</div>
    	</div>

    <?php endif;?>



</div>

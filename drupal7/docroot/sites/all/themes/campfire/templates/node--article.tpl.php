
<?php
//og:title
$clean_title = str_replace('&amp;', 'and', $title);

$og_title = array(
    '#tag' => 'meta',
    '#attributes' => array(
        'property' => 'og:title',
        'content' => $clean_title,
    ),
);
//og:url
//$url = 'http://as.cornell.edu' + $node_url;
$og_url = array(
    '#tag' => 'meta',
    '#attributes' => array(
        'property' => 'og:url',
        'content' => $GLOBALS['base_url'] . url('node/' . $node->nid),

    ),
);
//og:image
//https://api.drupal.org/comment/49288#comment-49288
$img_url = $node->field_image['und'][0]['uri'];
$img_url = image_style_url("large", $img_url);
//$img = field_get_items('node', $variables['node'], 'field_image');
//$img_url = file_create_url($img[0]['uri']);
$og_image = array(
    '#tag' => 'meta',
    '#attributes' => array(
        'property' => 'og:image',
        'content' => $img_url,
    ),
);
//og:description
$body_field = $node->body[$node->language][0]['safe_summary'];

// $body_field = field_view_field('node', $variables['node'], 'body', array('type' => 'text_plain'));
// $body_field = str_replace('&amp;', 'and', $body_field);
// <?php print render($node->body[$node->language][0]['safe_summary']);

$og_description = array(
    '#tag' => 'meta',
    '#attributes' => array(
        'property' => 'og:description',
        'content' => strip_tags(str_replace('&amp;', 'and', $body_field)),
    ),
);

drupal_add_html_head($og_title, 'og_title');
drupal_add_html_head($og_url, 'og_url');
drupal_add_html_head($og_image, 'og_image');
drupal_add_html_head($og_description, 'og_description');
?>


<!--
	Article default
-->
<div class="as-page as-page__block">
	<div class="as-container">
		<?php if (!empty($content['field_featured_video'])): ?>
			<article class='as-page__content' itemscope itemtype="http://schema.org/NewsArticle" id="main-article" aria-label="Content of story with title: <?php print $title; ?>">
		<?php else: ?>
			<article class='as-page__content--withSidebar' itemscope itemtype="http://schema.org/NewsArticle" id="main-article" aria-label="Content of story with title: <?php print $title; ?>">
		<?php endif;?>
			<div class="as-page__content">
				<h1 class="pageTitle" itemprop="headline">
					<?php print $title;?>
				</h1>
				<ul class="shareButtons">
					<li><a href="http://www.facebook.com/sharer/sharer.php?u=http://as.cornell.edu<?php print $node_url;?>&title=<?php print render ($og_title);?>"><span class='as-icon as-icon--facebook'></span></a></li>
					<li><a href="http://twitter.com/intent/tweet?status=<?php print $clean_title;?>+http://as.cornell.edu<?php print $node_url;?>" class="twitter-share-button" data-via="cornellCAS" data-count="none"><span class='as-icon as-icon--twitter'></span></a>
					</li>

				</ul>
				<p>
					<?php if (!empty($content['field_byline'])): ?>
						By: <?php print render($content['field_byline']);?>,&nbsp;<?php print render($content['field_media_source']);?><br />
					<?php endif;?>
					<?php if (!empty($content['field_dateline'])): ?>
						<?php print render($content['field_dateline']);?>
					<?php endif;?>
				</p>

				<?php if (!empty($content['field_featured_video'])): ?>
				<!-- if featured video -->
					<?php print render($content['field_featured_video']);?>
					<div class="as-page__content--full" itemprop="articleBody">
						<?php print render($content['body']);?>
					</div>
					<div class="divider divider--horizontal"></div>

				<?php else: ?>
				<!-- no featured video -->
					<div itemprop="articleBody">
						<?php print render($content['body']);?>
					</div>

				<?php endif;?>
			</div>


			<!-- don't include if embeded video -->
			<?php if (empty($content['field_featured_video'])): ?>
			<div class="as-page__sidebar">
				<?php print render($content['field_image']);?>



				<?php if (!empty($content['field_article'])): ?>
					<?php print render($content['field_article']);?>
				<?php endif;?>
				<?php print render($content['field_related_discipline']);?>
				<?php print render($content['field_related_dept_prog']);?>
				<?php print render($content['field_topic']);?>

			</div>
			<?php endif;?>

			<meta itemprop="datePublished" content="<?php print format_date($node->created, 'iso');?>"/>
		</article>
		</div>

		<div id="featured" class="as-container  as-cards__wrapper">
      <?php if (!empty($content['field_article_view_tags'])): ?>
				<?php if ($content['field_article_view_tags'][0]['#title'] == 'transformative'): ?>
					<h1>Transformative Humanities</h1>
						<div class="content as-cards">
						<?php print views_embed_view('featured_content', 'block_transformative4x');?>
						</div>
				<?php endif;?>
        <?php endif;?>
        <?php if (!empty($content['field_featured'][0]['#markup'])): ?>
				<?php if ($content['field_featured'][0]['#markup'] == 'featured-student'): ?>
					<h1>Student Journeys</h1>
						<div class="content as-cards">
						<?php print views_embed_view('featured_content', 'block_fsx4');?>
						</div>
				<?php endif;?>
				<?php if ($content['field_featured'][0]['#markup'] == 'featured-faculty'): ?>
					<h1>Featured Faculty</h1>
						<div class="content as-cards">
						<?php print views_embed_view('featured_content', 'block_ffx4');?>
						</div>
				<?php endif;?>
				<?php if ($content['field_featured'][0]['#markup'] == 'featured-alumni'): ?>
					<h1>Alumni Stories</h1>
						<div class="content as-cards">
						<?php print views_embed_view('featured_content', 'block_fax4');?>
						</div>
				<?php endif;?>
        <?php endif;?>
			</div>

<?php if (!empty($content['field_article_view_tags'])): ?>
<?php if ($content['field_article_view_tags'][0]['#title'] == 'seniors'): ?>
    <div id="Extraordinary-Journeys" class="as-container as-cards__wrapper" aria-label="Other Journeys">
    <h1>Other Extraordinary Journeys</h1>
    <!--<a href="/all-articles" class="viewAll as-button as-button - light">View all Extraordinary Journeys</a>-->
    <div class="content as-cards">
    <?php
print views_embed_view('factoid_blocks', 'seniors', '2019');?>
    </div>
    </div>
<?php endif;?>
<?php endif;?>
    <div id="college-news" class="as-container as-cards__wrapper" aria-label="Other News">
		<h1>Other News</h1>
		<a href="/all-articles" class="viewAll as-button as-button--light">View all news</a>
		<div class="content as-cards">
    <?php print views_embed_view('factoid_blocks', 'article_block_4');?>
		</div>
    </div>



</div>

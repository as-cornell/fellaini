<!-- Research -->
<div class="as-page__block as-page__block--top">
	<div class="as-container">
		<h1 class="pageTitle centered">
			<?php print $title; ?>
		</h1>
		<div class="as-page__content as-page__introduction">
			<?php print render($content['field_text_one']); ?>
		</div>

		<div class="btns btns--horizontal">
			<?php
        print views_embed_view('research', 'research_list');
      ?>
		</div>

		<div class="cards grid grid--three">
			<?php
        print views_embed_view('research', 'research_cards');
      ?>
			<div></div><div></div>
		</div>
	</div>
</div>

  <!-- News Stories -->
  <div class="as-page__block">
    <div id="research-news" class="as-container">
      <h1>News</h1>
      <a href="/news/research" class="viewAll as-button as-button--light">View News</a>
      <div class="cards grid grid--four">
      <?php print views_embed_view('article_blocks', '4_articles_flt'); ?>
      </div>
    </div>
  </div>

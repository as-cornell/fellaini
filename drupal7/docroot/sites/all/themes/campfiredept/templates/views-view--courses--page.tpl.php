<div class="as-page__block as-page__block--top as-page__block--short">
	<div class="as-container">
		<h1 class="pageTitle">Current Courses</h1>
	</div>
</div>

<div id="coursesListing">
	<div class='as-page__block--search-bar'>
		<div class="as-search-bar as-search-bar--pin as-search-bar--small">
			<div class='as-search-bar__form'>
				<div class='as-container'>
					<div class='as-button as-button--search'>
						<div class='as-icon as-icon--search'></div>
					</div>
					<input class='search as-search-bar__input' name='s' placeholder='Search title, course number, professor or keywords...'>
				</div>
			</div>
		</div>
	</div>
	<div class="as-page__block as-page__block--short">
		<div class="as-filters as-filters--expanded filters--courses">
			<div class="as-container">
			<div class="grid">
				<div class="course__sortContainer"><strong>Sort by</strong>: <span href="" class="sort btn  btn--small btn--green btn--sort asc" data-sort="course__title">Title</span><span href="" class="sort btn btn--small btn--green  btn--sort" data-sort="course__number">Number</span></div>
				<div class="course__semestersContainer">
				<strong>Filter by</strong>:
				</div>
			</div>

			</div>

		</div>
	</div>
	<div class="as-page__block">
		<div class="as-container">
			<div class="list courses__list courses__list--full grid">
			<?php if ($rows): ?>
			<?php print $rows;?>
			<?php elseif ($empty): ?>
				<div class="view-empty">
					<?php print $empty;?>
				</div>
			<?php endif;?>
			</div>
		</div>
	</div>
</div>

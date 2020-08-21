<?php if ($header): ?>

   <?php print $header; ?>
<?php endif; ?>


<div class='as-container'>
	<div class='as-majors-minors__control-bar'>
	<div class='as-section__title'>Browse Majors, Minors & Graduate Fields
	</div>
	<div class='as-majors-minors__control as-majors-minors__control--view-switcher'>
		View
		<button class="as-majors-minors__button viewGrid--toggle" aria-label="view majors in grid layout with images">
      <span class='as-icon as-icon--grid'></span>
		</button>
		<button class="as-majors-minors__button viewList--toggle" aria-label="view majors in list">
      <span class='as-icon as-icon--bars show-list-view'></span>
    </button>
    <!--<span class="as-majors-minors__button text-button">A/Z
    </span>-->
	</div>
	<div class='as-majors-minors__control show-filters'>
		Filter
		<button class="as-majors-minors__button as-majors-minors__button--filters" aria-label="show available filters">
        <span class='as-icon as-icon--arrow-down'></span>
    </button>
	</div>
	</div>
</div>
    <div class='as-filter__panel'>
      <div class='as-container'>
        <button class='as-icon as-icon--close'></button>
				<div class='as-filter__section filter-group' data-filter-group="level">
					<div class='as-filter__header'>
						<div class='as-filter__title'>Level</div>
					</div>
					<div class="as-filter__item">
            <input type="radio" name="level" value=".major" id="Major">
            <label for="Major">Major</label>
            <div class='as-majors-minors__tag as-majors-minors__tag--major as-majors-minors__tag--enabled'></div>
            
            </div>
					<div class='as-filter__item'>
            <input type="radio" name="level" value=".minor" id="Minor">
            <label for="Minor">Minor</label>
  					<div class='as-majors-minors__tag as-majors-minors__tag--minor as-majors-minors__tag--enabled'></div>
  					
					</div>
					<div class='as-filter__item'>
            <input type="radio" name="level" value=".graduate" id="Graduate">
            <label for="Graduate">Graduate</label>
  					<div class='as-majors-minors__tag as-majors-minors__tag--graduate as-majors-minors__tag--enabled'></div>
  					
					</div>
          <div class='as-filter__item'>
            <input type="radio" name="level" value=".all" id="All">
            <label for="All">All</label>
          </div>
        </div>
              <div class='as-filter__section filter-group' data-filter-group="discipline">
                <div class='as-filter__header'>
                  <div class='as-filter__title'>Discipline</div>
                </div>
                <div class='as-filter__item'>
                  <input type="radio" name="discipline" value=".social-sciences-stories" id="Social-Sciences">
                  <label for="Social-Sciences">Social Sciences</label>
                </div>
                <div class='as-filter__item'>
                  <input type="radio" name="discipline" value=".humanities---arts-stories" id="Humanities-Arts">
                  <label for="Humanities-Arts">Humanities & Arts</label>
                </div>
                <div class='as-filter__item'>
                  <input type="radio" name="discipline" value=".sciences---mathematics-stories" id="Physical-Natural-Sciences">
                  <label for="Physical-Natural-Sciences">Physical and Natural Science</label>
                </div>
                <div class='as-filter__item'>
                  <input type="radio" name="discipline" value=".interdisciplinary-stories" id="Interdisciplinary">
                  <label for="Interdisciplinary">Interdisciplinary</label>
                </div>
                <div class='as-filter__item'>
                  <input type="radio" name="discipline" value=".foreign-language-stories" id="Foreign-Language">
                  <label for="Foreign-Language">Foreign Language</label>
                </div>
                <div class='as-filter__item'>
                    <input type="radio" name="discipline" value=".all" id="All1">
                    <label for="All1">All</label>
                </div>
              </div>
            </div>
          </div>

          <div class="as-container">
          	<div class='as-majors-minors__legend'>
              <div class='as-majors-minors__legend-item'>
                <div class='as-majors-minors__tag as-majors-minors__tag--major as-majors-minors__tag--enabled'></div>
                = Major
              </div>
              <div class='as-majors-minors__legend-item'>
                <div class='as-majors-minors__tag as-majors-minors__tag--minor as-majors-minors__tag--enabled'></div>
                = Minor
              </div>
              <div class='as-majors-minors__legend-item'>
                <div class='as-majors-minors__tag as-majors-minors__tag--graduate as-majors-minors__tag--enabled'></div>
                = Graduate
              </div>
            </div>
          </div>



 <?php if ($rows): ?>
    <div class="view-content as-container as-cards as-cards__wrapper viewGrid">
      <?php print $rows; ?>
    </div>
  <?php elseif ($empty): ?>
    <div class="view-empty">
      <?php print $empty; ?>
    </div>
  <?php endif; ?>
  <?php if ($footer): ?>
      <div id = "footer">
        <?php print $footer; ?>
      </div>
  <?php endif; ?>
<div class="as-page__block">
  <div class="as-container viewList none">
    <h3>Full List of Majors and Minors</h3>

    <div class=".alpha-list as-columns--three">
      <?php print views_embed_view('majors_minors_and_grad_fields', 'block_1'); ?>
    </div>
  </div>
</div>

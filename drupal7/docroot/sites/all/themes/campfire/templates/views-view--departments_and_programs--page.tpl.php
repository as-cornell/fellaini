<!-- d/p filters -->

<div class='as-container'>
  <div class='as-majors-minors__control-bar'>
  <div class='as-section__title'>Browse Departments &amp; Programs
  </div>
  <div class='as-majors-minors__control as-majors-minors__control--view-switcher'>
      View
      <span class="as-majors-minors__button viewGrid--toggle"><span class='as-icon as-icon--grid'></span>
      </span>
      <span class="as-majors-minors__button viewList--toggle"><span class='as-icon as-icon--bars show-list-view'></span>
      </span>
  <!--<span class="as-majors-minors__button text-button">A/Z
  </span>-->
  </div>
  <div class='as-majors-minors__control show-filters'>
      Filter
      <button class="as-majors-minors__button as-majors-minors__button--filters"><span class='as-icon as-icon--arrow-down'></span>
</button>
  </div>
  </div>
</div>
    <div class='as-filter__panel'>
      <div class='as-container'>
        <button class='as-icon as-icon--close' data-bind='click: toggleFilters'></button>
        <div class='as-filter__section filter-group' data-filter-group="level">
          <div class='as-filter__header'>
            <div class='as-filter__title'>Department or Program</div>
          </div>
          <div class="as-filter__item">
         
            <input type="radio" name="type" value=".department" id="Department">
            <label for="Department">Department</label>

          </div>
          <div class='as-filter__item'>
            
              <input type="radio" name="type" value=".program" id="Program">
              <label for="Program">Program</label>

          </div>
          <div class='as-filter__item'>
           
              <input type="radio" name="type" value=".all" id="All">
              <label for="All">All</label>
 
          </div>
        </div>
              <div class='as-filter__section filter-group' data-filter-group="discipline">
                <div class='as-filter__header'>
                  <div class='as-filter__title'>Discipline</div>
                  <span class='as-icon'></span>
                </div>
                <div class='as-filter__item'>
               
                  <input type="radio" name="discipline" value=".social-sciences" id="Social-Sciences">
                  <label for="Social-Sciences">Social Sciences</label>
                  
                </div>
                <div class='as-filter__item'>
                  
                  <input type="radio" name="discipline" value=".humanities---arts" id="Humanities-Arts">
                  <label for="Humanities-Arts">Humanities & Arts</label>
               
                </div>
                <div class='as-filter__item'>
                 
                  <input type="radio" name="discipline" value=".sciences---mathematics" id="Physical-Natural-Sciences">
                  <label for="Physical-Natural-Sciences">Sciences & Math</label>
                  
                </div>
                <div class='as-filter__item'>
                  
                  <input type="radio" name="discipline" value=".interdisciplinary" id="Interdisciplinary">
                  <label for="Interdisciplinary">Interdisciplinary</label>
                  
                </div>
                <div class='as-filter__item'>
                  
                  <input type="radio" name="discipline" value=".foreign-language" id="Foreign-Language">
                  <label for="Foreign-Language">Foreign Language</label>
                
                </div>
                <div class='as-filter__item'>
                 
                    <input type="radio" name="discipline" value=".all" id="All1">
                    <label for="All1">Show all</label>
                
                </div>
              </div>
            </div>
          </div>

          <div class="as-container">
            <div class='as-majors-minors__legend'>

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
    <h3>Full List of Departments and Programs</h3>

    <div class=".alpha-list as-columns--three">
      <?php print views_embed_view('departments_and_programs', 'block_1'); ?>
    </div>
  </div>
</div>

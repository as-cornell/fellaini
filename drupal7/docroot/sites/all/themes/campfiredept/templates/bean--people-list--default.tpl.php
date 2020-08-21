<!-- people list -->
    <div class="as-page__block as-page__block--top">
        <div class="as-container">
            <h1 class="pageTitle">
                <?php print $title; ?>
            </h1>
            <?php if (!empty($content['field_text_one'])): ?>
                <?php print render($content['field_text_one']); ?>
            <?php endif; ?>
            <div class='filters__control-bar'>
                <button class='filters__control green toggleFilters viewToggle--filters' aria-lable="toggle label panel">
                    Show Filters
                    <svg viewBox="0 0 20 20" class="icon--arrow ">
                      <use xlink:href="#shape-icon-down-arrow"></use>
                    </svg>
                </button>

                <div class='filters__control toggleView'>
                    Change View
                    <button class="viewToggle--grid button" aria-label="show list in a grid of iamges"> 
                        <svg viewBox="0 0 20 20" class="icon--grid">
                        <use xlink:href="#shape-icon-grid-view"></use>
                        </svg>
                    </button>
                    <button class="viewToggle--list button" aria-lable="show list in text format">
                        <svg viewBox="0 0 20 20" class="icon--list ">
                        <use xlink:href="#shape-icon-list-view"></use>
                        </svg>
                    </button>
                    
                    
                </div>
            </div>
        </div>


      <div class='as-filters'>
      <div class='as-container'>
        <button class='as-icon as-icon--close' aria-label="close filter panel"></button>
        <div class="filters">
        <?php
            $cats = array('subdisciplines','regions','sliceanddice');
            foreach ($cats as $machine_name) {
                $vocabulary = taxonomy_vocabulary_machine_name_load($machine_name);
                $tree = taxonomy_get_tree($vocabulary->vid);
                if ($tree) {
                    $blockdept = block_load('as_taxonomy_jellybeans_dept_cat_flt', $machine_name);
                    _block_render_blocks(array($blockdept));
                }
            }
        ?>
        </div>


      </div>
    </div>
        <div class="as-container">
            <div id="facultyListing">
                <div class="cards grid grid--four list">
                    <?php print render($content['field_cards_list']); ?>
                </div>
            </div>

        </div>
    </div>

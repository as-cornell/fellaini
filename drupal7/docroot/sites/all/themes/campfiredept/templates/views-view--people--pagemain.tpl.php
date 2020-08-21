<?php // set title to the view title ?>

<?php if ( empty($title) ): ?>
<?php $title = $view->get_title(); ?>
<?php endif; ?>


<div class="as-page__block as-page__block--top">
  <div class="as-container">
    <h1 class="pageTitle"><?php print (variable_get('site_name', '')); ?><?php if ($title): ?> <?php print t($title)?><?php endif; ?></h1>

    <div class='as-filters__control-bar'>
    <div class='as-filters__control as-filters__control--filter'>
    Show Filters
    <span class="as-filters__button as-filters__button--filters"><i class='as-icon as-icon--arrow-down'></i>
    </span>
    </div>

    <div class='as-filters__control as-filters__control--view-switcher'>

    <span class="as-filters__button viewToggle--grid"><i class='as-icon as-icon--grid'></i>
    </span>

    <span class="as-filters__button text-button viewToggle--list">A/Z
    </span>
    </div>

    </div>
  </div>

  <div class='as-filters'>
  <div class='as-container'>
    <i class='as-icon as-icon--close'></i>

        <?php
      // add machine names of additional taxonomies below.  only populated ones will display
      drupal_flush_all_caches();
      $cats = array(subdisciplines,regions,sliceanddice);
      foreach ($cats as $machine_name) {
        $vocabulary = taxonomy_vocabulary_machine_name_load($machine_name);
        $tree = taxonomy_get_tree($vocabulary->vid);
        if ($tree) {
            $blockdept = block_load('as_taxonomy_jellybeans_dept_cat_flt', $machine_name);
            _block_render_blocks(array($blockdept));
            //$renderarrayblockdept = _block_get_renderable_array($renderblockdept);
            //$outputdept = drupal_render($renderarrayblockdept);
            //print $outputdept;
            //print $blockdept;

            //$blockdeptoverview = block_load('as_people_dept','overview');
            //_block_render_blocks(array($blockdeptoverview));
            }
          }
         ?>

  </div>
</div>
  <div class="as-container">
    <div id="facultyListing">

      <div class="cards grid grid--four list">
        <?php print $rows; ?>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </div>
  <div class="as-container">
    <div id="viewpager">
      <div>
        <?php
          if ($pager):
          print $pager;
          endif;
        ?>
      </div>
    </div>
  </div>
</div>

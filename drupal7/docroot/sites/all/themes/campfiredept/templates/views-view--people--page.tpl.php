<?php // set title to the view title ?>

<?php if (empty($title)): ?>
<?php $title = $view->get_title();?>
<?php endif;?>


<div class="as-page__block as-page__block--top">
  <div class="as-container">
    <h1 class="pageTitle"><?php print(variable_get('site_name', ''));?><?php if ($title): ?> <?php print t($title)?><?php endif;?></h1>

    <div class='filters__control-bar'>
        <div class='filters__control green toggleFilters'>
            Show Filters
            <svg viewBox="0 0 20 20" class="icon--arrow viewToggle--filters">
              <use xlink:href="#shape-icon-down-arrow"></use>
            </svg>
        </div>

        <div class='filters__control gray toggleView'>
            Change View
            <svg viewBox="0 0 20 20" class="icon--grid viewToggle--grid">
              <use xlink:href="#shape-icon-grid-view"></use>
            </svg>
            <svg viewBox="0 0 20 20" class="icon--list viewToggle--list">
              <use xlink:href="#shape-icon-list-view"></use>
            </svg>
        </div>
    </div>
  </div>

  <div class='as-filters'>
  <div class='as-container'>
    <span class='as-icon as-icon--close'></span>
    <div class="filters">
        <?php
$cats = array(subdisciplines, regions, sliceanddice);
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
        <?php print $rows;?>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </div>
</div>

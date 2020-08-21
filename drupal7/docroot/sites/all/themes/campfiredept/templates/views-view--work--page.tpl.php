<div class="as-page__block as-page__block--top">
  <div class="as-container">
    <?php $title = $view->get_title(); ?>
    <h1 class="pageTitle"><?php print (variable_get('site_name', ''))."&nbsp;".$title; ?></h1>
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
</div>

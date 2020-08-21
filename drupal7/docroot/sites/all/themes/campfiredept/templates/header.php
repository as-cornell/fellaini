<div class='as-info-bar'>
  <div class='as-container'>
    <a href="http://as.cornell.edu" class="floatLeft">College of Arts &amp; Sciences</a>
    <!-- HIDE for NOW-->
    <span class="floatRight as-search__toggle">
      <i class='as-icon as-icon--search'></i>
      Search
    </span>
    
  </div>
</div>


<header id="header" class='as-header'>
  <div class='as-container'>
    <div class='as-header__inner'>
      <div class='as-header__links'>
        <span class="as-header__link as-header__link--search as-search__toggle">
          <i class='as-icon as-icon--search'></i>
        </span>
        <span class="as-header__link as-header__link--menu">
          <i class='as-icon as-mainNav-icon as-icon--bars'></i>
        </span>
      </div>
      <!-- logo -->
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo" class="as-header__brand">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo"/>
        </a>
      <?php endif; ?>
    </div><div class='as-container--nav'>
    <nav class="as-nav" id="as-main-nav">
       <?php print drupal_render(menu_tree_output(menu_tree_all_data('main-menu'))); ?>
      
     </nav>
   </div>
  </div>
  <div class='as-mobile-title'>
    <a href="/"><span class="departmentName">Anthropology</span><!--<img src="/sites/all/themes/campfire/images/arts-and-sciences-mobile.png" />--></a>
  </div>

</header>


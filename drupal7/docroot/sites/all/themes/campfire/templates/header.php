
<!-- <div class='as-info-bar'>
  <div class='as-container as-grid as-grid--one-two'>
    <div style="display: flex;align-items: center; justify-content: space-around;">
    <div class="as-icon as-icon--search">
    </div>
      <form action='/search' class='small' method='get' accept-charset="UTF-8">

          <label for="search__input">Search Arts and Sciences</label>
          <span>
              <input type="text" class='' name='s' placeholder='Search interests or keywords' id="search__input">
              <input type="submit" name="Search" value="Search">
          </span>

      </form>
  </div>
  <div>
    <div class='as-info-bar__inner' aria-hidden="true">
      <span class='as-info-bar__label'>Info for:</span>
      <a class="as-info-bar__link" href="/for-prospective-students">Prospective Students</a>
      <a class="as-info-bar__link" href="/for-current-students">Current Students</a>
      <a class="as-info-bar__link" href="/parents-page-current-students">Parents</a>
      <a class="as-info-bar__link" href="/for-faculty">Faculty</a>
      <a class="as-info-bar__link" href="/for-staff">Staff</a>
      <a class="as-info-bar__link" href="/alumni">Alumni</a>
      <a href="/media" class="as-info-bar__link">Media</a>
  </div>
</div>
  </div>
</div> -->

<header id="header" class='as-header'>
  <div class='as-container'>
    <div class='as-header__inner'>
      <div class='as-header__links'>
        <span class="as-header__link as-header__link--search as-search__toggle">
          <span class='as-icon as-icon--search'></span>
        Search
        </span>

        <span class="as-header__link as-header__link--menu">
          <span class='as-icon as-mainNav-icon as-icon--bars'></span>

        </span>
      </div>
      <!-- logo -->
      <div class="header__logo--small" aria-hidden="true">
        <a href="http://cornell.edu"></a>
      </div>
      <div class="header__logo--large">
        <a href="http://cornell.edu" class="logo__cornell"><img src="https://as.cornell.edu/sites/as/files/cu-insignia.png" alt="Cornell University"></a>
        <?php if ($logo): ?>
          <a href="<?php print $front_page;?>" title="<?php print t('Home');?>" rel="home" id="logo">
            <img src="<?php print $logo;?>" alt="The College of Arts & Sciences">
          </a>
        <?php endif;?>
      </div>
    </div>
  </div>
  <div class='as-mobile-title'>
  <a href="/"><img src="https://as.cornell.edu/sites/all/themes/campfire/images/arts-and-sciences.png" alt="College of Arts and Sciences"/></a>
  </div>
</header>

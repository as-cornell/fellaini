<?php if ($show_headerfooter): ?>


<header class="as-header" aria-label="Audience navigation, logo and main navigation">
  <?php include_once 'svg-defs.svg';?>
  <!-- skip to main nav/content -->
  <div id="skip">
      <a href="#as-main-nav">Jump to main navigation</a>
    <a href="#mainContent">Jump to main content</a>
  </div>

  <!-- black bar at top -->
  <div class='as-info-bar'>
    <!-- <div class='as-container as-grid as-grid--one-two'> -->
      <div class="search--header">
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
      <!-- info for links -->
      <!-- <div> -->
      <div class='as-info-bar__inner' aria-hidden="true">
        <span class='as-info-bar__label'>Info for:</span>
        <a class="as-info-bar__link" href="/for-current-students">Current Students</a>
        <a class="as-info-bar__link" href="/parents-page-current-students">Parents</a>
        <a class="as-info-bar__link" href="/for-faculty">Faculty</a>
        <a class="as-info-bar__link" href="/for-staff">Staff</a>
        <a class="as-info-bar__link" href="/alumni">Alumni</a>
        <a href="/media" class="as-info-bar__link">Media</a>
      </div>
      <!-- </div> -->
    <!-- </div> -->
  </div>

  <!-- mobile links -->
  <div class='as-header__links'>
    <button class="as-header__link as-header__link--search as-search__toggle" aria-label="Mobile search trigger" aria-expanded="false">
    <span class='as-icon as-icon--search'></span>
    </button>
    <button class="as-header__link as-header__link--menu" id="toggle-menu" aria-label="Toggle main navigation" aria-expanded="false">
    <span class='as-icon as-mainNav-icon as-icon--bars'></span>
    </button>
  </div>

  <!-- Logos -->
  <div class="as-container as-container--logo">
    <div class="logo">
        <?php
        $brandinglogoblock = module_invoke('as_logos', 'block_view', 'branding');
        print render($brandinglogoblock['content']);
        ?>
        <a href="<?php print $front_page;?>" title="<?php print t('Home');?>" rel="home" id="logo" class="as-header__brand">
          <img src="<?php print $logo;?>" alt="<?php print(variable_get('site_name', ''));?>"/>
        </a>
      </div>
  </div>
  

  <!-- main nav with second info for -->
  <div class='as-container as-container--nav'>
    <nav class="as-nav" id="as-main-nav" aria-label="main navigation">
       <?php
        $mainmenu = menu_tree_output(menu_tree_all_data('main-menu'));
        print drupal_render($mainmenu);?>
    </nav>
  </div>

  <!-- mobile title -->
  <div class='as-mobile-title'>
  <a href="/"><img src="https://as.cornell.edu/sites/all/themes/campfire/images/arts-and-sciences.png" alt="College of Arts and Sciences"/></a>
  </div>
</header>

  
<!--
*** MAIN MENU ***
-->
  <div class="tabs--drupal as-container">
    <?php print render($tabs);?>
  </div>

<!-- main in -->
<main class="as-main--container" id="mainContent" aria-label="Main layout wrapper for article: <?php print $title; ?>">
  <!--
  *** HELP ***
  -->
  <?php if ($page['help']): ?>
    <div class="as-container">
      <?php print render($page['help'])?>
    </div>
  <?php endif;?>
    <!--
  *** CONTENT TOP ***
  -->
  <?php if ($page['content_top']): ?>
    <div class="as-container">
      <?php print render($page['content_top'])?>
    </div>
  <?php endif;?>
  <?php if (!empty($messages)): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages;?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif;?>
  <!--
  ***  MAIN CONTENT  ***
  -->
  <?php
//print page title on only views pages
$views_page = views_get_page_view();
if ((is_object($views_page)) and (!empty($title))): ?>
    <div class="as-container">
      <h1 class="pageTitle pageTitle--first">
        <?php print $title;?>
      </h1>
    </div>
  <?php endif;?>
<?php endif;?>

  <!-- as-container in -->
    <?php print render($page['content'])?>
  <!-- as-container out -->

  <?php if ($show_headerfooter): ?>
  <!--
  *** SOCIAL MEDIA ***
  -->
  <?php if ($page['social_media']): ?>
    <div class="as-page__block">
      <div class="as-container">
        <?php print render($page['social_media'])?>
      </div>
    </div>
  <?php endif;?>
  <!--
  *** CONTENT BOTTOM ***
  -->

  <?php if ($page['content_bottom']): ?>
      <?php print render($page['content_bottom'])?>
  <?php endif;?>

  <div class="region region-content-bottom">
    <div class="as-three-up as-three-up--quick-actions" id="as-quick-actions">
      <div class="as-container">
        <a href="/how-apply" class="as-three-up__item">
          <div class="as-quick-action__link as-quick-action__link--become-student"><div class="as-icon as-icon--apply"></div>
          <div class="as-quick-action__copy">
            <div class="as-quick-action__title">Become an A&amp;S Student</div>
            <div class="as-quick-action__subtitle">Apply to A&amp;S</div>
          </div>
          </div>
        </a>

        <a href="http://www.cornell.edu/visit/" class="as-three-up__item">
          <div class="as-quick-action__link as-quick-action__link--visit-campus"><div class="as-icon as-icon--visit-campus"></div>
          <div class="as-quick-action__copy">
            <div class="as-quick-action__title">See the Campus</div>
            <div class="as-quick-action__subtitle">Visit A&amp;S</div>
          </div>
          </div>
        </a>

        <a href="https://securelb.imodules.com/s/1717/alumni/index.aspx?sid=1717&gid=2&pgid=403&cid=1031&pdid=16" class="as-three-up__item">
          <div class="as-quick-action__link as-quick-action__link--make-donation"><div class="as-icon as-icon--make-donation"></div>
          <div class="as-quick-action__copy">
            <div class="as-quick-action__title">Support the College</div>
            <div class="as-quick-action__subtitle">Give to A&amp;S</div>
          </div>
          </div>
        </a>
      </div>
    </div>
  </div>
<!-- main out -->
</main>

<!--
***  FOOTER  ***
-->
  <footer class='as-footer' aria-label="Other links and contact information">
    <div class="as-container">
      <div class="as-footer__section">
          <div class="as-footer__insignia">
              <a href="http://cornell.edu" title="Cornell University" alt="Cornell University"><img src="/sites/all/themes/campfire/images/insignia-dark.svg" alt="Cornell University Insignia"/></a>
          </div>
        <div class='as-footer__nav' role="navigation" aria-label="footer-navigation">
          <?php
$footermenu = menu_tree_output(menu_tree_all_data('menu-footer-menu'));
print drupal_render($footermenu);
?>
      </div>
      </div>
    <?php include_once "footer.php";?>
    </div>
  </footer>
  <?php if ($page['footer']): ?>
    <?php print render($page['footer'])?>
  <?php endif;?>
  <div class='as-overlay'></div>

</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
<?php endif;?>

<?php if ($show_headerfooter): ?>




<header id="header" class='as-header'>
  <?php include_once 'svg-defs.svg';?>

<!--
***  SKIP NAV  ***
-->
<div id="skip">
    <a href="#as-main-nav">Jump to main navigation</a>
  <a href="#mainContent">Jump to main content</a>
</div>

<div class='as-info-bar as-container'>
  <div class='as-grid as-grid--two-one as-grid--vert-ctr'>
    <div>
      <?php
      $headerlogoblock = module_invoke('as_logos', 'block_view', 'header');
      print render($headerlogoblock['content']);
      ?>
    </div>
    <?php if (module_exists('search')):?>
      <!-- if drupal search -->
      <div class="floatRight">
        <?php
        $searchblock = module_invoke('search', 'block_view', 'search');
        print render($searchblock);
        ?>
      </div>
    <?php else:?>
    <!-- if google search -->
      <div class="floatRight">
        <?php if (module_exists('as_search')): ?>
          <form action='/search' class='search--header' method='get' id="cu-search-form" accept-charset="UTF-8">
            <label for="as-search-bar__input" class="visually-hidden">Site Search</label>
            <input class='as-search-bar__input' name='s' placeholder='Search interests, or keywords...' id="as-search-bar__input">
            <button><span class='as-icon as-icon--search'></span>Search</button>
             <div class='as-icon as-icon--close as-search__toggle'></div>
          </form>
          <!-- <div class='as-button as-button--close'>
          <div class='as-icon as-icon--close as-search__toggle'></div>
          </div> -->
        <?php endif;?>
      </div>
    <?php endif;?>
  </div>
</div>

  <div class='as-container'>
    <div class='as-header__inner'>
      <div class='as-header__links'>
        <button class="as-header__link as-header__link--search as-search__toggle">
          <span class='as-icon as-icon--search'></span>
        </button>
        <button class="as-header__link as-header__link--menu" id="toggle-menu">
          <span class='as-icon as-mainNav-icon as-icon--bars'></span>
        </button>
      </div>
      <!-- logo -->
      <div class="logo">
        <?php
        $brandinglogoblock = module_invoke('as_logos', 'block_view', 'branding');
        print render($brandinglogoblock['content']);
        ?>
        <a href="<?php print $front_page;?>" title="<?php print t('Home');?>" rel="home" id="logo" class="as-header__brand">
          <img src="<?php print $logo;?>" alt="<?php print(variable_get('site_name', ''));?>"/>
        </a>
      </div>
    </div><div class='as-container--nav'>
    <nav class="as-nav" id="as-main-nav" arial-label="main navigation">
       <?php
$menu = menu_tree_all_data('main-menu');
$output = menu_tree_output($menu);
print drupal_render($output);?>
     </nav>
   </div>
  </div>
  <div class='as-mobile-title'>
    <a href="/"><span class="departmentName"><?php print(variable_get('site_name', ''));?></span></a>
  </div>

</header>
<!--
*** MAIN MENU ***
-->
   <div class="tabs--drupal as-container">
    <?php print render($tabs);?>
  </div>

<!-- main in -->
<main class="as-main--container" id="mainContent" aria-label="<?php print $title; ?>">
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
  <?php if (!empty($page['content_top'])): ?>
    <div class="as-container">
      <?php print render($page['content_top'])?>
    </div>
  <?php endif;?>

  <?php if (!empty($messages)): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages;?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif;?>
<?php endif;?>
<!--
***  MAIN CONTENT  ***
-->

  <!-- as-container in -->
    <?php print render($page['content'])?>
  <!-- as-container out -->
<?php if ($show_headerfooter): ?>
  <!--
  *** SOCIAL MEDIA ***
  -->
  <?php if (!empty($page['social_media'])): ?>
    <div class="as-page__block">
      <div class="as-container">
        <?php print render($page['social_media'])?>
      </div>
    </div>
  <?php endif;?>
  <!--
  *** CONTENT BOTTOM ***
  cta links block goes here
  -->

  <?php if (!empty($page['content_bottom'])): ?>
      <?php print render($page['content_bottom'])?>
  <?php endif;?>


    </div>

<!-- main out -->
</main>

<!--
***  FOOTER  ***
-->
<footer class='as-footer'>
  <div class="as-container">
    <div class="as-footer__section grid grid--one-two  as-grid--vert-ctr">

      <?php
      $footerlogoblock = module_invoke('as_logos', 'block_view', 'footer');
      print render($footerlogoblock['content']);
      ?>
      <div>
      <div class='as-footer__nav'>
        <?php
          $menu = menu_tree_all_data('menu-footer-menu');
          $output = menu_tree_output($menu);
          print drupal_render($output);?>
      </div>
      </div>

    </div>
    <?php if (!empty($page['footer'])): ?>
      <?php print render($page['footer'])?>
    <?php endif;?>
    <p class="copyright">&copy;<?php echo date('Y'); ?> Cornell University</p>
    <p class="wa">
If you have a disability and are having trouble accessing information on this website or need materials in an alternate format <br />contact <a href="mailto:web-accessibility@cornell.edu">web-accessibility@cornell.edu</a> for assistance.
</p>
  </div>
</footer>

<div class='as-overlay'></div>

</div>
<?php endif;?>

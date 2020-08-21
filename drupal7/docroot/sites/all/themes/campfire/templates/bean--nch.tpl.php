
<div class="<?php print $classes;?> clearfix"<?php print $attributes;?>
 <!-- title -->
   <div class="as-page__block text-center">
    <div class="as-container">
      <h1 class="pageTitle pageTitle--short centered">
      <?php print $title;?>
      </h1>
    </div>
  </div>

  <!-- pano slider -->
  <div class="slider slider--pano"  id="carousel" aria-live="polite">
    <ul class="slides">
    <?php print render($content['field_article']);?>
    </ul>
   <fieldset class="navigation" aria-label="carousel buttons" aria-controls="carousel">
      <button class="prev" aria-label="previous">Prev<span class="as-icon as-icon--arrow-down"></span></button>
      <button class="next" aria-label="next"><span class="as-icon as-icon--arrow-down"></span>Next</button>
   </fieldset>
  </div>

  <div class="as-page__block text-center" id="overview">
    <div class="as-container">
        <!-- Description -->
      <div class="as-page__introduction">
        <p>The humanities embrace the complexity of a rapidly changing world and inspire us to seek to understand it. The humanities ask difficult questions. They call our attention to our past and to the experience of people, cultures, and ways of thinking that are different from our own. They invite us to imagine, create and perform. They give us tools for analysis and interpretation, and the power to express what we see and feel. The humanities offer us pathways to deeper understanding and, with it, the possibility of richer, more meaningful and productive lives.</p>

        <p>The humanities at Cornell live at the heart of the liberal arts mission of the College of Arts &amp; Sciences and are central to the university’s research and educational aspirations.</p>

        <!--<?php print render($content['field_description']);?>-->

      </div>
    </div>
  </div>

<div class="divider divider--horizontal" id="wmuh"></div>

<div class="as-page__block as-page__block--gray">
    <div class="as-container as-grid podcast">
        <div>
            <img src="/sites/all/themes/campfire/images/what-makes-us-human.png" alt="What Makes us Human" style="margin-bottom:3rem; margin-left: -2rem;">
            <h2>Season Five:  What Do We Know About Inequality?</h2>
            <p>The latest thinking from across the disciplines about inequality.</p>

            <p class="as-columns--two">
            <a href="https://www.podbean.com/podcast-detail/xfx9e-5c49e/What-Makes-us-Human-Podcast">PodBean</a><br />
            <a href="https://itunes.apple.com/us/podcast/what-makes-us-human/id1290247786#">iTunes</a><br />
            <a href="https://soundcloud.com/cornellcas">SoundCloud</a><br />
            <a href="https://play.google.com/music/listen?u=0#/ps/Iwqwoxcer5wwhwvlp6ijhnwx7rq">Google Play Music</a><br />
            <a href="https://tunein.com/podcasts/Arts--Culture-Podcasts/What-Makes-us-Human-p1159252/">TuneIn</a><br />
            <a href="https://www.stitcher.com/podcast/what-makes-us-human">Stitcher</a><br />
            <a href="https://www.blubrry.com/what_makes_us_human/">Blubrry</a></p>

        </div>

        <div>

            <h2>This Week</h2>
            <?php print render($content['field_current_wmuh']);?>

        </div>


    </div>
    <div class="as-container">
        <h2>Season Five</h2>
    </div>
    <?php print views_embed_view('podcasts', 'block_6');?>


    <div class="as-container">
        <h2>Season Four:  What Does Water Mean for Us Humans?</h2>
        <p>The latest thinking from across the disciplines about the relationship between humans and water.</p>
    </div>
    <?php print views_embed_view('podcasts', 'block_5');?>

    <div class="as-container">
      <h2>Season Three: What Do We Know About Love?</h2>
      <p>The latest thinking from across the disciplines about the relationship between humans and love.</p>
      <?php print views_embed_view('podcasts', 'block_3');?>
    </div>


    <div class="as-container">
        <h2>Season Two: Where Is the Human in Climate Change?</h2>
        <p>The latest thinking from across the disciplines about the relationship between humans and the environment.</p>

    </div>

        <?php print views_embed_view('podcasts', 'block_2');?>


    <div class="as-container">
        <h2>Season One: What Makes us Human?</h2>
        <p>
            The newest conclusions from across Cornell University about what it means to be human in the twenty-first century.
        </p>
    </div>
    <?php print views_embed_view('podcasts', 'block_1');?>

</div>

 <!-- news -->

  <div class="as-page__block" id="nchNews">
    <div id="college-news" class="as-container as-cards__wrapper">
      <h1 class="centered">Arts &amp; Humanities News</h1>
      <a href="/all-articles" class="viewAll as-button as-body-button--light">View News</a>
      <div class="content as-cards">
        <?php print views_embed_view('factoid_blocks', 'arts_humanities_4_articles');?>
      </div>
    </div>
  </div>






<div class="divider divider--horizontal"></div>

<!-- transformative humanities -->
<div class="as-page__block" id="transformativeHumanities">
  <!--
  <div class="as-container">
    <?php print render($content['field_primary_body']);?>
  </div>
-->
  <div id="nch-themes" class="as-container as-cards__wrapper">
    <h1 class="centered">Transformative Humanities</h1>
    <div class="as-grid as-grid--four" style="margin: 4rem auto">
<div><img alt="" src="http://as.cornell.edu/sites/as/files/Babbit.jpg" /></div>
<div><img alt="" src="http://as.cornell.edu/sites/as/files/bach_matt.jpg" /></div>
<div><img alt="" src="http://as.cornell.edu/sites/as/files/bradstreet.jpg" /></div>
<div><img alt="" src="http://as.cornell.edu/sites/as/files/sound-of-music.jpg" /></div>
<div><img alt="" src="http://as.cornell.edu/sites/as/files/to-kill-a-mockingbird.jpg" /></div>
<div><img alt="" src="http://as.cornell.edu/sites/as/files/Debussy_Faun.jpg" /></div>
<div><img alt="" src="http://as.cornell.edu/sites/as/files/teatrotaller.jpg" /></div>
<div><img alt="" src="http://as.cornell.edu/sites/as/files/AgeeEvans.jpg" /></div>
</div>
    <div class="as-page__introduction" style="padding-bottom: 2rem;"><p class="">The Transformative Humanities project asks Cornell faculty to talk about their own life-changing encounters with great works in the arts and humanities and how these works have transformed their scholarship and their lives. Here are their contributions.</p></div>

    <div class="content as-cards">
      <?php print views_embed_view('factoid_blocks', 'transformative_humanities_8');?>
    </div>
    <p class="centered"><a href="/all-articles/transformative-humanities" class="as-button as-body-button--light">View Submissions</a></p>

  </div>
</div>



<div class="divider divider--horizontal"></div>
  <!-- Themes -->

  <div class="as-page__block">
    <div id="Big Ideas" class="as-container as-cards__wrapper">
      <h1 class="centered">Big Ideas in the Humanities</h1>
      <div class="as-page__introduction">
        <p>The Big Ideas project brings together scholars from various disciplines to discuss emerging themes in the humanities. In the spring of 2016, during the New Century for Humanities celebrations leading up to the Klarman Hall Dedication, the College organized a series of panel discussions to address some of these common themes. The following features expand on these discussions to show how faculty from across the college are exploring these subjects.</p>
      </div>

       <!--<a href="/all-articles/Big Ideas Project" class="viewAll as-button as-body-button--light">View Big Ideas</a>-->
      <div class="content as-cards">
        <?php print views_embed_view('factoid_blocks', 'nchthemes');?>
      </div>
    </div>
  </div>




<div class="divider divider--horizontal"></div>

<!-- new century for the humanities -->
<div class="as-page__block">
  <div class="as-container">
    <div class="as-page__introduction">
      <h1 class="centered">New Century for the Humanities</h1>
      <p>In the spring of 2016, the College of Arts & Sciences partnered with arts & humanities faculty and students to sponsor a series of events celebrating a "New Century for the Humanities" leading up to the dedication of Klarman Hall, the first humanities building to open on central campus in more than 100 years.</p>
    </div>
    <div class="as-grid as-grid--three" style="margin: 4rem auto">
      <div><img alt='"Indecent," by Paula Vogel' src="http://as.cornell.edu/sites/as/files/styles/scale_580-300/public/vogel-580-300.jpg?itok=FeFdzfER" /></div>
      <div><img alt="Eumelio, 1606 Opera" src="http://as.cornell.edu/sites/as/files/styles/scale_580-300/public/opera-580-300.jpg?itok=frgsKfDo" /></div>
      <div><img alt="" src="http://as.cornell.edu/sites/as/files/styles/scale_580-300/public/Between-the-World-and-Me-580-300.jpg?itok=H6ad5hEM" /></div>
      <div><img alt="Migration" src="http://as.cornell.edu/sites/as/files/styles/scale_580-300/public/migration_nchweb.jpg?itok=haMxr16x" /></div>
      <div><img alt="Klarman Hall Dedication" src="http://as.cornell.edu/sites/as/files/styles/scale_580-300/public/Klarman3_0.jpg?itok=C7Vneq6-" /></div>
      <div><img alt="The Department of English, Creative Writing Program Presents" src="http://as.cornell.edu/sites/as/files/styles/scale_580-300/public/InaWord.jpg?itok=PKDgTbej" /></div>

    </div>
    <p>Those events included two major series of talks: <a href="http://as.cornell.edu/news/faculty-reveal-life-changing-creative-works">Transformative Humanities</a> Friday lunches, where faculty shared essays about the creative works that have changed their lives and the <a href="http://as.cornell.edu/news/humanities-faculty-tackle-timely-issues-%E2%80%98big-ideas%E2%80%99-panels">Big Ideas in the Humanities panels</a>, which enabled faculty from diverse disciplines to gather to talk about important topics facing the world today. The celebration also included the North American premiere of <a href="http://as.cornell.edu/news/rarely-staged-1606-opera-eumelio-plays-march-19-20">"Eumelio,"</a> a rarely-staged 1606 baroque opera; a visit from Pulitzer-Prize winning playwright, <a href="http://as.cornell.edu/news/playwright-vogel-returns-campus-phd">Paula Vogel Ph.D. '16</a>, and a staged reading of her new play; a <a href="http://as.cornell.edu/news/alice-fulton-reveals-poetic-inspiratons">series of events</a> from the English Department and Creative Writing Program; and <a href="http://as.cornell.edu/news/campus-discuss-between-world-and-me-april-28">campus-wide small-group discussions</a> of Ta-Nehisi Coates' book "Between the World and Me."</p>

    <p>As part of the New Century for the Humanities celebrations, we also recognized the <a href="http://as.cornell.edu/news/society-humanities-celebrates-50th-anniversary">50th anniversary of the Society for the Humanities</a>, the <a href="http://as.cornell.edu/news/medieval-studies-program-celebrates-50th-anniversary">50th anniversary of the Medieval Studies Program</a> and the 70th anniversary of the Department of Asian Studies.</p>
  </div>
</div>

<div class="as-page--block">
    <div class="as-container">
        <?php print render($content['field_select_single_quote']);?>
    </div>
</div>




</div>

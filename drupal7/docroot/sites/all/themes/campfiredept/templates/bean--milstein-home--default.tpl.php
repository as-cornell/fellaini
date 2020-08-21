<!-- Milstein Program -->

<div class="as-img">
  <div class="as-hero">
    <?php print render($content['field_pano_image']);?>
    <div class="container">
      <div class="as-hero__copy">
        <?php print render($content['field_hero']);?>
      </div>
    </div>
  </div>
</div>

<div class="as-page__block">
    <div class="container larger">
        <?php print render($content['field_text_one']);?>
    </div>
    <div class="container flex-7-4">
        <div class="">
            <?php print render($content['field_secondary_body']);?>
            <?php print render($content['field_eventsblk']);?>

        </div>
        <div>

            <div class="card card--text">
                <h2>Current High School Students</h2>
                <p>High school applicants interested in being considered for the Milstein Program should indicate their interest by checking the Milstein Program interest box on the Common App when applying to Cornell. Click below for more information</p>
                <p><a href="/content/current-high-school-students" class="btn btn--blue" style="color: #fff;">High School Student Interest</a></p>
            </div>
            <div class="card card--text">
                <h2>Current A&S Freshman</h2>
                <p> Freshman in Arts and Sciences interested in being considered for the Milstein Program can find more information at the link below.</p>
                <p><a href="https://milstein-program.as.cornell.edu/milstein-program-application-current-freshman" class="btn btn--blue" style="color: #fff;">A&S Freshman Interest Form</a></p>
            </div>
            <div class="card card--text">
                <h2>Stay in Touch</h2>
                <p>For updates about the Milstein Program, click below to sign up for our e-newsletter.</p>
                <p><a href="https://milstein-program.as.cornell.edu/e-news-signup" class="btn btn--blue" style="color: #fff;">E-News Signup</a></p>
            </div>
            <?php if ($content['field_sidebar_stories']): ?>
                <!-- Sidebar Stories -->
                <div class="as-page__sidebar__stories">
                    <?php print render($content['field_sidebar_stories']);?>
                </div>
            <?php endif;?>

        </div>
    </div>
<!-- </div>
<div class="block"> -->
    <div class="container m-top--3">
        <?php print render($content['field_text_three']);?>
        </div>
    </div>
</div>
<div class="block red">
    <div class="flex-4-7-v-centered container">
        <div><img src="https://as.cornell.edu/sites/as/files/students-walking-through-arch.jpg" alt="Students walking through stone arch on fall day"></div>
        <div class="larger">
            <!-- <span class="caps">Innovation from the top</span>
            <h2>Faculty director has innovative ideas</h2> -->
            <blockquote>
                <p>"The Milstein Program will make its way not just into the humanities, but into thinking about science and technology in relation to other questions of values and ethics and images and design, all of which are fundamental questions about the relationship between the digital environment and our collective future."</p>
                <p class="quoteBy">&ndash;Amy Villarejo<br />Milstein Program Director</p>
            </blockquote>
            <p><a href="https://as.cornell.edu/news/amy-villarejo-lead-milstein-program-technology-and-humanity">Learn more about the vision for the program.</a></p>
        </div>
    </div>
</div>
<div class="block">
    <div class="container">
        <h2 class="larger">News</h2>
        <div class="cards grid grid--four">
            <?php if (!empty($content['field_related_articles'])): ?>
                <!-- Sidebar Stories -->
                <!-- <div class="as-page__other__stories"> -->
                    <?php print render($content['field_related_articles']);?>
                <!-- </div> -->
            <?php endif;?>
        </div>
    </div>
</div>

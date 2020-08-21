<div class="as-page">
  <div class="as-page__container">
    <h2 class="element-invisible">You are here</h2><div class="breadcrumb">
    <a href="/">Home</a> » <?php print $title; ?></div>

    <div class="person">
      <div class="person__header">
        <h1 class="pageTitle"><?php print $title; ?></h1>
        <p><span class="person__title">
        <?php
          if ($content['field_person_title']){
          print render($content['field_person_title']);
          }
          ?>
        </span></p>
      </div>
      <div class="grid grid--one-two">
        <div class="person__sidebar">
            <?php if (!empty($content['field_remote_image'])) {
              print "<div class='person--picture'>";
              print "<img typeof='foaf:Image' src='".render($content['field_remote_image'])."' alt='".$title."'/>";
              print "</div>";
            }elseif (!empty($content['field_image'])) {
              print "<div class='person--picture'>";
              print render($content['field_image']);
              print "</div>";
            }else{
              print "<img typeof='foaf:Image' src='https://as.cornell.edu/sites/as/files/Klarman_profile.jpg' alt=''/>";
            }
            ?>
          <div class="person__details">
            <?php
              $netid = $node->field_person_netid['und'][0]['value'];
              //$blockldap = block_load('as_people_ldap', $netid);
              //_block_render_blocks(array($blockldap));
              $block = module_invoke('as_people_ldap', 'block_view', 'main', $netid);
              print render($block['content']);
              if (!empty($content['field_person_education'])) {
                print render($content['field_person_education']);
                }
              if (!empty($content['field_links'])) {
                print render($content['field_links']);
                }
            ?>
          </div>
        </div>
        <div class="person__main">
          <?php
            if (!empty($content['body'])){
            print "<div class='person--overview' id='overview'>\n<h2>Overview</h2>";
            print render($content['body']);
            print "</div>\n";
              }
            if (!empty($content['field_multiple_overviews'])){
            print "<div class='person--overview' id='overview'>\n<h2>Overview</h2>";
            print render($content['field_multiple_overviews']);
            print "</div>\n";
              }
            if (!empty($content['field_keywords'])){
            print "<div class='person--keywords' id='keywords'>";
            print render($content['field_keywords']);
            print "</div>";
              }
            print "<div class='person--dept-field-affiliations' id='affiliations' >\n";
            //opens person--dept-field-affiliations
            if (!empty($content['field_departments_programs'])){
            print "<div class='person--departments'>\n";
            print render($content['field_departments_programs']);
            print "\n</div>\n";
              }
            //2 exceptions for comms website
            if (!empty($content['field_related_dept_prog'])){
            print "<div class='person--departments'>\n";
            print render($content['field_related_dept_prog']);
            print "\n</div>\n";
              }
            if (!empty($content['field_link'])){
            print "<div class='person--departments'>\n";
            print render($content['field_link']);
            print "\n</div>\n";
              }
            if (!empty($content['field_person_graduate_fields'])){
            print "<div class='person--fields' >\n";
            print render($content['field_person_graduate_fields']);
            print "\n</div>\n";
              }
            if (!empty($content['field_person_affiliation'])){
            print "<div class='person--affiliations'>\n";
            print render($content['field_person_affiliation']);
            print "\n</div>\n";
              }
            print "</div>"; //closes person--dept-field-affiliations
            if (!empty($content['field_person_research_focus'])){
            print "<div class='person--research' id='research'>\n<h2>Research</h2>\n";
            print render($content['field_person_research_focus']);
            print "\n</div>\n";
              }

            //old courses
            //$courselist = views_embed_view('courses', 'block_flt_netid', $netid);
            //if (strpos ($courselist, 'There are no current courses')) {
              //print "<p>Courses are supposed to go here but there aren't any.</p>";
            //}else{
             // print views_embed_view('courses', 'block_flt_netid', $netid);
              //}

            $courseblock = module_invoke('as_courses_json', 'block_view', $netid);
            if (!empty($courseblock)) {
            print "<h2>Courses</h2>";
            print render($courseblock['content']);
            }

            if (!empty($content['field_person_publications'])){
            print "<div class='person--publications' id='publications'>\n<h2>Publications</h2>\n";
            print render($content['field_person_publications']);
            print "\n</div>\n";
              }

            if (!empty($content['field_sidebar_stories'])){
            print "<h2>News</h2>\n";
            print render($content['field_sidebar_stories']);
              }
            if (!empty($content['field_related_articles'])){
            print "<h2>News</h2>\n";
            print render($content['field_related_articles']);
              }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

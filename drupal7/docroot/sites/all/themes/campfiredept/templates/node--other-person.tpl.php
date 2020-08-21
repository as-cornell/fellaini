<div class="as-page">
  <div class="as-page__container">
    <h2 class="element-invisible">You are here</h2><div class="breadcrumb">
    <a href="/">Home</a> » <?php print $title; ?></div>

    <div class="person">
      <div class="person__header">
        <h1 class="pageTitle"><?php print $title; ?></h1>
        <p><span class="person__title">
        <?php
          if (!empty($content['field_person_title'])){
          print render($content['field_person_title']);
          }
          ?>
        </span></p>
      </div>
      <div class="grid grid--one-two">
        <div class="person__sidebar">
            <?php if ($content['field_remote_image']) {
              print "<div class='person--picture'>";
              print "<img typeof='foaf:Image' src='".render($content['field_remote_image'])."' alt='".$title."'/>";
              print "</div>";
            }elseif ($content['field_image']) {
              print "<div class='person--picture'>";
              print render($content['field_image']);
              print "</div>";
            }else{
              print "<img typeof='foaf:Image' src='https://as.cornell.edu/sites/as/files/Klarman_profile.jpg' />";
            }
            ?>
          <div class="person__details">
            <?php

              print render($block['content']);
              if (!empty($content['field_short_text_one'])) {
                print "<h3>Education</h3><p>".render($content['field_short_text_one'])."</p>";
                }
              if (!empty($content['field_text_one'])) {
                print "<h3>Contact</h3>".render($content['field_text_one']);
                }
              if (!empty($content['field_genre'])){
                print "<h3>Genre</h3>".render($content['field_genre']);
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

            if (!empty($content['field_text_two'])){
            print "<h2>News</h2>\n";
            print render($content['field_text_two']);
              }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

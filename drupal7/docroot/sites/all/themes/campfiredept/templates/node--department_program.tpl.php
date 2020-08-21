<div class="as-page">
  <div class="as-page__container">
    <h2 class="element-invisible">You are here</h2><div class="breadcrumb">
    <a href="/">Home</a> » <a href="/departments-and-programs">Departments and Programs</a> » <?php print $title; ?></div>

    <div class="person">
      <div class="person__header">
        <h1 class="pageTitle"><?php print render($content['field_display_name']); ?></h1>
      </div>
      <div class="grid grid--one-two">
        <div class="person__sidebar">
            <?php
              print "<div class='person--picture'>";
              print render($content['field_image']);
              print "</div>";
            ?>
          <div class="person__details">
            <?php
              if ($content['field_links']) {
                print render($content['field_links']);
                }
            ?>
          </div>
        </div>
        <div class="person__main">
          <?php
          if ($content['body']){
            print "<div class='person--overview' id='overview'>\n";
            print render($content['body']);
            print "</div>\n";
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="as-page__block ">
  <div class="as-container person">
    <div class="person--sidebar">
      <?php print $title; ?>
    </div>
    <div class="person--main">
    <?php
        if ($content['field_links']){
            print "<div class='person--departments'>\n";
            print render($content['field_links']);
            print "\n</div>\n";
              }
      ?>
    </div>
  </div>
</div>


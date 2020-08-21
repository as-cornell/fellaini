<!-- quote = 0 stat = 1 -->
<!---->
<?php if ($content['field_large_text']): ?>
  <p class="as-stat">        
      <span class="as-stat__numbers">
          <?php print render($content['field_large_text']); ?>
      </span>
      <span class="as-stat__content">
        <?php print render($content['field_description']); ?>

      </span>
  </p>
<?php endif; ?>

<?php if ($content['field_quote_citation']): ?>
<!-- quote -->
  <div class='as-blockquote'>
    <blockquote>
      <p><?php print render($content['field_description']); ?></p>
      <footer>- <?php print render($content['field_quote_citation']); ?></footer>
    </blockquote>
  </div>
 <?php endif; ?>
 



 <!--
<?php if (isset($node->field_quote_or_stat['und'][0]['value']) && $node->field_quote_or_stat['und'][0]['value'] === '1'){
  echo "<p class='as-stat'>        
    <span class='as-stat__numbers'>
        ", render($content['field_large_text']), "
    </span>
    <span class='as-stat__content'>
      ", render($content['field_description']),"

    </span>
</p>";
  }else{
    echo "<div class='as-blockquote as-blockquote--blue'>
    <blockquote>
      <p>", render($content[field_description]), "</p>
      <footer>- ", render($content[field_quote_citation]), "</footer>
    </blockquote>
  </div>";}
?>-->
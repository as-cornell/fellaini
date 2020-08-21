<div class="as-img">
  <div class="as-hero">
    <?php print render($content['field_pano_image']); ?>
    <div class="as-container">
      <div class="as-hero__copy">
        <?php print render($content['field_hero']); ?>
      </div>
    </div>
  </div>
</div>
<div class="as-page__block">
    <div class= "as-grid as-grid--nocontainer as-grid--three-one">

        <div>
            <h1>The A&S Ambassadors</h1>
            <div id="about">        
                <?php print render($content['field_primary_body']);?>
            </div>

            <div class="fade" id="contacts">
                <?php print render($content['field_secondary_body']);?>
            </div>

            <div class="fade" id="the-ambassadors">
                <?php print render($content['field_tertiary_body']);?>
            </div>

            <div class="fade" id="ask">
              <?php
                $blockObject = block_load('webform', 'client-block-81876');
                $block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
                $output = drupal_render($block);
                print $output;
              ?>
            </div>    
            


            

            <div class="fade" id="recruitment">
                <?php print render($content['field_fourth_body']);?>
            </div>
        </div>
        <div>
            <div class="sticky">
                <h2>On this page</h2>
                <ul class="inpage-two sidebarNav">
                    <li><a href="#about">About</a></li>
                    <li><a href="#contacts">Contacts</a></li>
                    <li><a href="#the-ambassadors">Meet the ambassadors</a></li>
                    <li><a href="#ask">Ask an ambassador</a></li>
                    <li><a href="#recruitment">Become an ambassador</a></li>
                </ul>
                <h2>News from the ambassadors</h2>
                <div class="small-cards">
                    <?php print views_embed_view('factoid_blocks', 'block_1', 'ambassadors'); ?>
                </div>
                

            </div>
        </div>
    </div>
</div>

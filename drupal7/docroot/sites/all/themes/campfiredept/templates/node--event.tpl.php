<div class="as-page">
    <div class="container container--event">
        <h1 class="pageTitle" >
            <?php print $title; ?>
        </h1>
        <!-- person -->
        <?php if (!empty($content['field_text_three'])): ?>
        <div class="event__person">
        <?php print render($content['field_text_three']);?>
            <!-- <hr /> -->

        <?php endif;?>
        </div>
        <div class="grid grid--one-two">
            <div>
                <?php if (!empty($content['field_image'])):?>
                    <?php print render($content['field_image']);?>
                <?php endif;?>

                <?php if (!empty($content['field_date_event'])): ?>
                    <?php print render($content['field_date_event']);?>
                    <hr />
                <?php endif;?>

                <?php if (!empty($content['field_text_four'])): ?>
                    <?php print render($content['field_text_four']);?>
                    <hr />
                <?php endif;?>

                <?php if (!empty($content['field_popular_links'])): ?>
                    <?php print render($content['field_popular_links']);?>
                    <hr />
                <?php endif;?>


                <?php if (!empty($content['field_text_one'])): ?>
                    <?php print render($content['field_text_one']);?>
                    <hr />
                <?php endif;?>




                <?php if (!empty($content['field_short_text_two'])): ?>
                    <?php print render($content['field_short_text_two']);?>
                    <hr />
                <?php endif;?>



                <?php if (!empty($content['field_short_text_one'])): ?>
                    <?php print render($content['field_short_text_one']);?>
                    <hr />
                <?php endif;?>
                <?php if (!empty($content['field_short_text_three'])): ?>
                    <?php print render($content['field_short_text_three']);?>
                    <hr />
                <?php endif;?>
                <?php if (!empty($content['field_series'])): ?>
                    <?php print render($content['field_series']);?>
                    <hr />
                <?php endif;?>

                <div style="margin-top: 3rem;">
                <?php print views_embed_view('seminar_series_name', 'block');?>
                </div>
            </div>
            <div>

                <?php print render($content['body']);?>

                <?php if (!empty($content['field_text_two'])): ?>
                    <?php print render($content['field_text_two']);?>
                <?php endif;?>


            </div>
        </div>
        </div>

    </div>
</div>

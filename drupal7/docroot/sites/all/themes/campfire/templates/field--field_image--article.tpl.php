
<?php foreach ($items as $delta => $item): ?>
    <figure <?php print $item_attributes[$delta];?>>
        <?php print render($item);?>
        <?php if (!empty($item['#item']['field_file_image_caption_text']['und'][0]['value'])): ?>
        <figcaption>
            <?php print $item['#item']['field_file_image_caption_text']['und'][0]['value'];?>
        </figcaption>
        <?php endif;?>
    </figure>
<?php endforeach;?>

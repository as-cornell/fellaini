<?php
/*
This is the thumbnail popup gallery item
*/
 $image_path = $content['field_image'][0]['#item']['filename'];
 $image_alt = $content['field_image'][0]['#item']['alt'];

 //BOB - left these here for other options if needed
 //$image_url = file_create_url(conf_path()."/".$content['field_image'][0]['#item']['filename']);
 //print $image_url;
//print theme('image_style', array('path' => $image_path, 'style_name' => 'square_scale_and_crop'));
?>
<?php // print_r($content['field_image']); ?>
<?php //print $image_alt; ?>

<a href="#nid-<?php print render($content['field_image'][0]['#item']['fid']);?>" class="">
<?php print theme('image_style', array('path' => $image_path, 'style_name' => 'square_scale_and_crop', 'alt' => $image_alt));?>
</a>

<div id="nid-<?php print render($content['field_image'][0]['#item']['fid']);?>" class="inline-popup mfp-hide">
<div class="as-quick-view">

<p style="text-align: center;"><?php print render($content['field_image']);?></p>
<?php print render($content['field_description']);?>
</div>

</div>
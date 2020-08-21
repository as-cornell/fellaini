<?php $facebook = variable_get('as_dept_variables_facebook');?>
<?php $twitter = variable_get('as_dept_variables_twitter');?>
<?php $instagram = variable_get('as_dept_variables_instagram');?>
<?php $linkedin = variable_get('as_dept_variables_linkedin');?>
<?php $mailingaddress = variable_get('as_dept_variables_postaladdress');?>
<?php $phonenumber = variable_get('as_dept_variables_phonenumber');?>
<?php $site_name = variable_get('site_name');?>
<?php $site_email = variable_get('site_mail', '');?>

<!-- Newsletter wrapper -->
<!-- <?php print $site_name?> -->
  <table class="body" style="background: #eeeeee;border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;height: 100%;width: 100%;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;">
    <tr style="padding: 0;vertical-align: top;text-align: left;">
      <td class="center" align="center" valign="top" style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 0;vertical-align: top;text-align: center;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;border-collapse: collapse !important;">
        <center style="width: 100%;min-width: 580px;">

          <table class="row" style="border-spacing: 0;border-collapse: collapse;padding: 0px;vertical-align: top;text-align: left;width: 100%;position: relative;margin-bottom: 50px;">
            <tr style="padding: 0;vertical-align: top;text-align: left;">
              <td class="center" align="center" style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 0;vertical-align: top;text-align: center;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;border-collapse: collapse !important;">
                <center style="width: 100%;min-width: 580px;">




                        <?php if ($site_name == 'Milstein Program in Technology & Humanity'): ?>
                         <table class="twelve columns toprow" style="border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;margin: 0 auto;width: 600px;">
                          <tr style="padding: 0;vertical-align: top;text-align: left;">
                            <td style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 0;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;padding-top: 15px;border-collapse: collapse !important;width: 50% !important;"><a href="http://cornell.edu"  style="color: #b31b1b;text-decoration: none;"><img src="https://as.cornell.edu/sites/as/files/cornell-reduced-black_web.png
" alt="Cornell University"></a></td>

                            <td style="text-align: right;word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 0;vertical-align: top;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;padding-top: 15px;border-collapse: collapse !important;width: 50% !important;">
                            <a href="<?php print $GLOBALS['base_url'];?><?php print($base_url . $node_url);?>"  style="color: #b31b1b;text-decoration: none;">view online</a>
                                <?php if ($facebook): ?>
                                    <a href="https://www.facebook.com/<?php print $facebook;?>" style="color: #b31b1b;text-decoration: none;">
                                        <img src="http://as.cornell.edu/sites/as/files/facebook-green.png" width="20" alt="<?php print $site_name;?> on Facebook" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;width: auto !important;max-width: 100% !important;float: none;clear: both;display: inline-block;height: auto;border: none;margin-left: 10px; width:11px; height: 20px;"></a>

                                <?php endif;?>

                                <?php if ($twitter): ?>
                                    <a href="https://twitter.com/<?php print $twitter;?>" style="color: #b31b1b;text-decoration: none;"><img src="http://as.cornell.edu/sites/as/files/twitter-green.png" alt="<?php print $site_name;?> on Twitter" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;width: auto !important;max-width: 100% !important;float: none;clear: both;display: inline-block;height: auto;border: none;margin-left: 10px; width:21px; height: 20px;"></a>
                                <?php endif;?>

                                <?php if ($instagram): ?>
                                    <a href="https://instagram.com/<?php print $instagram;?>" style="color: #b31b1b;text-decoration: none;"><img src="http://as.cornell.edu/sites/as/files/instagram-green.png" alt="<?php print $site_name;?> on Instagram" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;width: auto !important;max-width: 100% !important;float: none;clear: both;display: inline-block;height: auto;border: none;margin-left: 10px; width:21px; height: 20px;"></a>
                                <?php endif;?>
                                <?php if ($linkedin): ?>
                                    <a href="https://linkedin.com/company/<?php print $linkedin;?>" style="color: #b31b1b;text-decoration: none;"><img src="http://as.cornell.edu/sites/as/files/linkedin-green.png" alt="<?php print $site_name;?> on LinkedIn" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;width: auto !important;max-width: 100% !important;float: none;clear: both;display: inline-block;height: auto;border: none;margin-left: 10px; width:21px; height: 20px;"></a>
                                <?php endif;?>

                            </td>
                            <td class="expander" style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 0 !important;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;visibility: hidden;width: 50% !important;padding-top: 15px;border-collapse: collapse !important;"></td>
                          </tr>
                        </table>
<?php else: ?>
<!-- link and social media row -->
                        <table class="twelve columns toprow" style="border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;margin: 0 auto;width: 600px;">
                          <tr style="padding: 0;vertical-align: top;text-align: left;">
                            <td style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 0;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;padding-top: 15px;border-collapse: collapse !important;width: 50% !important;"><a href="<?php print $GLOBALS['base_url'];?><?php print($base_url . $node_url);?>"  style="color: #b31b1b;text-decoration: none;">view online</a></td>

                            <td style="text-align: right;word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 0;vertical-align: top;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;padding-top: 15px;border-collapse: collapse !important;width: 50% !important;">
                                <?php if ($facebook): ?>
                                    <a href="https://www.facebook.com/<?php print $facebook;?>" style="color: #b31b1b;text-decoration: none;">
                                        <img src="http://as.cornell.edu/sites/as/files/facebook-green.png" width="20" alt="<?php print $site_name;?> on Facebook" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;width: auto !important;max-width: 100% !important;float: none;clear: both;display: inline-block;height: auto;border: none;margin-left: 10px; width:11px; height: 20px;"></a>

                                <?php endif;?>

                                <?php if ($twitter): ?>
                                    <a href="https://twitter.com/<?php print $twitter;?>" style="color: #b31b1b;text-decoration: none;"><img src="http://as.cornell.edu/sites/as/files/twitter-green.png" alt="<?php print $site_name;?> on Twitter" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;width: auto !important;max-width: 100% !important;float: none;clear: both;display: inline-block;height: auto;border: none;margin-left: 10px; width:21px; height: 20px;"></a>
                                <?php endif;?>

                                <?php if ($instagram): ?>
                                    <a href="https://instagram.com/<?php print $instagram;?>" style="color: #b31b1b;text-decoration: none;"><img src="http://as.cornell.edu/sites/as/files/instagram-green.png" alt="<?php print $site_name;?> on Instagram" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;width: auto !important;max-width: 100% !important;float: none;clear: both;display: inline-block;height: auto;border: none;margin-left: 10px; width:21px; height: 20px;"></a>
                                <?php endif;?>
                                <?php if ($linkedin): ?>
                                    <a href="https://linkedin.com/company/<?php print $linkedin;?>" style="color: #b31b1b;text-decoration: none;"><img src="http://as.cornell.edu/sites/as/files/linkedin-green.png" alt="<?php print $site_name;?> on LinkedIn" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;width: auto !important;max-width: 100% !important;float: none;clear: both;display: inline-block;height: auto;border: none;margin-left: 10px; width:21px; height: 20px;"></a>
                                <?php endif;?>

                            </td>
                            <td class="expander" style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 0 !important;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;visibility: hidden;width: 50% !important;padding-top: 15px;border-collapse: collapse !important;"></td>
                          </tr>
                        </table>
<?php endif;?>









                </center>
              </td>
            </tr>
          </table>
          <?php if ($site_name == 'Milstein Program in Technology & Humanity'): ?>
          <!-- Milstein Program header -->
                     <table class="container" style="border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: inherit;width: 580px;margin: 0 auto;">
            <tr style="padding: 0;vertical-align: top;text-align: left;">
              <td style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 0;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;border-collapse: collapse !important;">

                <table class="row" style="margin-bottom: 25px;">
                  <tr style="padding: 0;vertical-align: top;text-align: left;">
                    <td class="wrapper last" style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 10px 20px 0px 0px;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;position: relative;padding-right: 0px;border-collapse: collapse !important;">

                      <table class="twelve columns" style="border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;margin: 0 auto;width: 600px;">
                        <tr style="padding: 0;vertical-align: top;text-align: left;">
                        <?php
/* I want to split this up the same way the header is on pages so
we can have automagically branded newsletters per department */
?>

                          <td class="center logo" align="center" style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 0;vertical-align: top;text-align: center;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;border-collapse: collapse !important;">

                                <a href="<?php print $GLOBALS['base_url'];?>" title="<?php print t('Home');?>" rel="home" id="logo" class="as-header__brand" >
                                  <img src="https://milstein-program.as.cornell.edu/sites/milstein/files/MILSTEIN_3Line_B%26W-web-600.png

" alt="Milstein Program in Technology & Humanity" class=""/>

                                </a>

                          </td>
                          <td class="expander" style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 0 !important;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;visibility: hidden;width: 0px;border-collapse: collapse !important;"></td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                </table>
        <?php else: ?>
          <!-- Department Logos -->
          <table class="container" style="border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: inherit;width: 580px;margin: 0 auto;">
            <tr style="padding: 0;vertical-align: top;text-align: left;">
              <td style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 0;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;border-collapse: collapse !important;">

                <table class="row" style="margin-bottom: 25px;">
                  <tr style="padding: 0;vertical-align: top;text-align: left;">
                    <td class="wrapper last" style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 10px 20px 0px 0px;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;position: relative;padding-right: 0px;border-collapse: collapse !important;">

                      <table class="twelve columns" style="border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;margin: 0 auto;width: 600px;">
                        <tr style="padding: 0;vertical-align: top;text-align: left;">
                        <?php
/* I want to split this up the same way the header is on pages so
we can have automagically branded newsletters per department */
?>

                          <td class="center logo" align="center" style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 0;vertical-align: top;text-align: center;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;border-collapse: collapse !important;">
                              <a href="http://cornell.edu" class="logo--cornell"><img src="https://as.cornell.edu/sites/as/files/cu-insignia-newsletter.png
" alt="Cornell University"></a>

                                <a href="<?php print $GLOBALS['base_url'];?>" title="<?php print t('Home');?>" rel="home" id="logo" class="as-header__brand" >
                                  <img src="<?php print theme_get_setting('logo', 'campfiredept');?>" alt="<?php print t('Home');?>" class=""/>

                                </a>

                          </td>
                          <td class="expander" style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 0 !important;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;visibility: hidden;width: 0px;border-collapse: collapse !important;"></td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                </table>
          <?php endif;?>




                <!-- *** end of header *** -->

                <!-- ### start of welcome letter ### -->
                <?php if ($content['field_text_group']): ?>


                  <?php
// loop through the field collection for welcome letter
foreach ($node->field_text_group['und'] as $key => $value) {
    $field_collection = entity_load('field_collection_item', array($value['value']));
    $idx = $value['value'];
    ?>
                    <table class="row" style="border-spacing: 0;border-collapse: collapse;padding: 0px;vertical-align: top;text-align: left;width: 100%;position: relative;margin-bottom: 50px;display: block;">

                      <tr style="padding: 0;vertical-align: top;text-align: left;">
                        <td class="wrapper last" style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 10px 20px 0px 0px;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;position: relative;padding-right: 0px;border-collapse: collapse !important;">

                          <table class="twelve columns radius" style="border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;margin: 0 auto;width: 600px;">
                            <?php if ($field_collection[$idx]->field_image['und'][0]['uri']): ?>
                            <tr style="padding: 0;vertical-align: top;text-align: left;">
                              <td>
                                <a href="<?php print($base_url . $node_url);?>">
                                  <img src="<?php print image_style_url('scale-crop-600-400', $field_collection[$idx]->field_image['und'][0]['uri']);?>" alt="<?php print $field_collection[$idx]->field_image['und'][0]['alt'];?>">
                                </a>
                              </td>
                            </tr>
                            <?php endif;?>
                            <tr style="padding: 0;vertical-align: top;text-align: left;">
                              <td class="textblock cell-pad-all" style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 20px;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;background: #ffffff;border-collapse: collapse !important;">
                                <h1 style="color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: 600;padding: 10px 0 18px 0;margin: 0;text-align: left;line-height: 1.3;word-break: normal;font-size: 30px;"><?php print $field_collection[$idx]->field_section_title['und'][0]['value'];?></h1>
                                <?php print $field_collection[$idx]->field_section_text['und'][0]['value'];?>

                              </td>

                            </tr>
                          </table>

                        </td>
                      </tr>
                    </table>
                  <?php
// end loop for intro letter
}
?>
                <?php endif;?>

                <!-- *** end of Dean's letter *** -->

                <!-- ### start of stories ### -->
                <?php print render($content['field_article']);?>
                <!-- *** end of stories *** -->

                <?php print render($content['field_newsletter_events']);?>



                <!-- ### start other stories ### -->
                <?php // if ($content['field_other_stories']):?>
                    <?php //if ($content['field_other_stories'][0]['field_section_text']['und'][0]['value']): ?>
                    <?php
// loop through the field collection for Other Stories
foreach ($node->field_other_stories['und'] as $key => $value) {
    $field_collection = entity_load('field_collection_item', array($value['value']));
    $idx = $value['value'];
    ?>
                    <?php if ($field_collection[$idx]->field_section_text['und'][0]['value']): ?>
                    <table class="row" style="border-spacing: 0;border-collapse: collapse;padding: 0px;vertical-align: top;text-align: left;width: 100%;position: relative;margin-bottom: 50px;display: block;">
                      <tr style="padding: 0;vertical-align: top;text-align: left;">
                        <td class="wrapper last" style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 10px 20px 0px 0px;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;position: relative;padding-right: 0px;border-collapse: collapse !important;">

                          <table class="twelve columns radius" style="border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;margin: 0 auto;width: 600px;">
                            <?php if ($field_collection[$idx]->field_image['und'][0]['uri']): ?>
                            <tr style="padding: 0;vertical-align: top;text-align: left;">
                              <td>

                                     <img src="<?php print image_style_url('scale-crop-600-400', $field_collection[$idx]->field_image['und'][0]['uri']);?>" alt="">

                              </td>
                            </tr>
                            <?php endif;?>
                            <tr style="padding: 0;vertical-align: top;text-align: left;">
                              <td class="textblock cell-pad-all" style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 20px;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;background: #ffffff;border-collapse: collapse !important;">
                                <h1 style="color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: 600;padding: 10px 0 18px 0;margin: 0;text-align: left;line-height: 1.3;word-break: normal;font-size: 30px;"><?php print $field_collection[$idx]->field_section_title['und'][0]['value'];?></h1>
                                <?php print $field_collection[$idx]->field_section_text['und'][0]['value'];?>

                              </td>

                            </tr>
                          </table>

                        </td>
                      </tr>
                    </table>
                    <?php endif;?>
                    <?php
// end loop for field collection for Other Stories
}
?>


                <!-- *** end other stories *** -->





                <!-- ### start faculty and staff buttons -->
                <?php if ($content['field_related_audience'][0]['#title'] == 'Faculty Member'): ?>

                    <table class="row" style="border-spacing: 0;border-collapse: collapse;padding: 0px;vertical-align: top;text-align: left;width: 100%;position: relative;margin-bottom: 50px;display: block;">
                        <tr style="padding: 0;vertical-align: top;text-align: left;">
                            <td class="wrapper last" style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 10px 20px 0px 0px;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;position: relative;padding-right: 0px;border-collapse: collapse !important;">
                                <table class="twelve columns radius full-width" style="border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;margin: 0 auto;width: 600px;">
                                    <tr style="padding: 0;vertical-align: top;text-align: left;">
                                        <td style="width: 45%;padding-right: 2%;word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 0;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;border-collapse: collapse !important;"
                                                        class="full">
                                            <table class="button medium-button round" style="border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;width: 100%;overflow: hidden;">
                                                <tr style="padding: 0;vertical-align: top;text-align: left;">
                                                    <td style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 12px 0;vertical-align: top;text-align: center;color: #ffffff;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: initial !important;font-size: 18px;box-sizing: border-box;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;display: block;background: #2ba6cb;border: 1px solid #2284a1;-webkit-border-radius: 500px;-moz-border-radius: 500px;border-radius: 500px;border-collapse: collapse !important;width: auto !important;">
                                                        <a href="<?php print($base_url . $node_url);?>/for-faculty" style="color: #ffffff;text-decoration: none;font-weight: bold;font-family: Helvetica, Arial, sans-serif;font-size: 20px;display: block;height: 100%;width: 100%;">Faculty Information</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="width: 45%;padding-left: 2%;word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 0;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;border-collapse: collapse !important;"
                                                        class="full">
                                            <table class="button medium-button round" style="border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;width: 100%;overflow: hidden;">
                                                <tr style="padding: 0;vertical-align: top;text-align: left;">
                                                    <td style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 12px 0;vertical-align: top;text-align: center;color: #ffffff;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: initial !important;font-size: 18px;box-sizing: border-box;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;display: block;background: #2ba6cb;border: 1px solid #2284a1;-webkit-border-radius: 500px;-moz-border-radius: 500px;border-radius: 500px;border-collapse: collapse !important;width: auto !important;">
                                                        <a href="<?php print($base_url . $node_url);?>/for-staff" style="color: #ffffff;text-decoration: none;font-weight: bold;font-family: Helvetica, Arial, sans-serif;font-size: 20px;display: block;height: 100%;width: 100%;">Staff Information</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                <?php endif;?>
                <!-- *** end faculty and staff buttons -->

                <!-- ### start student buttons -->
                <?php if ($content['field_related_audience'][0]['#title'] == 'Current Student'): ?>
                    <table class="row" style="border-spacing: 0;border-collapse: collapse;padding: 0px;vertical-align: top;text-align: left;width: 100%;position: relative;margin-bottom: 50px;display: block;">
                        <tr style="padding: 0;vertical-align: top;text-align: left;">
                            <td class="wrapper last" style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 10px 20px 0px 0px;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;position: relative;padding-right: 0px;border-collapse: collapse !important;">
                                <table class="twelve columns radius" style="border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;margin: 0 auto;width: 600px;">
                                    <tr style="padding: 0;vertical-align: top;text-align: left;">
                                        <td style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 0;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;border-collapse: collapse !important;">
                                            <table class="button medium-button round" style="border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;width: 100%;overflow: hidden;">
                                                <tr style="padding: 0;vertical-align: top;text-align: left;">
                                                    <td style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 12px 0;vertical-align: top;text-align: center;color: #ffffff;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: initial !important;font-size: 18px;box-sizing: border-box;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;display: block;background: #2ba6cb;border: 1px solid #2284a1;-webkit-border-radius: 500px;-moz-border-radius: 500px;border-radius: 500px;border-collapse: collapse !important;width: auto !important;">
                                                        <a href="<?php print($base_url . $node_url);?>/for-current-students" style="color: #ffffff;text-decoration: none;font-weight: bold;font-family: Helvetica, Arial, sans-serif;font-size: 20px;display: block;height: 100%;width: 100%;">Student Information</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                <?php endif;?>
                <!-- *** end student buttons -->

                <!-- ### start of footer ### -->
                <table class="row " style="border-spacing: 0;border-collapse: collapse;padding: 0px;vertical-align: top;text-align: left;width: 100%;position: relative;margin-bottom: 50px;display: block;">
                    <tr style="padding: 0;vertical-align: top;text-align: left;">
                        <td class="wrapper last" style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 10px 20px 0px 0px;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;position: relative;padding-right: 0px;border-collapse: collapse !important;">

                            <table class="footer twelve columns radius" style="border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;margin: 0 auto;width: 600px;background: rgb(77, 75, 75);">
                                <tr style="padding: 0;vertical-align: top;text-align: left;">

                                    <td style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 20px;vertical-align: middle;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;border-collapse: collapse !important;padding-right: 0;width: 50% !important;">
                                        <img src="http://as.cornell.edu/sites/as/files/small-lockup.png" alt="College of Arts & Sciences" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;width: auto !important;max-width: 100% !important;float: none;clear: both;display: inline-block;height: auto;margin-left: 0px;">
                                    </td>
                                    <td class="socialLinks" style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 20px;vertical-align: middle;text-align: right;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;border-collapse: collapse !important;padding-left: 0;">
                                        <?php if ($facebook): ?>
                                            <a href="https://facebook.com/<?php print $facebook;?>" style="color: #b31b1b;text-decoration: none;"><img src="http://as.cornell.edu/sites/as/files/facebook-gray.png" alt="<?php print $site_name;?> on Twitter" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;width: auto !important;max-width: 100% !important;float: none;clear: both;display: inline-block;height: auto;border: none;margin-left: 10px; width: 21px;"></a>
                                        <?php endif;?>
                                        <?php if ($twitter): ?>
                                            <a href="https://twitter.com/<?php print $twitter;?>" style="color: #b31b1b;text-decoration: none;"><img src="http://as.cornell.edu/sites/as/files/twitter-gray.png" alt="<?php print $site_name;?> on Instagram" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;width: auto !important;max-width: 100% !important;float: none;clear: both;display: inline-block;height: auto;border: none;margin-left: 10px; width: 21px;"></a>
                                        <?php endif;?>
                                        <?php if ($instagram): ?>
                                            <a href="https://instagram.com/<?php print $instagram;?>" style="color: #b31b1b;text-decoration: none;"><img src="http://as.cornell.edu/sites/as/files/instagram-gray.png" alt="<?php print $site_name;?> on Instagram" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;width: auto !important;max-width: 100% !important;float: none;clear: both;display: inline-block;height: auto;border: none;margin-left: 10px; width: 21px;"></a>
                                        <?php endif;?>
                                        <?php if ($linkedin): ?>
                                            <a href="https://linkedin.com/company/<?php print $instagram;?>" style="color: #b31b1b;text-decoration: none;"><img src="http://as.cornell.edu/sites/as/files/linkedin-gray.png" alt="<?php print $site_name;?> on Instagram" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;width: auto !important;max-width: 100% !important;float: none;clear: both;display: inline-block;height: auto;border: none;margin-left: 10px; width: 21px;"></a>
                                        <?php endif;?>



                                    </td>


                                </tr>
                                <tr style="padding: 0;vertical-align: top;text-align: left;">
                                    <td colspan="2" style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 20px;vertical-align: middle;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;border-collapse: collapse !important;">
                                        <p align="center" style="text-align: center;font-size: 12px;color: #999999;line-height: 1.5em !important;margin-bottom: 1em !important;font-family: helvetica, arial, verdana, sans-serif !important;font-weight: normal !important;margin: 0;padding: 0;"><?php print $mailingaddress;?></p>
                                        <p align="center" style="text-align: center;font-size: 12px;color: #999999;line-height: 1.5em !important;margin-bottom: 1em !important;font-family: helvetica, arial, verdana, sans-serif !important;font-weight: normal !important;margin: 0;padding: 0;"><a href="mailto:<?php print $site_email;?>" style="text-decoration: underline;"><font color="#999999"><?php print $site_email;?></font></a></p>
                                        <p align="center" style="text-align: center;font-size: 12px;color: #999999;line-height: 1.5em !important;margin-bottom: 1em !important;font-family: helvetica, arial, verdana, sans-serif !important;font-weight: normal !important;margin: 0;padding: 0;">
To unsubscribe from this list, send a blank email to <a
href="mailto:%%email.unsub%%" style="text-decoration: underline;"><strong><font color="#999999">%%email.unsub%%</font></strong></a></p>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                </table>
                <!-- end of footer -->

              <!-- container end below -->
              </td>
            </tr>
          </table>

        </center>
      </td>
    </tr>
  </table>

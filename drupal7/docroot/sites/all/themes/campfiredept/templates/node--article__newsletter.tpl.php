<table class="row" style="border-spacing: 0;border-collapse: collapse;padding: 0px;vertical-align: top;text-align: left;width: 100%;position: relative;margin-bottom: 50px;display: block;">
  <tr style="padding: 0;vertical-align: top;text-align: left;">
    <td class="wrapper last" style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 10px 20px 0px 0px;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;position: relative;padding-right: 0px;border-collapse: collapse !important;">

      <table class="twelve columns radius" style="border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;margin: 0 auto;width: 600px;">
        <?php if ($content['field_newsletter_image']): ?>
        <tr style="padding: 0;vertical-align: top;text-align: left;">
          <td style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 0;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;border-collapse: collapse !important;">
            <a href="<?php print $GLOBALS['base_url']; ?><?php print($base_url.$node_url); ?>" style="color: #b31b1b;text-decoration: none;">

              <img src="<?php print trim(render($content['field_newsletter_image'])); ?>" alt="<?php print $title; ?>" height="400" width="600" style="border: none;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;width: auto;max-width: 100% !important;float: left;clear: both;display: block;height: auto;">
            </a>
          </td>
        </tr>
    <?php endif; ?>
        <tr style="padding: 0;vertical-align: top;text-align: left;">
          <td class="textblock cell-pad-all" style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 20px;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;background: #ffffff;border-collapse: collapse !important;">
            <h1 style="color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: 600;padding: 10px 0 18px 0;margin: 0;text-align: left;line-height: 1.3;word-break: normal;font-size: 30px;"><a href="<?php print $GLOBALS['base_url']; ?><?php print($base_url.$node_url); ?>" style="color: #b31b1b;text-decoration: none;"><?php print $title; ?></a></h1>
            <?php print render($node->body[$node->language][0]['safe_summary']);  ?>
            <p style="margin: 0;margin-bottom: 10px;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;padding: 0;text-align: left;line-height: 27px;font-size: 18px;">
              <a href="<?php print $GLOBALS['base_url']; ?><?php print($base_url.$node_url); ?>" style="color: #b31b1b;text-decoration: none;">Learn More</a>
            </p>
          </td>

        </tr>
      </table>

    </td>
  </tr>
</table>

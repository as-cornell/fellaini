
  <table style="border-spacing: 0;border-collapse: collapse;padding: 0px;vertical-align: top;text-align: left;width: 100%;position: relative;margin-bottom: 50px;display: block;">
    <tr style="padding: 0;vertical-align: top;text-align: left;">
      <td style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 10px 20px 0px 0px;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;position: relative;padding-right: 0px;border-collapse: collapse !important;">

        <table style="border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;margin: 0 auto;width: 600px;">
          <?php if (!empty($content['field_image'])): ?>
          <tr style="padding: 0;vertical-align: top;text-align: left;">
            <td>
              <?php print render($content['field_image']); ?>
            </td>
          </tr>
          <?php endif;?>
          <tr style="padding: 0;vertical-align: top;text-align: left;">
            <td style="word-break: break-word;-webkit-hyphens: none;-moz-hyphens: none;hyphens: none;padding: 20px;vertical-align: top;text-align: left;color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: normal;margin: 0;line-height: 27px;font-size: 18px;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;background: #ffffff;border-collapse: collapse !important;">
              <h1 style="color: #222222;font-family: Helvetica, Arial, sans-serif;font-weight: 600;padding: 10px 0 18px 0;margin: 0;text-align: left;line-height: 1.3;word-break: normal;font-size: 30px;">
                  <?php print render($content['field_section_title']); ?>
                </h1>
                <?php print render($content['field_section_text']); ?>
            </td>

          </tr>
        </table>

      </td>
    </tr>
  </table>


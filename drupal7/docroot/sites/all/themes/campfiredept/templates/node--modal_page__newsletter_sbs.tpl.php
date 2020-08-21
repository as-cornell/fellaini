<!--  each slug is a table row containing an entity reference that gets displayed in the newsletter tamplate.  The bounding table elements are in that template    -->
<tr>
  <td style="border-collapse: collapse;">
    <table cellpadding="0" cellspacing="0" border="0" class="side-by-side" bgcolor="#9ECE78" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
      <tr>
        <td width="600" style="border-collapse: collapse;">
          <table cellpadding="0" cellspacing="0" border="0" class="side-by-side__item" width="300" align="left" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
          <tr>
            <td style="border-collapse: collapse;">
              <?php print render($content['field_image']); ?>
            </td>
          </tr>
          </table>
          <table cellpadding="0" cellspacing="0" border="0" class="side-by-side__item" width="280" align="right" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
            <tr>
              <td style="border-collapse: collapse;">
                <h1 style="color: black !important; line-height: 1em !important; font-size: 24px !important;">
                  <a href="" style="color: #ffffff !important; text-decoration: none !important; font-weight: normal !important;">
                    <?php print $title; ?>
                  </a>
                </h1>
              </td>
            </tr>
            <tr>
              <td style="border-collapse: collapse;">
                <p style="margin: 1em 0;">
                  <?php print render($content['field_description']); ?>
                </p>
              </td>
            </tr>
            <tr>
              <td style="border-collapse: collapse;">
                <p style="margin: 1em 0;">
                  <a href="<?php print $node_url; ?>">Learn more</a>
                </p>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </td>
</tr>


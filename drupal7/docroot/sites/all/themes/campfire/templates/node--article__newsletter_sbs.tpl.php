<!--  each slug is a table row containing an entity reference that gets displayed in the newsletter tamplate.  The bounding table elements are in that template    -->
<tr>
  <td style="border-collapse: collapse;">
    <table cellpadding="0" cellspacing="0" border="0" class="full" width="600" bgcolor="#9ECE78" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
      <tr>
        <td width="" style="border-collapse: collapse;">
          <table cellpadding="0" cellspacing="0" border="0" class="half" width="300" align="left" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
          <tr>
            <td style="border-collapse: collapse;" width="300" class="half">
              <?php print render($content['field_image']); ?>
            </td>
          </tr>
          </table>
          <table cellpadding="0" cellspacing="0" border="0" class="half" width="300" align="right" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
            <tr>
              <td style="border-collapse: collapse; padding-right: 20px; padding-left: 20px;">
                <h1 style="color: black !important; line-height: 1.2em !important; font-size: 24px !important;">
                  <a href="http://as.cornell.edu<?php print $node_url; ?>" style="color: #ffffff !important; text-decoration: none !important; font-weight: normal !important;">
                    <?php print $title; ?>
                  </a>
                </h1>
              </td>
            </tr>
            <tr>
              <td style="border-collapse: collapse; padding-right: 20px; padding-left: 20px;">
                <?php print render($node->body[$node->language][0]['safe_summary']);  ?>
              </td>
            </tr>
            <tr>
              <td style="border-collapse: collapse; padding-right: 20px; padding-left: 20px;">
                <p style="margin: 1em 0;">
                  <a href="http://as.cornell.edu<?php print $node_url; ?>" style="color: #b31b1b; text-decoration: none;"><font style="color: #b31b1b;"><?php print render($content['field_link_text']); ?></font></a>
                </p>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </td>
</tr>


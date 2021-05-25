<tr>
    <td>
        <div class="person--directory">
            <div class="name-title">
            <?php
            $nodeurl = url('node/'. $node->nid);
            print "<span class='name'>";
            print "<a href='".$nodeurl."''>";
            print $title."</a>";
            print "</span>";
            if (!empty($content['field_person_title'])) {
            print "<span class='title'>";
            print render($content['field_person_title']);
            print "</span>";
            }
            print "</span>";
            if (!empty($content['field_other'])) {
            print "<span class='title'>";
            print render($content['field_other']);
            print "</span>";
            }
            ?>
            </div>
            <div class="contact">
                <?php
                $netid = $node->field_person_netid['und'][0]['value'];
                $block2 = module_invoke('as_people_ldap', 'block_view', 'directory', $netid);
                print render($block2['content']);
                ?>
            </div>
            <div class="other">
            <?php
                if (!empty($content['field_keywords'])) {
                print render($content['field_keywords']);
                }
                if (!empty($content['field_person_graduate_fields'])) {
                print render($content['field_person_graduate_fields']);
                }
                if (!empty($content['field_related_people'])) {
                print "<strong>Related Faculty:</strong>";
                print render($content['field_related_people']);
                }

            //if (strpos($a, 'Staff') !== false) {
                //print render($content['body']);
                //}
            //}
            // possibly add if-staff show overview or summary?
            ?>
            </div>

        </div>
    </td>
</tr>

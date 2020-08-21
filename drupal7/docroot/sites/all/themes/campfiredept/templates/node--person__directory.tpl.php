<tr>
    <td>
        <div class="person--directory">
            <div class="name-title">
            <?php
            print "<span class='name'>";
            $a =  render($content['field_person_type']);
            if (strpos($a, 'Faculty') !== false) {
            //if ($persontype === $b ) {
                $nodeurl = url('node/'. $node->nid);
                //$alias = drupal_get_path_alias("node/".$nid);
                print "<a href='".$nodeurl."''>";
                print $title."</a>";
            }else{
                print $title."</a>";
            }
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
            if (strpos($a, 'Faculty') !== false) {
                if ($content['field_keywords']) {
                print render($content['field_keywords']);
                }else{
                print render($content['field_person_graduate_fields']);
                }
            }
            if (strpos($a, 'Graduate Student') !== false) {
                if ($content['field_related_people']) {
                print "<strong>Related Faculty:</strong>";
                print render($content['field_related_people']);
                }
            }
            if (strpos($a, 'Staff') !== false) {
                if ($content['body']) {
                print render($content['body']);
                }
            }
            // possibly add if-staff show overview or summary?
            ?>
            </div>

        </div>
    </td>
</tr>

<!-- Department directory -->
<div class="as-page">
    <div class="as-page__block">
        <div class="as-container">
            <h1 class="pageTitle">
                <?php print $title; ?>
            </h1>
        </div>

        <div class="as-container">
        <!-- UL of tab lables to use for links-->
          <ul class="tabs__nav">
          <?php
            $items = field_get_items('bean', $bean, 'field_directory_tab');
            foreach ($items as $item) {
                for($i=0, $count = count($items);$i<$count;$i++) {
                $link = $content['field_directory_tab'][$i]['entity']['field_collection_item'][$item['value']]['field_tab_label'][0]['#markup'];
                    if ($link != null) {

                        print "<li class='active'><a href='#".str_replace(" ", "-",strtolower($link))."'>".$link."</a></li>";

                    }
                }
            }
            ?>
        </ul>
            <div class="tabs__content">
                <?php print render($content['field_directory_tab']); ?>
            </div>
        </div>
    </div>
</div>

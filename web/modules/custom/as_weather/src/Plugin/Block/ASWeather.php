<?php

namespace Drupal\as_weather\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a Current Weather Block.
 *
 * @Block(
 *   id = "weather_block",
 *   admin_label = @Translation("Weather block"),
 *   category = @Translation("Current Weather"),
 * )
 */
class ASWeather extends BlockBase {

  /**
   * {@inheritdoc}
   */


  public function build() {
    // Connect to openweathermap.org
    $json_string =    file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Ithaca,us&appid=63901e9707c2b2ff4ec213fb4c2b9674&units=imperial");
    //put JSON into display text
    $json_string = utf8_encode($json_string);
    //parse JSON into individual variables
    $parsed_json = json_decode($json_string);
    //get the stuff we want to display
    $location =$parsed_json->{'name'};
    $weatherdescription = $parsed_json->{'weather'};
    $count = count($weatherdescription);
      for($i = 0; $i < $count; $i++) {
         $item = $weatherdescription[$i];
            $weatherdescription =  $item->{'description'} ;
            $weatherdescription = as_weather_nameize($weatherdescription);
            $icon = $item->{'icon'};
            $id = $item->{'id'};
            break;
        }

    $temp = $parsed_json->{'main'}->{'temp'};
    $temp = round($temp);
    $temphi = $parsed_json->{'main'}->{'temp_max'};
    $temphi = round($temphi);
    $templo = $parsed_json->{'main'}->{'temp_min'};
    $templo = round($templo);
    $humid = $parsed_json->{'main'}->{'humidity'};
    //display the stuff according to how it needs to appear
    $main = "

                    <i class='weather-icon owf owf-${id}'></i>

                <div>
                    <div class='weather-description'>${weatherdescription}</div>
                    <div class='weather-temps'>${temp} &#8457; <span class='hilo'>(high ${temphi} &#8457;, low ${templo} &#8457;)
                    </div>
                </div>
            \n";

    return array(
      '#markup' => $this->t('<div class="weather">'. $main .'</div>'),
    );
  }

}

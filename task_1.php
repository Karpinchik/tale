<?php

// Задание 1
// Распарсить при помощи regex следующий список машин по маркам и моделям:
// AUDI 100
// AUDI 80/90
// OPEL   VECTRA
// OPEL ASTRA
// VW GOLF II

$list = [ 'AUDI 100', 'AUDI 80/90', 'OPEL VECTRA', 'OPEL ASTRA', 'VW GOLF II'];
$reg_car_title = '/^[A-Z]{4}\s|^[A-Z]{2}\s/';  // regular expression for car brand search.
$reg_car_model = '/\s[0-9]{3}|\s[A-Z]{4,}$|\s\d\d\/\d\d$|\s[A-Z]*\s[A-Z]*$/';      //// regular expression for car model search.
$list_car_title = [];    // received data when parsing car brands.
$list_car_model = [];     // received data when parsing car model.

function get_car_data () {

  global $list;
  global $reg_car_title;
  global $list_car_title;
  global $reg_car_model;
  global $list_car_model;

  foreach ($list as $item) {
    preg_match_all($reg_car_title, $item, $matches);
    $list_car_title[] = $matches[0][0];
  }

  foreach ($list as $item) {
    preg_match_all($reg_car_model, $item, $matches);
    $list_car_model[] = $matches[0][0];
  }
}

get_car_data();       // // get the car data and add to the list $list_car_title and $list_car_model
print_r($list_car_title);
echo "<br>";
print_r($list_car_model);

?>

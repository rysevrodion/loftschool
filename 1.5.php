<?php
$bmw = array("model" => "X5", "speed" => "120", "doors" => "5", "year" => "2015");
$toyota = array("model" => "corolla", "speed" => "100", "doors" => "4", "year" => "2010");
$opel = array("model" => "astra", "speed" => "87", "doors" => "2", "year" => "2007");

$cars = array("bmw" => $bmw, "toyota" => $toyota, "opel" => $opel);

foreach ($cars as $key => $value) {
    echo "CAR " . "$key" . "\n";
    foreach ($value as $key => $value1){
        echo "$value1 ";
    }
    echo "\n\n";
}
?>
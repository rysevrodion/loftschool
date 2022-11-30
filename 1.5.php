<?php

$bmw = [
    "model" => "X5",
    "speed" => "120",
    "doors" => "5",
    "year" => "2015"
];

$toyota = [
    "model" => "corolla",
    "speed" => "100",
    "doors" => "4",
    "year" => "2010"
];

$opel = [
    "model" => "astra",
    "speed" => "87",
    "doors" => "2",
    "year" => "2007"
];

$cars = array("bmw" => $bmw, "toyota" => $toyota, "opel" => $opel);

foreach ($cars as $key => $car) {
    echo "CAR " . "$key" . "\n";
    foreach ($car as $value){
        echo "$value ";
    }
    echo "\n\n" . "<br>" . "<br>";
}
?>
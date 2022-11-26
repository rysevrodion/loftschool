<?php
    $age = rand();
    if($age >= 18 && $age<=65){
        echo "Вам еще работать и работать";
    } elseif ($age > 65){
        echo "Вам пора на пенсию";
    } elseif ($age < 18 && $age > 0){
        echo "Вам еще рано работать";
    } else {
        echo "Неизвестный возраст";
    }
?>
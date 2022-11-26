<?php
    echo "<table>";
    for($i = 1; $i < 11;  $i++){
        echo "<tr>";
        for($j = 1; $j < 11; $j++){
            if($i % 2 == 0 && $j % 2 == 0){
                echo "<td>" . "(" . $i*$j. ")" . "</td>";
            }elseif($i % 2 == 1 && $j % 2 == 1){
                echo "<td>" . "[" . $i*$j. "]" . "</td>";
            } else {
                echo "<td>" . $i*$j . "</td>";
            }
        }
    }
?>
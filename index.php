<?php
require('functions.php');

task1([1, 2, 3]);

$task1 = task1([1,2,3], true);
echo $task1 . "<br>" . "<br>";

task2('/', 1, 2, 3, -10);

task3(9, 12);

task4();

task5_1("Карл у Клары украл Кораллы");

task5_2("Две бутылки лимонада");

task6_1();

task6_2('test.php');
?>
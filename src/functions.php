<?php
function task1(array $arr, bool $var = false)
{
    $str = "";
    if (!$var) {
        for ($i = 0; $i < count($arr); $i++) {
            echo $arr[$i] . "<p>";
        }
    } else {
        return implode('', $arr);
    }
}

function task2()
{
    $args = func_get_args();
    $count = 0;
    for ($i = 1; $i < count($args); $i++) {

        if (!is_int($args[$i]) && !is_float($args[$i])) {
            echo "Ошибка, " . $args[$i] . " не является int или float";
            $count += 1;
        }
    }

    if ($count > 0) {
        return;
    }

    if (is_string($args[0])) {
        $result = $args[1];
        switch ($args[0]) {
            case '+':
                for ($i = 2; $i < count($args); $i++) {
                    $result += $args[$i];
                }
                break;
            case '-':
                for ($i = 2; $i < count($args); $i++) {
                    $result -= $args[$i];
                }
                break;
            case '*':
                for ($i = 2; $i < count($args); $i++) {
                    $result *= $args[$i];
                }
                break;
            case '/':
                for ($i = 2; $i < count($args); $i++) {
                    $result /= $args[$i];
                }
                break;
        }
        $operator = array_shift($args);
        echo implode($operator, $args) . " = " . $result . "<br>" . "<br>";
    } else {
        echo "Ошибка, первый символ не является строкой";
    }
}

function task3($num1, $num2)
{
    if (is_int($num1) && is_int($num2)) {
        echo "<table>";
        for ($i = 1; $i <= $num1; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $num2; $j++) {
                echo "<td>" . $i * $j . "</td>";
            }
        }
        echo "</table>" . "<br>";
    } else {
        echo "Ошибка ввода";
    }
}

function task4()
{
    echo date('Y-m-d H:i:s');
    $date = strtotime("24.02.2016 00:00:00");
    echo "<br>" . $date . "<br>" . "<br>";
}

function task5_1(string $str)
{
    $str = str_replace("К", " ", $str);
    echo $str . "<br>" . "<br>";
}

function task5_2(string $str)
{
    $str = str_replace("Две", "Три", $str);
    echo $str . "<br>" . "<br>";
}

function task6_1()
{
    file_put_contents('test.txt', 'Hello world!');
}

function task6_2(string $fileName)
{
    if (file_exists("$fileName")) {
        $data = file_get_contents("$fileName");
        echo $data;
    } else {
        echo "Запрашиваемого файла не существует";
    }
}

?>
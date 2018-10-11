<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 10.10.2018
 * Time: 19:03
 */
/*
1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения.
Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;

Ноль можно считать положительным числом
 */

$a = rand(-10, 10);
$b = rand(-10, 10);
echo 'First: ' . $a;
echo 'Second: ' . $b;

function mathOperationFirst($x, $y)
{
    if ($x >= 0 && $y >= 0) {
        return $x - $y . ' positive';
    } elseif ($x < 0 && $y < 0) {
        return $x * $y . ' negative';
    }
        return $x + $y . ' various';
}
echo mathOperationFirst($a, $b);
echo '<br>';
/*
2.Присвоить переменной $а значение в промежутке [0..15].
С помощью оператора switch организовать вывод чисел от $a до 15.
*/
$a1 = rand( 0, 15);
echo 'Argument value: ' . $a1;
    switch ($a1)
    {
       case 0:
            echo 'Ваше число 0';
            break;
       case 1:
           echo 'Ваше число 1';
			break;
		case 2:
            echo 'Ваше число 2';
			break;
		case 3:
            echo 'Ваше число 3';
			break;
		case 4:
            echo 'Ваше число 4';
			break;
		case 5:
            echo 'Ваше число 5';
			break;
		case 6:
            echo 'Ваше число 6';
			break;
		case 7:
            echo 'Ваше число 7';
			break;
		case 8:
            echo 'Ваше число 8';
			break;
		case 9:
            echo 'Ваше число 9';
			break;
		case 10:
            echo 'Ваше число 10';
			break;
		case 11:
            echo 'Ваше число 11';
			break;
		case 12:
            echo 'Ваше число 12';
			break;
		case 13:
            echo 'Ваше число 13';
			break;
		case 14:
            echo 'Ваше число 14';
			break;
		case 15:
            echo 'Ваше число 15';
			break;
		}

/*
3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
Обязательно использовать оператор return.
*/

function sum($x, $y) {
    return $x + $y;
}
echo sum($a, $b);
echo '<br>';

function sub($x, $y) {
    return $x - $y;
}
echo sub($a, $b);
echo '<br>';

function mult($x, $y) {
    return $x * $y;
}
echo mult($a, $b);
echo '<br>';

function div($x, $y) {
    if ($y == 0) {
        return 'Error! Dividing by zero!';
    }
    return round($x / $y, 2);
}
echo div($a, $b);
echo '<br>';

/*
4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
В зависимости от переданного значения операции выполнить одну из арифметических операций
(использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
*/

function mathOperation($arg1, $arg2, $operation) {
    $tot = 0;
    switch ($operation) {
        case 'summation':
            $tot = sum($arg1, $arg2);
            break;
        case 'subtraction':
            $tot = sub($arg1, $arg2);
            break;
        case 'multiplication':
            $tot = mult($arg1, $arg2);
            break;
        case 'division':
            $tot = div($arg1, $arg2);
            break;
    }
    return $tot;
}
echo mathOperation($a, $b, 'summation');
echo '<br>';
echo mathOperation($a, $b, 'subtraction');
echo '<br>';
echo mathOperation($a, $b, 'multiplication');
echo '<br>';
echo mathOperation($a, $b, 'division');

/*
 6.С помощью рекурсии организовать функцию возведения числа в степень.
 Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
*/

$c = rand(2, 2);
$d = rand(2, 2);

echo 'First: ' . $c;
echo 'Second: ' . $d;

function power($val, $pow) {
    if ($pow == 1) {
        return $val;
    }
    $deg = $val * power($val, $pow - 1);
    return $deg;
}
echo '<br>';
echo power($c, $d);
?>
<!-- 5.Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон,
вывести текущий год в подвале при помощи встроенных функций PHP. -->

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Work 2</title>
</head>
<body>

<hr>
<footer style="text-align: center"> &#169; <?= date('Y') ?></footer>
<hr>

</body>
</html>


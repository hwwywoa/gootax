<?php

// Ветвления и функции

// 1. Объявите в начале скрипта две целочисленных переменных $a и $b, начальные
// значения определите с помощью констант. Написать скрипт:

$a = -1;
$b = 5;

// a. если $a и $b положительные – выведите их сумму.

if ($a > 0 && $b > 0) {
	echo $a + $b . "</br>";
}

// b. если $а и $b отрицательные – выведите из разность.

if ($a < 0 && $b < 0) {
	echo abs($a) - abs($b) . "</br>";
}

// c. если $а и $b разных знаков – выведите их произведение.

if ($a > 0 && $b < 0 || $a < 0 && $b > 0) {
	echo $a * $b . "</br>";
}

// Ноль можно считать положительным числом.

// 2. Выведите большее из чисел используя тернарный оператор.

$a > $b ? $max = $a : $max = $b;
echo $max . "</br>";

// 3. Присвойте $а значение в промежутке [0..9]. С помощью оператора switch
// организуйте вывод чисел от $a до 9;

$a = rand(0, 9);
switch ($a) {
	case 0:
		echo "0 1 2 3 4 5 6 7 8 9";
		break;
	case 1:
		echo "1 2 3 4 5 6 7 8 9";
		break;
	case 2:
		echo "2 3 4 5 6 7 8 9";
		break;
	case 3:
		echo "3 4 5 6 7 8 9";
		break;
	case 4:
		echo "4 5 6 7 8 9";
		break;
	case 5:
		echo "5 6 7 8 9";
		break;
	case 6:
		echo "6 7 8 9";
		break;
	case 7:
		echo "7 8 9";
		break;
	case 8:
		echo "8 9";
		break;
	case 9:
		echo "9";
		break;
}
echo "</br>";

// 4. Реализуйте все арифметические операции в виде функций с двумя параметрами.

function sum($a, $b)
{
	return $a + $b;
}

function substraction($a, $b)
{
	return $a - $b;
}

function mult($a, $b)
{
	return $a * $b;
}

function div($a, $b)
{
	return $a / $b;
}

// 5. Реализуйте функцию с тремя параметрами: function mathOperation($arg1, $arg2,
// $operation), где $arg1, $arg2 – значения аргументов. $operation – строка с названием
// операции. В зависимости от переданного значения операции выполните одну из
// арифметических операций (используйте функции из пункта 4) и верните
// полученное значение (используйте switch).

function mathOperation($arg1, $arg2, $operation)
{
	switch ($operation) {
		case "sum":
			return sum($arg1, $arg2);
		case "sub":
			return substraction($arg1, $arg2);
		case "mult":
			return mult($arg1, $arg2);
		case "div":
			return div($arg1, $arg2);
	}
}

// 6. С помощью рекурсии организуйте функцию возведения числа в степень. Формат:
// function power($val, $pow), где $val – заданное число, $pow – степень.

function power($val, $pow)
{
	if ($pow == 0) {
		return $val;
	} elseif ($pow == 1) {
		return $val;
	} elseif ($pow >= 2) {
		return $val * power($val, $pow - 1);
	}
}

// 7. Написать функцию, которая принимают в качестве аргументов два числа и
// вычисляет из них большее. Написать такую же функцию, чтобы она вычисляла
// меньшее число.

function findMax($a, $b)
{
	if ($a > $b) {
		return $a;
	} else {
		return $b;
	}
}

function findMin($a, $b)
{
	if ($a < $b) {
		return $a;
	} else {
		return $b;
	}
}

// Проверить, если произведение $a и $b больше 100, но меньше 1000, то от большего
// числа отнять меньшее и вывести результат на экран. А если произведение этих
// чисел больше 1000, то произведение этих чисел разделить на большее из чисел.

function checkMultiplication($a, $b)
{
	$multiplication = $a * $b;
	
	if ($multiplication > 100 && $multiplication < 1000) {
		echo findMax($a, $b) - findMin($a, $b);
	} elseif ($multiplication > 1000) {
		echo $multiplication / findMax($a, $b);
	}
}

checkMultiplication(100, 50);
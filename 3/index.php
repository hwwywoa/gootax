<?php

// 1. С помощью цикла while выведите все числа в промежутке от 0 до 100, которые
// делятся на 3 без остатка.

$i = 0;
while ($i <= 100) {
	if ($i % 3 == 0) {
		echo $i . " ";
	}
	$i++;
}

echo "</br>";

// 2. С помощью цикла do…while напишите функцию для вывода чисел от 0 до 10,
// чтобы результат выглядел так:
// 0 – это ноль
// 1 – нечетное число
// 2 – четное число
// 3 – нечетное число
// …
// 10 – четное число

$j = 0;
do {
	if ($j == 0) {
		echo $j . " - это ноль" . "</br>";
	} elseif ($j % 2 == 0) {
		echo $j . " - это четное число" . "</br>";
	} else {
		echo $j . " - это нечетное число" . "</br>"; 
	}
	$j++;
} while ($j <= 10);

// 3. Задание со звездочкой. Выведите с помощью цикла for числа от 0 до 9, НЕ
// используя тело цикла. То есть выглядеть должно вот так:
// for(…){// здесь пусто}

for ($k = -1; $k < 9; $k++, print_r($k)) {

}

echo "</br>";

// 4. Объявите массив, где в качестве ключей будут использоваться названия областей, а
// в качестве значений – массивы с названиями городов из соответствующей области.
// Выведите в цикле значения массива, чтобы результат был таким:
// Московская область:
// Москва, Зеленоград, Клин
// Ленинградская область:
// Санкт-Санкт-Петербург, Всеволожск, Павловск, Кронштадт
// Рязанская область
// …
// (названия городов можно найти на maps.yandex.ru)

$regions = [
	"Московская область" => ["Москва", "Зеленоград", "Клин"],
	"Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
	"Рязанская область" => ["Рязань", "Касимов", "Сасово"],
	"Восточные королевства" => ["Стальгорн", "Штормград", "Подгород", "Луносвет"],
];

$resultString = "";

foreach ($regions as $key => $value) {
	echo $key . ":" . "</br>";
	foreach ($value as $key => $value) {
		$resultString .= $value . ", ";	
	}
	echo substr($resultString, 0, -2);
	$resultString = "";
	echo "</br>";
}

// 5. Задание со звездочкой. Повторите предыдущее задание, но выводите на экран
// только города, начинающиеся с буквы «К».

$resultString = "";

foreach ($regions as $key => $value) {
	echo $key . ":" . "</br>";
	foreach ($value as $key => $value) {
		if (mb_substr($value, 0, 1) == "К") {
			echo $value;
		}
	}
	echo substr($resultString, 0, -2);
	$resultString = "";
	echo "</br>";
}

// 6. Объявите массив, индексами которого являются буквы русского языка, а
// значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’
// => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
// Напишите функцию транслитерации строк.

function translitString($string)
{	
	$translit = [
	"a" => "a",
	"б" => "b",
	"в" => "v",
	"г" => "g",
	"д" => "d",
	"е" => "е",
	"ё" => "yo",
	"ж" => "zh",
	"з" => "z",
	"и" => "i",
	"й" => "i",
	"к" => "k",
	"л" => "l",
	"м" => "m",
	"н" => "n",
	"о" => "o",
	"п" => "p",
	"р" => "r",
	"с" => "s",
	"т" => "t",
	"у" => "u",
	"ф" => "f",
	"х" => "h",
	"ц" => "c",
	"ч" => "ch",
	"ш" => "sh",
	"щ" => "sh",
	"ъ" => "'",
	"ы" => "i",
	"ь" => "'",
	"э" => "e",
	"ю" => "yu",
	"я" => "ya",
	];

	return strtr($string, $translit);
}

// 7. Напишите функцию, которая заменяет в строке пробелы на подчеркивания и
// возвращает видоизмененную строчку.

function stringFormatter($string)
{
	return str_replace(" ", "_", $string);
}

// 8. Объедините две ранее написанные функции в одну, которая получает строку на
// русском языке, производит транслитерацию и замену пробелов на подчеркивания
// (аналогичная задача решается при конструировании url-адресов на основе названия
// статьи в блогах).

function translitAndFormat($string)
{
	// $result = translitString($string);
	// echo stringFormatter($result);

	echo translitString(stringFormatter($string));
}

translitAndFormat("это тестовая строка");
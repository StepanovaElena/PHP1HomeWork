﻿<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 10.10.2018
 * Time: 19:03
 */
/*
1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.
*/
$a = 1;
while ($a < 100) {
    if ($a % 3 == 0) {
        echo $a++ . ' ';
    }
    $a++;
}
echo '<br>';

/*
2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
0 – это ноль.
1 – нечетное число.
2 – четное число.
3 – нечетное число.
…
10 – четное число.
*/
$b = 0;
do {
    if ($b == 0) {
        echo $b . ' – это ноль.' . '<br>';
        $b++;
    } elseif ($b % 2 != 0) {
        echo $b . ' – нечетное число.' . '<br>';
        $b++;
    } else {
        echo $b . ' – четное число.' . '<br>';
        $b++;
    }
} while ($b < 11);

echo '<br>';

/*
3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений –
массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
Московская область: Москва, Зеленоград, Клин
Ленинградская область: Санкт-Петербург, Всеволожск, Павловск, Кронштадт
Рязанская область … (названия городов можно найти на maps.yandex.ru)
*/
$areaArr = [
    'Московская область:' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область:' => ['Касимов', 'Кораблино', 'Ряжск', 'Рязань']
];

function showDistCity($arr)
{
    foreach ($arr as $key => $value) {
        echo $key;
        foreach ($value as $val) {
            if ($val == end($value)) {
                echo $val . '<br>';
            } else {
                echo $val . ', ';
            }
        }
    }
}
showDistCity($areaArr);

echo '<br>';

/*
4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские
буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк.
*/

function transliteration ($string)
{
    $lettersArr = [
        "а"=>"a","б"=>"b","в"=>"v",
        "г"=>"g","д"=>"d","е"=>"e","ё"=>"e","ж"=>"j",
        "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
        "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
        "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
        "ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"'",
        "ы"=>"yi","ь"=>"'","э"=>"e","ю"=>"yu","я"=>"ya",

        " -"=> "", ","=> " ", " "=> "-", "."=> ".", "/"=> "_",
        "-"=> "", " "=> " "
    ];

    $stringArr = preg_split('//u', $string, 0, PREG_SPLIT_NO_EMPTY);

    $translitArr = [];

    for ($i = 0; $i < count($stringArr); $i++) {
        foreach ($lettersArr as $key => $value) {
            if ($stringArr[$i] == $key) {
                array_push($translitArr, $value);
            }
        }
    }
    return implode($translitArr);
}
echo transliteration('объявить массив, индексами которого являются буквы русского языка');

echo '<br>';
echo '<br>';
/*
5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
*/

function replace($string)
{
   return preg_replace('/\s/', '_', $string);
}
echo replace('Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.');

echo '<br>';
/*
6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP.
Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно
реализовать меню с вложенными подменю? Попробовать его реализовать.
 */
$menu = [
    'Item 1',
    'Item 2' => ['Subitem 1', 'Subitem 2', 'Subitem 3'],
    'Item 3' => ['Subitem 1', 'Subitem 2' => ['Subsubitem 1', 'Subsubitem 2']]
];

function menuRender($arr)
{
    $menuArr[] = '<ul>';
    foreach ($arr as $key => $value) {

        if (is_array($value)) {
            $menuArr[] = '<li>' . $key . menuRender($value) . '</li>';
        } else {
            $menuArr[] = '<li>' . $value . '</li>';
        }
    }
    $menuArr[] = '</ul>';
    return implode($menuArr);
}
echo menuRender($menu);

echo '<br>';
/*
7. *Вывести с помощью цикла for числа от 0 до 9, не используя тело цикла. Выглядеть должно так:
for (…){ // здесь пусто}
 */

for ($i = 0; $i < 10; print $i++ . '<br>') {};

?>


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


<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php
echo "Примеры из методички </br>";
?>
<?php
echo "Hello, World!</br>";
?>
<?php
$name = "GeekBrains user";
echo "Hello, $name! </br>";
?>
<?php
define('MY_CONST', 100);
echo MY_CONST . "</br>";
?>
<?php
$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "Десятеричная система $int10 <br>";
echo "Двоичная система $int2 <br>";
echo "Восьмеричная система $int8 <br>";
echo "Шестнадцатеричная система $int16 <br>";
?>65+1+65415641+ <br>
 <!-- Эти цыфры не понял зачем возможно ошибка в методичке. -->
<?php
$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3 <br>";
?>
<?php
$a = 1;
echo "$a <br>";
echo '$a <br>';
?>
<?php
$a = 10;
$b = (boolean) $a;
?>
<?php
$a = 'Hello,';
$b = 'world';
$c = $a . $b;
echo $c . "<br>";
?>
<?php
$a = 4;
$b = 5;
echo $a + $b . '<br>';    // сложение
echo $a * $b . '<br>';    // умножение
echo $a - $b . '<br>';    // вычитание
echo $a / $b . '<br>';  // деление
echo $a % $b . '<br>'; // остаток от деления
echo $a ** $b . '<br>'; // возведение в степень
?>
<?php
$a = 4;
$b = 5;
$a += $b;
echo 'a = ' . $a . '<br>';
$a = 0;
echo $a++ . '<br>';     // Постинкремент
echo ++$a . '<br>';    // Преинкремент
echo $a-- . '<br>';     // Постдекремент
echo --$a . '<br>';    // Предекремент
?>
<?php
$a = 4;
$b = 5;
var_dump($a == $b);  // Сравнение по значению
echo "<br>";
var_dump($a === $b); // Сравнение по значению и типу
echo "<br>";
var_dump($a > $b);    // Больше
echo "<br>";
var_dump($a < $b);    // Меньше
echo "<br>";
var_dump($a <> $b);  // Не равно
echo "<br>";
var_dump($a != $b);   // Не равно
echo "<br>";
var_dump($a !== $b); // Не равно без приведения типов
echo "<br>";
var_dump($a <= $b);  // Меньше или равно
echo "<br>";
var_dump($a >= $b);  // Больше или равно
?>
</body>
</html>

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
echo "Объяснить, как работает данный код:  </br>";
?>
<?php
$a = 5;
$b = '05';
    echo "var_dump($a == $b) = ";
var_dump($b == $a); // Почему true?
    echo "// Почему true? Потому что это сравнение по значению строка '05' не явно приводится к числу 5 <br>";
    echo "var_dump((int)'012345') = ";
var_dump((int)'012345');                        // Почему 12345?
    echo "// Почему 12345? Потому что строка '012345' явно приводится к целому числу 12345 <br>";
    echo "var_dump((float)123.0 === (int)123.0) = ";
var_dump((float)123.0 === (int)123.0); // Почему false?
    echo "// Почему false? Потому что тут идет сравнение типов данных число с плавающей точкой не 
равно целому числу. <br>";
    echo "var_dump((int)0 === (int)'hello, world') = ";
var_dump((int)0 === (int)'hello, world'); // Почему true?
    echo "// Почему true? Потому что тут идет явное приведение к целому числу 'hello, world' 
определяется как 0 и типы данных тоже равны.";
?>

</body>
</html>

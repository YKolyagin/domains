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
$a = rand(0, 15);
$b = rand(0, 15);
echo "$a <br>";
echo "$b <br>";

function sum($a, $b) {
    return $a + $b;
}

function subtraction($a, $b) {
    return $a - $b;
}

function increase($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    if ($b == 0) {
        return "Бесконечность";
    } else {
        return $a / $b;
    }
}

echo sum($a, $b) . " - результат суммы<br>";
echo subtraction($a, $b) . " - результат разницы<br>";
echo increase($a, $b) . " - результат умножения<br>";
echo division($a, $b) . " - результат деления<br>";

?>

</body>
</html>

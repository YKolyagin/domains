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
$a = rand(-15, 15);
$b = rand(-15, 15);
    echo "$a <br>";
    echo "$b <br>";

if ($a >= 0 && $b >= 0) {
    echo "\$a и \$b положительные, выводим их разность " . ($a - $b);
} elseif ($a < 0 && $b < 0) {
    echo "\$a и \$b отрицательные, выводим их произведение " . ($a * $b);
} else {
    echo  "\$a и \$b разных знаков, выводим их сумму " . ($a + $b);
}
?>
</body>
</html>

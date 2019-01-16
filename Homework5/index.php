<?php
$h1 = "<h1>Используя только две переменные, поменяйте их значение местами</h1>";
$title = "<title>Используя только две переменные, поменяйте их значение местами.</title>";
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php echo $title ?>
</head>
<body>

<?php
echo $h1;
$a = 1;
$b = 2;
echo '$a = ' . $a . '<br>$b = ' . $b;
$a += $b;
$b = $a - $b;
$a = $a - $b;
echo '<br><br>Решение<br>$a += $b;<br> $b = $a - $b;<br> $a = $a - $b;<br>';
echo '<br>$a = ' . $a . '<br>$b = ' . $b;
?>
</body>
</html>

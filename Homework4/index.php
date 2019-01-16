<?php
$h1 = "<h1>Генерируется Н1</h1>";
$title = "<title>Генерация страницы из PHP.</title>";
$date = "<p>" . date ( 'Y' ) . "</p>";
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
echo $h1 . "<br> $date";
?>
</body>
</html>

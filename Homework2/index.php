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

function remove($a) {
    while ($a != 16) {
        echo "$a <br>";
        $a++;
    }
}
switch ($a) {
    case 0:
        remove($a);
        break;
    case 1:
        remove($a);
        break;
    case 2:
        remove($a);
        break;
    case 3:
        remove($a);
        break;
    case 4:
        remove($a);
        break;
    case 5:
        remove($a);
        break;
    case 6:
        remove($a);
        break;
    case 7:
        remove($a);
        break;
    case 8:
        remove($a);
        break;
    case 9:
        remove($a);
        break;
    case 10:
        remove($a);
        break;
    case 11:
        remove($a);
        break;
    case 12:
        remove($a);
        break;
    case 13:
        remove($a);
        break;
    case 14:
        remove($a);
        break;
    case 15:
        echo $a;
        break;
}
?>
</body>
</html>

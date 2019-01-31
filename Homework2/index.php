<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .btn {
            display: inline;
            border: 1px solid black;
            height: 20px;
            width: 20px;
        }
    </style>
  <title>Document</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    switch ($_POST["operations"]) {
        case "+":
            $result = (int)$_POST["numOne"] + (int)$_POST["numTwo"];
            break;
        case "-":
            $result = (int)$_POST["numOne"] - (int)$_POST["numTwo"];
            break;
        case "*":
            $result = (int)$_POST["numOne"] * (int)$_POST["numTwo"];
            break;
        case "/":
            if ((int)$_POST["numOne"] * (int)$_POST["numTwo"] === 0) {
                $result = "На ноль делить нельзя!";
            } else {
                $result = (int)$_POST["numOne"] / (int)$_POST["numTwo"];
                break;
            }
    }
}
?>
<form action="" method="post">
    <input type="text" name="numOne">
    <input type="text" name="numTwo">
    <input class="btn" type="submit" name="operations" value="+">
    <input class="btn" type="submit" name="operations" value="-">
    <input class="btn" type="submit" name="operations" value="*">
    <input class="btn" type="submit" name="operations" value="/">
<!--    <select name="operations" id="operations">
        <option value="addition">Сложение</option>
        <option value="subtraction">Вычитание</option>
        <option value="multiplication">Умножение</option>
        <option value="division">Деление</option>
    </select>-->
    <!--<input type="submit" value="Вычислить">-->
</form>
<div><?=$result ?></div>
</body>
</html>

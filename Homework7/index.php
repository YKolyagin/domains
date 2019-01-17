<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="margin: 0">
<header>
    <div style="height: 200px; width: 100%; background: darkseagreen; margin: 0; padding: 0; text-align: center">
        <h1 style="margin: 0">Шапка сайта</h1>
    </div>
</header>
<div>
    <div style="height: 400px; width: 100%; background: burlywood; margin: 0; padding: 0; text-align: center">
        <p style="margin: 0">
            <?php
            // почему я не могу в переменную положить значение date('H')?
            $hour = date('H');

            function time_1() {
                if (date('H') == 1 || date('H') == 21) {
                    echo date('H') . " час ";
                } elseif (date('H') >= 2 &&
                    date('H') <= 4) {
                    echo date('H') . " часа ";
                } elseif (date('H') == 22 ||
                    date('H') == 23) {
                    echo date('H') . " часа ";
                } else {
                    echo date('H') . " часов ";
                }
                if (date('i') % 10 == 1 ||
                    date('i') == 21 ||
                    date('i') == 31 ||
                    date('i') == 41 ||
                    date('i') == 11) {
                    echo date('i') . " минута";
                } elseif (date('i') % 10 == 2 ||
                    date('i') % 10 == 3 ||
                    date('i') % 10 == 4 &&
                    date('i') != 12 &&
                    date('i') != 13 &&
                    date('i') != 15) {
                    echo date('i') . " минуты";
                } else {
                    echo date('i') . " минут";
                }
            }
            time_1();
            ?>
        </p>
    </div>
</div>
<footer>
    <div style="height: 100px; width: 100%; background: grey; margin: 0; padding: 0; text-align: center">
        <h1 style="margin: 0">Контент</h1>
        <p>Copyright © 2014 - <?php echo date('Y')?> г.</p>
    </div>
</footer>
</body>
</html>

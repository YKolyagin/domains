<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        img {
            height: 290px;
            width: 390px;
            margin: 5px;
        }

        div {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        form {
            display: flex;
            justify-content: center;
        }

        p {
            color: red;
            font-size: 16px;
        }


        .fullImg {
            width: 1140px;
            height: 800px;
        }

        .clear {
            display: block;
            background-color: grey;
            height: 22px;
            width: 60px;
            text-align: center;
            padding: 5px 10px 5px 10px;
            text-decoration: none;
            color: black;
            position: absolute;
            top: 34px;
        }

        .view {
            display: block;
            background-color: grey;
            height: 22px;
            width: 100px;
            text-align: center;
            padding: 5px 10px 5px 10px;
            text-decoration: none;
            color: black;
            position: absolute;
            margin-top: -41px;
            margin-left: 5px;
        }

        .viewShow {
            display: block;
            background-color: grey;
            height: 22px;
            width: 100px;
            text-align: center;
            padding: 5px 10px 5px 10px;
            text-decoration: none;
            color: black;
            position: absolute;
            margin-top: 5px;
            margin-left: -510px;
        }
    </style>
    <title>Document</title>
</head>
<body>
<form action="index.php" enctype="multipart/form-data" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
    <input name="userFile" type="file" />
    <input type="submit" value="Отправить файл" />
</form>
<?php
include "photo.php";
?>
<div>
    <?php
    echo $error;
    ?>
</div>
<div><?php
    echo $linkPhoto;
    echo $clear;
    ?>
</div>
<?php
$user_date = date(DATE_RSS);
$user_ip = getenv('REMOTE_ADDR');

function user_log($user_date, $user_ip) {
    $file = "log.txt";
    if (!is_file($file)) {
        file_put_contents("log" . ".txt", "0" . PHP_EOL, FILE_APPEND);
        file_put_contents($file, " IP = " . $user_ip . " Дата: " . $user_date . PHP_EOL, FILE_APPEND);
    } elseif (count(file($file)) <= 10) {
        file_put_contents($file, " IP = " . $user_ip . " Дата: " . $user_date . PHP_EOL, FILE_APPEND);
    } else {
        $number = +file($file)[0];
        copy($file, "log" . $number . ".txt");
        $number++;
        file_put_contents("log" . ".txt", $number . PHP_EOL);
        file_put_contents($file, " IP = " . $user_ip . " Дата: " . $user_date . PHP_EOL, FILE_APPEND);
    }
}

user_log($user_date, $user_ip);

echo " IP = " . $user_ip . " Дата: " . $user_date;
?>

</body>
</html>

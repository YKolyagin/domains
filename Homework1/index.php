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
    ?>
</div>
</body>
</html>

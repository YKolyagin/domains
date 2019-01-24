<?php
$fileName = $_FILES;
//var_dump($fileName);
//echo $_FILES["userFile"]["name"] . "<br>";
//echo $_FILES["userFile"]["size"];
if ($_FILES["userFile"]["size"] >= 900000) {
    $error = "<p>Слишком большой размер файла!</p>";
} elseif ($_FILES["userFile"]["type"] !== "image/jpeg") {
    $error = "<p>Не верный формат файла!</p>";
} else {
    copy($_FILES["userFile"]["tmp_name"], "img/" . $_FILES["userFile"]["name"]);
}

//var_dump(scandir("img/"));
$images = scandir("img/");
foreach ($images as $image) {
    if ($image == '.' || $image == "..") {
        continue;
    }
    $photo = "<img src='img/{$image}'>";
    $linkPhoto .= "<a href='img/{$image}' target='_blank'>$photo</a>";
}


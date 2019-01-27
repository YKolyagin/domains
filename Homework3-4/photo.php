<?php
$link = mysqli_connect('localhost', 'root', '', 'gbphp');

$name = $_FILES["userFile"]["name"];
$sqlName = "SELECT id, name, url, view FROM photo WHERE name = '$name'";
$rowName = mysqli_query($link, $sqlName);
if (mysqli_fetch_assoc($rowName)["name"] == null && $name !== null) {
    $url = 'img/' . $name;
    $sql = "INSERT INTO photo(name, url, view) VALUES ('$name', '$url' ,0)";
    mysqli_query($link, $sql);
}

if ($_FILES["userFile"]["size"] >= 10000000) {
    $error = "<p>Слишком большой размер файла!</p>";
} elseif ($_FILES["userFile"]["type"] !== "image/jpeg" && $name !== null) {
    $error = "<p>Не верный формат файла!</p>";
} elseif ($name !== null) {
    copy($_FILES["userFile"]["tmp_name"], "img/" . $_FILES["userFile"]["name"]);
}

$sql = "SELECT id, name, url, view FROM photo ORDER BY view DESC";
$row = mysqli_query($link, $sql);

if ($_GET['id']) {
    $sql = "SELECT id, name, url, view FROM photo WHERE id = '{$_GET['id']}'";
    $row = mysqli_query($link, $sql);
    $item = mysqli_fetch_assoc($row);
    $url = $item['url'];
    $id = $item['id'];
    $view = $_GET['view'] + 1;
    $photo = "<img class='fullImg' src='{$url}'>";
    $viewShow = "<p class='viewShow'>{$_GET['view']}</p>";
    $linkPhoto = $photo . $viewShow;
    $clear = "<a class='clear' href='/'>Назад</a>";
    $up = "UPDATE photo SET view = $view WHERE id = '{$_GET['id']}'";
    mysqli_query($link, $up);

} else {
    while ($item = mysqli_fetch_assoc($row)) {
        $url = $item['url'];
        $id = $item['id'];
        $view = $item['view'];
        $photo = "<img src='{$url}'>";
        $viewShow = "<p class='view'>$view</p>";
        $linkPhoto .= "<a href='index.php?id=$id&view=$view' >$photo $viewShow</a>";
    }
}





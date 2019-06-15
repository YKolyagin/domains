<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = clearStr($_POST['name']);
    $comment = clearStr($_POST['comment']);
    $sqlComment = "INSERT INTO commets (name, comment) VALUES ( '$name', '$comment')";
    mysqli_query(connect(), $sqlComment);
    header('Location: ?page=6');
    exit;
}
$title = 'Добавление пользователя';
$content = <<<php
<form method="post">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="comment" placeholder="comment">
        <input type="submit">
</form>
php;

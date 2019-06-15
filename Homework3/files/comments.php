<?php
$title = 'Комментарии';
$sql = "SELECT id, name, comment FROM commets
        ORDER BY id DESC";
$res = mysqli_query(connect(), $sql);
$content = '<a href="?page=7">Добавить комментарий.</a>';

while($row = mysqli_fetch_assoc($res)) {
    $content .= <<<php
    <p>
    Name: {$row['name']} <br>
    Comment:  {$row['comment']}
    <br>
    </p>

php;
}
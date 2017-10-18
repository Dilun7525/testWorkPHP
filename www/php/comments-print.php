<?php

require $_SERVER['DOCUMENT_ROOT'] . '/php/bd-connect.php';

//получаем коментарии из базы
$requestSQL = 'SELECT * FROM `table_comments`';
$result = mysqli_query($link, $requestSQL) or die("Ошибка " . mysqli_error($link));

//количество записей в БД
$rows = mysqli_num_rows($result);

require $_SERVER['DOCUMENT_ROOT'] . '/php/bd-disconnect.php';

//Поля
$id = '';//для определения четности коментариев
$name = '';
$email = '';
$comment = '';

for ($i = 0; $i < $rows; $i++) {
    $row = mysqli_fetch_row($result);
    $id = $i+1;
    $name = $row[1];
    $email = $row[2];
    $comment = $row[3];

    include $_SERVER['DOCUMENT_ROOT'] . '/php/template-box-comment.php';
}
?>

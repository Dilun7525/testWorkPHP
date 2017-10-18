<?php

require $_SERVER['DOCUMENT_ROOT'] . '/php/bd-connect.php';

//получаем количество записей
$requestSQL = 'SELECT COUNT(id) FROM table_comments';
$result = mysqli_query($link, $requestSQL) or die("Ошибка запроса" . mysqli_error($link));
$countStr = mysqli_fetch_row($result)[0];

//Поля

$id = $countStr + 1;//для определения четности коментариев
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$requestSQL = "INSERT INTO table_comments (name_user, email, coment) VALUE ('" . $name . "', '" . $email . "', '" . $comment . "')";

$result = mysqli_query($link, $requestSQL) or die("Ошибка запроса" . mysqli_error($link));

include $_SERVER['DOCUMENT_ROOT'] . '/php/template-box-comment-add.php';

require $_SERVER['DOCUMENT_ROOT'] . '/php/bd-disconnect.php';
?>

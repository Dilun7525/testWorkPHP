<?php
require $_SERVER['DOCUMENT_ROOT'].'/php/bd-install.php'; // подключаем скрипт
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка подключения к БД" . mysqli_error($link));
mysqli_query($link,"SET NAMES 'utf8';");
/*mysqli_query($link,"SET CHARACTER SET 'utf8';");
mysqli_query($link,"SET SESSION collation_connection = 'utf8_general_ci';");
*/?>

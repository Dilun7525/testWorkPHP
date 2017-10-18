-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Сен 27 2017 г., 20:18
-- Версия сервера: 10.1.26-MariaDB
-- Версия PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bd-coments`
--

-- --------------------------------------------------------

--
-- Структура таблицы `table_comments`
--

CREATE TABLE `table_comments` (
  `id` int(11) NOT NULL,
  `name_user` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `coment` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `table_comments`
--

INSERT INTO `table_comments` (`id`, `name_user`, `email`, `coment`) VALUES
(1, 'Вася', 'Vasia@pup.ru', 'Всем привет, я Вася'),
(2, 'Сергей', 'Serg@pup.ru', 'привет от Сереги'),
(3, 'Таня', 'Tan@pup.ru', 'А я Таня'),
(4, 'Петр', 'Petr1@pup.ru', 'Все отлично.Петр'),
(5, 'Люба', 'Putyatishna@pup.ru', 'Просто мимо проходила'),
(6, 'Коля', 'Koliy@tur.ru', 'Коля, Коля, Николай - и все это я)))'),
(7, 'Петро', 'petro@oo.ru', 'Проверка');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `table_comments`
--
ALTER TABLE `table_comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `table_comments`
--
ALTER TABLE `table_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

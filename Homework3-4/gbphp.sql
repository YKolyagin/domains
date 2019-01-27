-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 28 2019 г., 01:55
-- Версия сервера: 5.6.41
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gbphp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE `photo` (
  `id` int(10) NOT NULL,
  `name` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `view` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `photo`
--

INSERT INTO `photo` (`id`, `name`, `url`, `view`) VALUES
(1, '6087344-www.nevseoboi.com.ua.jpg', 'img/6087344-www.nevseoboi.com.ua.jpg', 4),
(2, '6087348-www.nevseoboi.com.ua.jpg', 'img/6087348-www.nevseoboi.com.ua.jpg', 4),
(3, '6087349-www.nevseoboi.com.ua.jpg', 'img/6087349-www.nevseoboi.com.ua.jpg', 0),
(4, '6087350-www.nevseoboi.com.ua.jpg', 'img/6087350-www.nevseoboi.com.ua.jpg', 0),
(5, '6087354-www.nevseoboi.com.ua.jpg', 'img/6087354-www.nevseoboi.com.ua.jpg', 0),
(6, '6087355-www.nevseoboi.com.ua.jpg', 'img/6087355-www.nevseoboi.com.ua.jpg', 0),
(7, '6087357-www.nevseoboi.com.ua.jpg', 'img/6087357-www.nevseoboi.com.ua.jpg', 0),
(8, '6087361-www.nevseoboi.com.ua.jpg', 'img/6087361-www.nevseoboi.com.ua.jpg', 0),
(9, '6087367-www.nevseoboi.com.ua.jpg', 'img/6087367-www.nevseoboi.com.ua.jpg', 0),
(10, '6087368-www.nevseoboi.com.ua.jpg', 'img/6087368-www.nevseoboi.com.ua.jpg', 0),
(11, '6087376-www.nevseoboi.com.ua.jpg', 'img/6087376-www.nevseoboi.com.ua.jpg', 1),
(12, '6087377-www.nevseoboi.com.ua.jpg', 'img/6087377-www.nevseoboi.com.ua.jpg', 0),
(13, '6087460-www.nevseoboi.com.ua.jpg', 'img/6087460-www.nevseoboi.com.ua.jpg', 0),
(96, '6087342-www.nevseoboi.com.ua.jpg', 'img/6087342-www.nevseoboi.com.ua.jpg', 0),
(98, '6087345-www.nevseoboi.com.ua.jpg', 'img/6087345-www.nevseoboi.com.ua.jpg', 1),
(102, '6087353-www.nevseoboi.com.ua.jpg', 'img/6087353-www.nevseoboi.com.ua.jpg', 0),
(127, '6087347-www.nevseoboi.com.ua.jpg', 'img/6087347-www.nevseoboi.com.ua.jpg', 0),
(128, '6087359-www.nevseoboi.com.ua.jpg', 'img/6087359-www.nevseoboi.com.ua.jpg', 4);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

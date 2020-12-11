-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 10 2020 г., 16:20
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `technicum_base`
--

-- --------------------------------------------------------

--
-- Структура таблицы `certificate_student`
--

CREATE TABLE `certificate_student` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `patronymic` text NOT NULL,
  `group_c` text NOT NULL,
  `quantity` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `certificate_student`
--
ALTER TABLE `certificate_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `certificate_student`
--
ALTER TABLE `certificate_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

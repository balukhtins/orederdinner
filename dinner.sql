-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 02 2019 г., 17:44
-- Версия сервера: 5.7.23
-- Версия PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dinner`
--

-- --------------------------------------------------------

--
-- Структура таблицы `app`
--

CREATE TABLE `app` (
  `id` int(11) NOT NULL,
  `namber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `app`
--

INSERT INTO `app` (`id`, `namber`) VALUES
(1, 5),
(2, 20),
(7, 100),
(9, 77),
(10, 11);

-- --------------------------------------------------------

--
-- Структура таблицы `blacklist`
--

CREATE TABLE `blacklist` (
  `id` int(11) NOT NULL,
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `fordelivery`
--

CREATE TABLE `fordelivery` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `address` text NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `namber` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `home`
--

INSERT INTO `home` (`id`, `namber`) VALUES
(1, 20),
(2, 20),
(6, 17),
(9, 7),
(10, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `weektype` int(11) NOT NULL,
  `daynumber` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `info` text NOT NULL,
  `f` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `weektype`, `daynumber`, `name`, `info`, `f`) VALUES
(1, 1, 1, 'Обід домашній', '<ol>\r\n    <li>Суп рассольник<span>/380 гр/</span></li>\r\n    <li>Макароны<span>/150 гр/</span></li>\r\n    <li>Колбасные изделия в ассортименте<span>/60 гр/</span></li>\r\n    <li>Салат \"Донской\"<span>/100 гр/</span></li>\r\n  </ol>', '..\\img\\cat_img1.png'),
(2, 1, 2, 'Обід домашній', '<ol>\r\n    <li>Суп рыбный<span>/380 гр/</span></li>\r\n    <li>Каша  булгур<span>/150 гр/</span></li>\r\n    <li>Филе куриное тушеное<span>/60 гр/</span></li>\r\n    <li>Капуста квашеная<span>/100 гр/</span></li>\r\n  </ol>', '..\\img\\cat_img2.png'),
(3, 1, 3, 'Обід домашній', '<ol>\r\n    <li>Суп лапша по-домашнему<span>/380 гр/</span></li>\r\n    <li>Жаркое со свининой<span>/ 150гр/</span></li>\r\n    <li>Морковь по-корейски<span>/100 гр/</span></li>\r\n  </ol>', 'templates\\yoo_master\\img\\cat_img3.png'),
(4, 1, 4, 'Обід домашній', '<ol>\r\n    <li>Суп вермишелевый<span>/380 гр/</span></li>\r\n    <li>Каша арнаутка<span>/150 гр/</span></li>\r\n    <li>Котлета мясная<span><span>/60 гр/ </span></span></li>\r\n    <li>Салат \"Капуста по-корейски\"<span>/100 гр/</span></li>\r\n  </ol>', 'templates\\yoo_master\\img\\cat_img4.png'),
(5, 1, 5, 'Обід домашній', '<ol>\r\n    <li>Суп вермишелевый<span>/380 гр/</span></li>\r\n    <li>Каша арнаутка<span>/150 гр/</span></li>\r\n    <li>Котлета мясная<span><span>/60 гр/ </span></span></li>\r\n    <li>Салат \"Капуста по-корейски\"<span>/100 гр/</span></li>\r\n  </ol>', '..\\img\\cat_img5.png'),
(6, 2, 1, 'Обід домашній', '<ol>\r\n    <li>Суп куриный с овсянкой<span>/380 гр/</span></li>\r\n	<li>Каша гречневая<span>/150 гр/</span></li>\r\n	<li>Печень по-строгановски<span>/60 гр/</span></li>\r\n         <li>Салат \"Пекинская капуста с сухариками\"<span>/100 гр/</span></li>\r\n  </ol>', '..\\img\\cat_img1.png'),
(7, 2, 2, 'Обід домашній', ' <ol>\r\n    <li>Борщ украинский<span>/380 гр/</span></li>\r\n    <li>Пюре картофельное<span>/150 гр/</span></li>\r\n    <li>Рыба жареная<span>/60 гр/</span></li>\r\n    <li>Салат \"Загадка\"<span>/100 гр/</span></li>\r\n  </ol>', '..\\img\\cat_img2.png'),
(8, 2, 3, 'Обід домашній', '<ol>\r\n    <li>Солянка мясная<span>/380 гр/</span></li>\r\n    <li>Пельмени со сметаной<span>/150 гр/</span></li>\r\n    <li>Салат\"Оливье\"<span>/100 гр/</span></li>\r\n  </ol>', 'templates\\yoo_master\\img\\cat_img3.png'),
(9, 2, 4, 'Обід домашній', ' <ol>\r\n    <li>Борщ зелёный<span>/380 гр/</span></li>\r\n    <li>Картофель тушеный<span>/150 гр/</span></li>\r\n    <li>Мясо по-гречески<span>/60 гр/</span></li>\r\n    <li>Салат\"Крабовый\"<span>/100 гр/</span></li>\r\n  </ol>', 'templates\\yoo_master\\img\\cat_img4.png'),
(10, 2, 5, 'Обід домашній', ' <ol>\r\n    <li>Борщ украинский<span>/380 гр/</span></li>\r\n    <li>Капуста тушеная<span>/150 гр/</span></li>\r\n    <li>Колбаса жаренная<span>/60 гр/</span></li>\r\n    <li>Салат \"Нептун\"<span>/100 гр/</span></li>\r\n  </ol>', 'templates\\yoo_master\\img\\cat_img5.png');

-- --------------------------------------------------------

--
-- Структура таблицы `newusers`
--

CREATE TABLE `newusers` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `tell` int(11) NOT NULL,
  `street` varchar(64) NOT NULL,
  `home` int(11) NOT NULL,
  `app` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `newusers`
--

INSERT INTO `newusers` (`id`, `name`, `email`, `password`, `tell`, `street`, `home`, `app`) VALUES
(10, 'Александр', 'hh@mail.com', '555', 991234567, 'Калинина', 5, 66),
(11, 'Александра', 'hh@mail.com', '777', 991234567, 'Калинина', 99, 136),
(24, 'Семен', 'semen@mail.com', '777', 951234567, 'К.Великого', 1, 11),
(25, 'Тоня', 'tonya@mail.com', '123', 991234567, 'Кирова', 2, 22),
(26, 'Тоня', 'tonya@mail.com', '123', 991234567, 'Кирова', 2, 22),
(27, 'Коля', 'kolya@mail.com', '123', 661234567, 'Клёвая', 5, 15),
(28, 'Коля', 'kolya@mail.com', '123', 661234567, 'Клёвая', 5, 15);

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id` int(32) NOT NULL,
  `id_users` int(32) NOT NULL,
  `id_menu` int(32) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `id_users`, `id_menu`, `date`) VALUES
(1, 5, NULL, '2019-05-27'),
(2, 5, NULL, '2019-05-28'),
(3, 5, NULL, '2019-05-30'),
(4, 5, NULL, '2019-05-31'),
(5, 5, NULL, '2019-06-03'),
(6, 5, NULL, '2019-06-04'),
(13, 8, NULL, '2019-06-03'),
(14, 8, NULL, '2019-06-04');

-- --------------------------------------------------------

--
-- Структура таблицы `street`
--

CREATE TABLE `street` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `street`
--

INSERT INTO `street` (`id`, `name`) VALUES
(1, 'киевская '),
(2, '40 лет укр'),
(15, 'Буденого'),
(17, 'Калинина'),
(18, 'К.Великого');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `tell` int(32) NOT NULL,
  `blacklist` varchar(50) DEFAULT NULL,
  `id_street` int(11) NOT NULL,
  `id_home` int(11) NOT NULL,
  `id_app` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `tell`, `blacklist`, `id_street`, `id_home`, `id_app`) VALUES
(5, 'Игнат', 'ignat@mail.com', '1234567', 991234567, 'ДА', 1, 1, 1),
(8, 'Додон', 'dodon@mail.com', '1234567', 501234567, '', 2, 2, 2),
(19, 'Костя', 'kostya@mail.com', '000', 661234567, NULL, 15, 7, 7),
(21, 'Александр', 'hh@mail.com', '777', 991234567, NULL, 17, 9, 9),
(22, 'Сергей', 'sergey@mail.com', '555', 951234567, NULL, 18, 10, 10),
(23, 'Антон', 'anton@mail.com', '777', 951234567, NULL, 19, 11, 11),
(24, 'Cаша', 'sasha@mail.com', '777', 951234567, NULL, 20, 12, 12),
(25, 'Богдан', 'bogdan@mail.com', '777', 951234567, NULL, 18, 10, 10),
(26, 'Коля', 'kolya@mail.com', '777', 951234567, NULL, 18, 10, 10);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `app`
--
ALTER TABLE `app`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blacklist`
--
ALTER TABLE `blacklist`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fordelivery`
--
ALTER TABLE `fordelivery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `newusers`
--
ALTER TABLE `newusers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `street`
--
ALTER TABLE `street`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `app`
--
ALTER TABLE `app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `blacklist`
--
ALTER TABLE `blacklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `fordelivery`
--
ALTER TABLE `fordelivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `newusers`
--
ALTER TABLE `newusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `street`
--
ALTER TABLE `street`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

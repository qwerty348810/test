-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 13 2014 г., 04:53
-- Версия сервера: 5.5.38-log
-- Версия PHP: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `coment`
--

CREATE TABLE IF NOT EXISTS `coment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text CHARACTER SET utf8mb4 NOT NULL,
  `parent_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `coment`
--

INSERT INTO `coment` (`id`, `text`, `parent_id`) VALUES
(1, '', 56),
(2, '', 56),
(3, '', 56),
(4, '', 59),
(5, 'qqqqqqqqqqqqqqqqq', 0),
(6, 'aaaaaaaaaaaaaaaaa', 0),
(7, 'cccccccccccccccccccccc', 56),
(8, 'qazqazqaz', 58),
(9, 'qwsxcdeqzxs', 57),
(10, 'Hello', 56);

-- --------------------------------------------------------

--
-- Структура таблицы `date_of_b`
--

CREATE TABLE IF NOT EXISTS `date_of_b` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `array_num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Дамп данных таблицы `date_of_b`
--

INSERT INTO `date_of_b` (`id`, `number`, `array_num`) VALUES
(1, 1, 0),
(2, 2, 1),
(3, 3, 2),
(4, 4, 3),
(5, 5, 4),
(6, 6, 5),
(7, 7, 6),
(8, 8, 7),
(9, 9, 8),
(10, 10, 9),
(11, 11, 10),
(12, 12, 11),
(13, 13, 12),
(14, 14, 13),
(15, 15, 14),
(16, 16, 15),
(17, 17, 16),
(18, 18, 17),
(19, 19, 18),
(20, 20, 19),
(21, 21, 20),
(22, 22, 21),
(23, 23, 22),
(24, 24, 23),
(25, 25, 24),
(26, 26, 25),
(27, 27, 26),
(28, 28, 27),
(29, 29, 28),
(30, 30, 29),
(31, 31, 30);

-- --------------------------------------------------------

--
-- Структура таблицы `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(15) NOT NULL,
  `array_num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `location`
--

INSERT INTO `location` (`id`, `city`, `array_num`) VALUES
(1, 'New York', 0),
(2, 'Las Vegas', 1),
(3, 'Washington', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `messeges`
--

CREATE TABLE IF NOT EXISTS `messeges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `messeges` varchar(250) NOT NULL,
  `parent_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `messeges`
--

INSERT INTO `messeges` (`id`, `messeges`, `parent_id`) VALUES
(1, 'qwerty cool', 59),
(2, 'Hello world', 60),
(3, 'Error', 61);

-- --------------------------------------------------------

--
-- Структура таблицы `month`
--

CREATE TABLE IF NOT EXISTS `month` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(10) NOT NULL,
  `array_num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `month`
--

INSERT INTO `month` (`id`, `title`, `array_num`) VALUES
(1, 'January', 0),
(2, 'February', 1),
(3, 'March', 2),
(4, 'April', 3),
(5, 'May', 4),
(6, 'June', 5),
(7, 'July', 6),
(8, 'August', 7),
(9, 'September', 8),
(10, 'October', 9),
(11, 'November', 10),
(12, 'December', 11);

-- --------------------------------------------------------

--
-- Структура таблицы `regist`
--

CREATE TABLE IF NOT EXISTS `regist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `nickname` varchar(30) NOT NULL,
  `date_of_birth` varchar(30) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `location` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Дамп данных таблицы `regist`
--

INSERT INTO `regist` (`id`, `email`, `password`, `name`, `last_name`, `nickname`, `date_of_birth`, `sex`, `location`) VALUES
(22, 'qwerty@mail.ru', 3434, 'Qwerty', 'q', 'qw', '', 'male', '1'),
(23, 'qwerty@mail.ruq', 2345, 'Qwerty', 'q', 'qw', '', 'male', '1'),
(25, 'qaz@mail.ru', 1111, 'q', 'q', 'q', '', 'male', '1'),
(26, 'qweasd@mail.ru', 1111, 'q', 'q', 'q', '', 'male', '1'),
(28, '', 0, '', '', '', '', '', ''),
(30, 'wqwqww@mail.ru', 1121, 'q', 'q', 'q', '', 'male', '1'),
(31, 'qwedsazx@qwqw', 2323, 'q', 'q', 'q', '', 'male', '1'),
(32, 'qerty@mail.ru', 3434, 'Qwerty', 'q', 'qw', '', 'male', '1'),
(33, 'qwerty@mail.ruqq', 33333, 'Qwerty', 'q', 'qw', '', 'male', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `parent_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=67 ;

--
-- Дамп данных таблицы `topic`
--

INSERT INTO `topic` (`id`, `title`, `parent_id`) VALUES
(56, 'reclame', 0),
(57, 'recruiting', 0),
(58, 'discuss site', 0),
(59, 'childreclam', 56),
(60, 'тинchildrecruiting', 57),
(61, 'childdiscuss ', 58),
(62, 'Hello', 56),
(63, 'Cooooolll', 57),
(64, 'Cooooolll', 57),
(65, 'Delete', 58);

-- --------------------------------------------------------

--
-- Структура таблицы `year`
--

CREATE TABLE IF NOT EXISTS `year` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` int(11) NOT NULL,
  `array_num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `year`
--

INSERT INTO `year` (`id`, `title`, `array_num`) VALUES
(1, 2014, 0),
(2, 2013, 1),
(3, 2012, 2),
(4, 2011, 3),
(5, 2010, 4),
(6, 2009, 5),
(7, 2008, 6),
(8, 2007, 7),
(9, 2006, 8),
(10, 1990, 9);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

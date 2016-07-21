-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 09 2016 г., 13:28
-- Версия сервера: 5.5.47-0+deb8u1
-- Версия PHP: 5.6.19-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `andia`
--

-- --------------------------------------------------------



-- --------------------------------------------------------

--
-- Структура таблицы `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(30) NOT NULL,
  `img` varchar(255) NOT NULL,
  `full` text NOT NULL,
  `description` varchar(80) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `img`, `full`, `description`, `category`) VALUES
(1, 'Lorem Website', 'work1.jpg', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.', 'web'),
(2, 'Ipsum Logo', 'work2.jpg', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.', 'logo'),
(3, 'Dolor Prints', 'work3.jpg', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.', 'print'),
(4, 'Sit Amet Website', 'work4.jpg', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.', 'web'),
(5, 'Consectetur Logo', 'work5.jpg', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.', 'logo'),
(6, 'Adipisicing Print', 'work6.jpg', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.', 'print'),
(7, 'Elit Website', 'work7.jpg', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.', 'web'),
(8, 'Sed Do Prints', 'work8.jpg', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.', 'print'),
(9, 'Eiusmod Website', 'work9.jpg', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.', 'web'),
(10, 'Tempor Logo', 'work10.jpg', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.', 'logo'),
(11, 'Incididunt Website', 'work11.jpg', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.', 'web'),
(12, 'Ut Labore Print', 'work12.jpg', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.', 'print');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE IF NOT EXISTS `services` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `title`, `icon`, `text`) VALUES
(1, 'Beautiful Websites', 'eye', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.'),
(2, 'Responsive Layout', 'table', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. '),
(3, 'Awesome Logos', 'magic', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.'),
(4, 'High Res Prints', 'print', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.');

-- --------------------------------------------------------

--
-- Структура таблицы `slides`
--

CREATE TABLE IF NOT EXISTS `slides` (
`id` int(10) unsigned NOT NULL,
  `img` varchar(255) NOT NULL,
  `caption` text NOT NULL,
  `hide` tinyint(1) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `slides`
--

INSERT INTO `slides` (`id`, `img`, `caption`, `hide`) VALUES
(1, '1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur.', 0),
(2, '2.jpg', 'Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 0),
(3, '5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur.', 0),
(4, '6.jpg', 'Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `team`
--

CREATE TABLE IF NOT EXISTS `team` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `testimonial` varchar(82) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `team`
--

INSERT INTO `team` (`id`, `name`, `img`, `testimonial`, `email`) VALUES
(5, 'John Doe', '1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...', 'johndoe@gmail.com'),
(6, 'Jane Doe', '2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...', 'janedoe@gmail.com'),
(7, 'Vasya Pupkin', '3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...', 'rmamdaminov@gmail.com'),
(8, 'Mike Doe', '4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...', 'mikedoe@gmail.com'),
(9, 'Stiv Doe', '2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...', 'stivdoe@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `address`, `img`, `text`) VALUES
(1, 'Rustam', 'myrustam.uz', '1.jpg', '"Bu dunyoda erishib bo‘lmaydigan narsaning o‘zi yo‘q. Hayotda erisha olmagan narsamizga hayol orqali erishishimiz mumkin." '),
(2, 'Doston', 'facebook.com/Doston.Musaev.7', '2.jpg', '"Hayotda erisha olmagan narsalarga hayol orqali erishish mumkin."'),
(3, 'Lorem Ipsum', 'simple.com', '3.jpg', '"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat..."'),
(4, 'Menim Veniam', 'notrud.com', '1.jpg', '"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat..."'),
(5, 'John Doe', 'johndoe.com', '3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', '0AaNBZ4kU7a5OFkvl04oLGnG4BVxwJfI', '$2y$13$nP8wLY.ju7BDYR50AL8sE.8934L4m.NZ63130viDY7FiEVBturcaC', NULL, 'admin@andia.com', 10, 1467969337, 1467969337),
(2, 'User1', 'zVulpQxdWAMgGX0S-tuoLoNlk-0AWAZJ', '$2y$13$zkBW66MreAKN3tSF9MxzuO6GMnYGnDytgc.nWUNyG.5OXY4sr30dy', NULL, 'user1@mail.com', 10, 1468045488, 1468045488);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `portfolio`
--
ALTER TABLE `portfolio`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slides`
--
ALTER TABLE `slides`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `team`
--
ALTER TABLE `team`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `testimonials`
--
ALTER TABLE `testimonials`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `address` (`address`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `portfolio`
--
ALTER TABLE `portfolio`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `slides`
--
ALTER TABLE `slides`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `team`
--
ALTER TABLE `team`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `testimonials`
--
ALTER TABLE `testimonials`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 26 2020 г., 01:55
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testprod_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `external_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `availability` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `external_id`, `name`, `description`, `price`, `availability`, `created_at`, `updated_at`, `user_id`, `quantity`) VALUES
(1, 1, 'First', 'lorem ten ten', 5000, 1, '2020-11-11 21:00:00', '2020-11-15 21:00:00', 1, 5),
(2, 2, 'Second', 'lorem sec sec', 3000, 0, '2020-11-11 21:00:00', '2020-11-14 21:00:00', 1, 12),
(3, 1, 'третий', 'своя запись', 6050, 1, '2020-11-16 20:00:24', '2020-11-16 20:00:24', 1, 22),
(5, 1, 'Четвертая', 'второй пользователь', 2000, 0, '2020-11-16 21:00:51', '2020-11-16 21:00:51', 2, 7),
(6, 1, 'Product 1', 'lorem', 101, 0, NULL, NULL, 1, 0),
(7, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1, 0),
(8, 3, 'Product 3', 'lorem', 999, 0, NULL, NULL, 1, 0),
(9, 1, 'Product 1', 'lorem', 101, 0, NULL, NULL, 1, 0),
(10, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1, 0),
(11, 3, 'Product 3', 'lorem', 999, 0, NULL, NULL, 1, 0),
(12, 1, 'Product 1', 'lorem', 101, 0, NULL, NULL, 1, 0),
(13, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1, 0),
(14, 3, 'Product 3', 'lorem', 999, 0, NULL, NULL, 1, 0),
(15, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1, 0),
(16, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1, 0),
(17, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1, 0),
(18, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1, 0),
(19, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1, 0),
(20, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1, 0),
(21, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1, 0),
(22, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1, 0),
(23, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1, 0),
(24, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1, 0),
(25, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1, 0),
(26, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1, 0),
(27, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1, 0),
(28, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1, 0),
(29, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1, 0),
(30, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1, 0),
(31, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1, 0),
(32, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1, 0),
(33, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1, 0),
(34, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1, 0),
(35, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1, 0),
(36, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1, 0),
(37, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1, 0),
(38, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1, 0),
(39, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1, 0),
(40, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1, 0),
(41, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1, 0),
(42, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1, 0),
(43, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1, 0),
(44, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1, 0),
(45, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1, 0),
(46, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1, 0),
(47, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1, 0),
(48, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1, 0),
(49, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1, 0),
(50, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1, 0),
(51, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1, 0),
(52, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1, 0),
(53, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1, 0),
(54, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1, 0),
(55, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1, 0),
(56, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1, 0),
(57, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1, 0),
(58, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1, 0),
(59, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1, 0),
(60, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1, 0),
(61, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1, 0),
(62, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1, 0),
(63, 1, 'Олег', 'своя запись', 4700, 0, '2020-11-17 20:04:13', '2020-11-17 20:04:13', 1, 0),
(64, 3, 'Product 3', '1', 999, 1, '2020-11-25 17:21:21', '2020-11-25 17:21:21', 1, 0),
(65, 3, 'Product 3', '1', 999, 1, '2020-11-25 17:21:57', '2020-11-25 17:21:57', 1, 0),
(66, 1, 'Product 1', '1', 101, 1, '2020-11-25 17:23:02', '2020-11-25 17:23:02', 1, 0),
(67, 2, 'Product 2', '1', 199, 0, '2020-11-25 17:23:02', '2020-11-25 17:23:02', 1, 0),
(68, 3, 'Product 3', '1', 999, 1, '2020-11-25 17:23:02', '2020-11-25 17:23:02', 1, 0),
(69, 1, 'Product 1', '1', 101, 1, '2020-11-25 18:25:24', '2020-11-25 18:25:24', 1, 0),
(70, 2, 'Product 2', '1', 199, 0, '2020-11-25 18:25:25', '2020-11-25 18:25:25', 1, 0),
(71, 3, 'Product 3', '1', 999, 1, '2020-11-25 18:25:25', '2020-11-25 18:25:25', 1, 0),
(72, 1, 'test3', 'qwert', 6300, 0, '2020-11-25 18:49:56', '2020-11-25 18:49:56', 2, 0),
(73, 1, 'Product 1', '1', 101, 1, '2020-11-25 18:57:55', '2020-11-25 18:57:55', 1, 0),
(74, 2, 'Product 2', '1', 199, 0, '2020-11-25 18:57:55', '2020-11-25 18:57:55', 1, 0),
(75, 3, 'Product 3', '1', 999, 1, '2020-11-25 18:57:55', '2020-11-25 18:57:55', 1, 0),
(76, 1, 'Product 1', '1', 101, 1, '2020-11-25 18:58:13', '2020-11-25 18:58:13', 1, 0),
(77, 2, 'Product 2', '1', 199, 0, '2020-11-25 18:58:13', '2020-11-25 18:58:13', 1, 0),
(78, 3, 'Product 3', '1', 999, 1, '2020-11-25 18:58:14', '2020-11-25 18:58:14', 1, 0),
(79, 1, 'Product 1', '1', 101, 1, '2020-11-25 19:00:07', '2020-11-25 19:00:07', 1, 0),
(80, 2, 'Product 2', '1', 199, 0, '2020-11-25 19:00:07', '2020-11-25 19:00:07', 1, 0),
(81, 3, 'Product 3', '1', 999, 1, '2020-11-25 19:00:07', '2020-11-25 19:00:07', 1, 0),
(82, 1, 'Product 1', '1', 101, 1, '2020-11-25 19:01:04', '2020-11-25 19:01:04', 1, 0),
(83, 1, 'Product 1', '1', 101, 1, '2020-11-25 19:01:20', '2020-11-25 19:01:20', 1, 0),
(84, 1, 'Product 1', '1', 101, 1, '2020-11-25 19:02:02', '2020-11-25 19:02:02', 1, 0),
(85, 1, 'Product 1', '1', 101, 1, '2020-11-25 19:02:21', '2020-11-25 19:02:21', 1, 0),
(86, 1, 'Product 1', '1', 101, 1, '2020-11-25 19:07:48', '2020-11-25 19:07:48', 1, 0),
(87, 1, 'Product 1', '1', 101, 1, '2020-11-25 19:08:20', '2020-11-25 19:08:20', 1, 0),
(88, 1, 'Product 1', '1', 101, 1, '2020-11-25 19:11:10', '2020-11-25 19:11:10', 1, 0),
(89, 1, 'Product 1', '1', 101, 1, '2020-11-25 19:11:30', '2020-11-25 19:11:30', 1, 0),
(90, 1, 'Product 1', '1', 101, 1, '2020-11-25 19:11:36', '2020-11-25 19:11:36', 1, 0),
(91, 1, 'Product 1', '1', 101, 1, '2020-11-25 19:11:50', '2020-11-25 19:11:50', 1, 0),
(92, 1, 'Product 1', '1', 101, 1, '2020-11-25 19:14:55', '2020-11-25 19:14:55', 1, 0),
(93, 1, 'Margo', '1', 101, 1, '2020-11-25 19:23:28', '2020-11-25 19:23:28', 1, 0),
(94, 1, 'Product 4', '1', 101, 1, '2020-11-25 19:31:30', '2020-11-25 19:31:30', 1, 0),
(95, 2, 'Product 5', '1', 199, 0, '2020-11-25 19:31:30', '2020-11-25 19:31:30', 1, 0),
(96, 3, 'Product 6', '1', 999, 1, '2020-11-25 19:31:30', '2020-11-25 19:31:30', 1, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 17 2020 г., 22:12
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
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `external_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `label`, `external_id`, `parent_id`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'road_bike', 'Racing Bike', 1, 1, '2020-11-15 21:00:00', '2020-11-15 21:00:00', 1),
(2, 'citybike', 'City Bike', 2, 2, '2020-11-14 21:00:00', '2020-11-14 21:00:00', 1),
(4, 'hybrid', 'hybrid', 1, 1, '2020-11-17 11:20:12', '2020-11-17 11:52:00', 2),
(8, 'Category 1', 'Category 1', 1, 1, NULL, NULL, 1),
(9, 'Category 2', 'Category 2', 2, 1, NULL, NULL, 1),
(10, 'Category 33333333', 'Category 33333333', 3, 1, NULL, NULL, 1),
(56, 'Category 1', 'Category 1', 1, 1, NULL, NULL, 1),
(57, 'Category 2', 'Category 2', 2, 1, NULL, NULL, 1),
(58, 'Category 33333333', 'Category 33333333', 3, 1, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `category_product`
--

CREATE TABLE `category_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category_product`
--

INSERT INTO `category_product` (`product_id`, `category_id`) VALUES
(1, 2),
(2, 1),
(3, 1),
(4, 2),
(5, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_11_15_145948_create_products_table', 2),
(4, '2020_11_15_212354_create_categories_table', 3),
(5, '2020_11_15_213516_product_category_table', 3),
(6, '2020_11_15_221335_category_product_table', 4),
(7, '2020_11_16_223914_add_new_field_to_product_user_id_table', 5),
(8, '2020_11_17_140129_add_time_to_category_table', 6),
(9, '2020_11_17_141151_add_new_field_to_categories_table', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `external_id`, `name`, `description`, `price`, `availability`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 1, 'First', 'lorem ten ten', 5000, 1, '2020-11-11 21:00:00', '2020-11-15 21:00:00', 1),
(2, 2, 'Second', 'lorem sec sec', 3000, 0, '2020-11-11 21:00:00', '2020-11-14 21:00:00', 1),
(3, 1, 'третий', 'своя запись', 6050, 1, '2020-11-16 20:00:24', '2020-11-16 20:00:24', 1),
(5, 1, 'Четвертая', 'второй пользователь', 2000, 0, '2020-11-16 21:00:51', '2020-11-16 21:00:51', 2),
(6, 1, 'Product 1', 'lorem', 101, 0, NULL, NULL, 1),
(7, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1),
(8, 3, 'Product 3', 'lorem', 999, 0, NULL, NULL, 1),
(9, 1, 'Product 1', 'lorem', 101, 0, NULL, NULL, 1),
(10, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1),
(11, 3, 'Product 3', 'lorem', 999, 0, NULL, NULL, 1),
(12, 1, 'Product 1', 'lorem', 101, 0, NULL, NULL, 1),
(13, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1),
(14, 3, 'Product 3', 'lorem', 999, 0, NULL, NULL, 1),
(15, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1),
(16, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1),
(17, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1),
(18, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1),
(19, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1),
(20, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1),
(21, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1),
(22, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1),
(23, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1),
(24, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1),
(25, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1),
(26, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1),
(27, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1),
(28, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1),
(29, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1),
(30, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1),
(31, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1),
(32, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1),
(33, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1),
(34, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1),
(35, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1),
(36, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1),
(37, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1),
(38, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1),
(39, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1),
(40, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1),
(41, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1),
(42, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1),
(43, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1),
(44, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1),
(45, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1),
(46, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1),
(47, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1),
(48, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1),
(49, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1),
(50, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1),
(51, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1),
(52, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1),
(53, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1),
(54, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1),
(55, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1),
(56, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1),
(57, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1),
(58, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1),
(59, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1),
(60, 1, 'Product 1', 'lorem', 101, 1, NULL, NULL, 1),
(61, 2, 'Product 2', 'lorem', 199, 0, NULL, NULL, 1),
(62, 3, 'Product 3', 'lorem', 999, 1, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Руслан', 'bichoev.ruslan@yandex.ru', NULL, '$2y$10$fR01AWsuZ24acFGiRp2xyeohKlZ4C47w9wX176VCslfamr.nyMhCG', NULL, '2020-11-16 19:10:16', '2020-11-16 19:10:16'),
(2, 'Олег', 'test@mail.com', NULL, '$2y$10$8Oh/1pNwt28GXsE/aZEv9.6quUzRe44FS9OIoQPsImj3g3g3Zc/ZC', NULL, '2020-11-16 20:47:04', '2020-11-16 20:47:04');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

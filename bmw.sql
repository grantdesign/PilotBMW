-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 29 2021 г., 16:07
-- Версия сервера: 10.4.12-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bmw`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no_image.jpg',
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`id`, `name`, `description`, `text`, `img`, `category_id`, `created_at`, `updated_at`) VALUES
(3, 'BMW X1', 'В ожидании знаковых событий: новый BMW X1 появился, чтобы задавать новые стандарты. Его стремление действовать выражается прежде всего в спортивном дизайне.', 'В ожидании знаковых событий: новый BMW X1 появился, чтобы задавать новые стандарты. Его стремление действовать выражается прежде всего в спортивном дизайне.\r\n\r\nВ автомобиле сразу угадывается представитель семейства X: среди внешних особенностей обращают на себя внимание короткие свесы и длинная колесная база, ставшие неотъемлемыми чертами автомобилей класса SAV (Sports Activity Vehicle).\r\n\r\nВнешность, динамика и маневренность модели не оставляют сомнений в ее амбициях, а сочетание высокой практичности и универсальности с инновационными технологиями гарантирует максимальный комфорт, километр за километром.', 'cars/pic6.jpg', 1, NULL, NULL),
(4, 'BMW X2', 'В ожидании знаковых событий: новый BMW X1 появился, чтобы задавать новые стандарты. Его стремление действовать выражается прежде всего в спортивном дизайне.', 'В ожидании знаковых событий: новый BMW X1 появился, чтобы задавать новые стандарты. Его стремление действовать выражается прежде всего в спортивном дизайне.\r\n\r\nВ автомобиле сразу угадывается представитель семейства X: среди внешних особенностей обращают на себя внимание короткие свесы и длинная колесная база, ставшие неотъемлемыми чертами автомобилей класса SAV (Sports Activity Vehicle).\r\n\r\nВнешность, динамика и маневренность модели не оставляют сомнений в ее амбициях, а сочетание высокой практичности и универсальности с инновационными технологиями гарантирует максимальный комфорт, километр за километром.', 'cars/pic5.jpg', 1, NULL, NULL),
(5, 'BMW X3', 'В ожидании знаковых событий: новый BMW X1 появился, чтобы задавать новые стандарты. Его стремление действовать выражается прежде всего в спортивном дизайне.', 'В ожидании знаковых событий: новый BMW X1 появился, чтобы задавать новые стандарты. Его стремление действовать выражается прежде всего в спортивном дизайне.\r\n\r\nВ автомобиле сразу угадывается представитель семейства X: среди внешних особенностей обращают на себя внимание короткие свесы и длинная колесная база, ставшие неотъемлемыми чертами автомобилей класса SAV (Sports Activity Vehicle).\r\n\r\nВнешность, динамика и маневренность модели не оставляют сомнений в ее амбициях, а сочетание высокой практичности и универсальности с инновационными технологиями гарантирует максимальный комфорт, километр за километром.', 'cars/pic8.jpg', 3, NULL, NULL),
(6, 'BMW X4', 'В ожидании знаковых событий: новый BMW X1 появился, чтобы задавать новые стандарты. Его стремление действовать выражается прежде всего в спортивном дизайне.', 'В ожидании знаковых событий: новый BMW X1 появился, чтобы задавать новые стандарты. Его стремление действовать выражается прежде всего в спортивном дизайне.\r\n\r\nВ автомобиле сразу угадывается представитель семейства X: среди внешних особенностей обращают на себя внимание короткие свесы и длинная колесная база, ставшие неотъемлемыми чертами автомобилей класса SAV (Sports Activity Vehicle).\r\n\r\nВнешность, динамика и маневренность модели не оставляют сомнений в ее амбициях, а сочетание высокой практичности и универсальности с инновационными технологиями гарантирует максимальный комфорт, километр за километром.', 'cars/pic4.jpg', 1, NULL, NULL),
(7, 'BMW X5', 'В ожидании знаковых событий: новый BMW X1 появился, чтобы задавать новые стандарты. Его стремление действовать выражается прежде всего в спортивном дизайне.', 'В ожидании знаковых событий: новый BMW X1 появился, чтобы задавать новые стандарты. Его стремление действовать выражается прежде всего в спортивном дизайне.\r\n\r\nВ автомобиле сразу угадывается представитель семейства X: среди внешних особенностей обращают на себя внимание короткие свесы и длинная колесная база, ставшие неотъемлемыми чертами автомобилей класса SAV (Sports Activity Vehicle).\r\n\r\nВнешность, динамика и маневренность модели не оставляют сомнений в ее амбициях, а сочетание высокой практичности и универсальности с инновационными технологиями гарантирует максимальный комфорт, километр за километром.', 'cars/pic1.jpg', 2, NULL, NULL),
(8, 'BMW X6', 'В ожидании знаковых событий: новый BMW X1 появился, чтобы задавать новые стандарты. Его стремление действовать выражается прежде всего в спортивном дизайне.', 'В ожидании знаковых событий: новый BMW X1 появился, чтобы задавать новые стандарты. Его стремление действовать выражается прежде всего в спортивном дизайне.\r\n\r\nВ автомобиле сразу угадывается представитель семейства X: среди внешних особенностей обращают на себя внимание короткие свесы и длинная колесная база, ставшие неотъемлемыми чертами автомобилей класса SAV (Sports Activity Vehicle).\r\n\r\nВнешность, динамика и маневренность модели не оставляют сомнений в ее амбициях, а сочетание высокой практичности и универсальности с инновационными технологиями гарантирует максимальный комфорт, километр за километром.', 'cars/pic2.jpg', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'X-Series Model Cars', NULL, '2021-03-28 12:05:13'),
(2, '1-Series Model Cars', NULL, '2021-03-28 12:05:29'),
(3, '2-Series Model Cars', NULL, '2021-03-28 12:05:36');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `name`, `path`, `created_at`, `updated_at`) VALUES
(1, 'Главная', 'http://bmw.loc', NULL, '2021-03-28 12:30:15'),
(2, 'О компании', 'http://bmw.loc/about', NULL, '2021-03-28 12:30:34'),
(3, 'Модели', 'http://bmw.loc/models', NULL, '2021-03-28 12:30:41'),
(6, 'Запчасти', 'http://bmw.loc/tools', NULL, NULL),
(7, 'Контакты', 'http://bmw.loc/contact', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Александр', 'grant@mail.ru', '555444', 'Привет!', '2021-03-05 04:53:25', '2021-03-05 04:53:25'),
(2, 'Дмитрий', 'test@mail.ru', '222333', 'Как дела?', '2021-03-05 04:54:04', '2021-03-05 04:54:04');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2021_03_03_183844_create_cars_table', 1),
(8, '2021_03_03_203506_create_menus_table', 2),
(9, '2021_03_04_093918_create_categories_table', 3),
(11, '2021_03_04_173116_create_teams_table', 4),
(12, '2021_03_05_072515_create_messages_table', 5),
(13, '2021_03_25_132905_alter_table_messages_edit_phone', 6),
(14, '2021_03_28_113249_drop_column_cars_category_id', 7),
(15, '2021_03_28_115102_drop_table_cars_category_id', 8),
(16, '2021_03_28_120631_drop_column_category_id', 9),
(17, '2021_03_28_200936_create_tools_table', 10),
(18, '2021_03_29_063711_alter_table_users_add_column_is_admin', 11);

-- --------------------------------------------------------

--
-- Структура таблицы `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `teams`
--

INSERT INTO `teams` (`id`, `name`, `position`, `description`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Александр', 'Управляющий', 'Праздновать успех прекрасно, но более важно прислушаться к урокам, которые нам дают неудачи.', 'teams/t2.jpg', NULL, NULL),
(2, 'Дмитрий', 'Заместитель', 'Если кто-то предлагает вам удивительную возможность, но вы не уверены, что сможете сделать это, скажите да.', 'teams/t1.jpg', NULL, NULL),
(3, 'Максим', 'Менеджер', 'Я знаю, что если потерплю неудачу, то не буду об этом жалеть. Единственное, о чем стоить сожалеть.', 'teams/t3.jpg', NULL, NULL),
(4, 'Владимир', 'Бухгалтер', 'Тот, кто достаточно безумен, чтобы думать о том, что он может изменить мир, является именно тем, кто его меняет.', 'teams/t4.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `tools`
--

CREATE TABLE `tools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tools`
--

INSERT INTO `tools` (`id`, `name`, `description`, `text`, `img`, `car_id`, `created_at`, `updated_at`) VALUES
(1, 'Тормозной диск', 'Тормозной диск - это часть гидравлического тормозного узла, представляющая собой диск из металла, который крутится вместе с колесом.', 'Тормозная система состоит из тормозного диска или ротора, установленного на оси автомобиля, суппорта, который содержит в себе, как правило, две тормозные колодки, которые активируются гидравлическим давлением. Колодки прижимаются к обеим сторонам диска, создавая трение, которое замедляет автомобиль. Дисковые тормоза, а только они включают в себя тормозной диск, обеспечивают более линейный отклик и работают более эффективно при высоких температурах и влажных условиях, чем барабанные тормоза.', 'tools/pic10.jpg', 3, NULL, NULL),
(2, 'Сцепление в сборе', 'Сцепление — механизм, работа которого основана на действии силы трения скольжения, предназначен для передачи крутящего момента.', 'Как известно, двигатель вращается постоянно, а вот колеса – нет. И чтобы при каждой новой остановке автомобиля не приходилось глушить мотор, на коробке следует выключать ту или иную передачу, то есть путем нажатия на педаль сцепления активировать «нейтралку». При последующем движении данный узел способен снова совместить вращающийся двигатель и неподвижную КПП, плавно соединяя валы между собой. Благодаря этому происходит мягкое трогание автомобиля с места.', 'tools/pic11.jpg', 4, NULL, '2021-03-29 03:53:36'),
(3, 'Глушитель задний', 'Глушитель является важным конструктивным элементом выпускной системы, без которого эксплуатация современного автомобиля просто невозможна.', 'Отработавшие газы, покидающие цилиндры двигателя, имеют высокое давление. При движении отработавших газов по выпускной системе создаются звуковые волны, распространяющиеся быстрее газов. Глушитель преобразует энергию звуковых колебаний в тепловую энергию, чем достигается снижение уровня шума до определенного (заданного) значения. Вместе с тем с применением глушителя в выпускной системе создается противодавление, которое приводит к некоторому снижению мощности двигателя.', 'tools/pic12.jpg', 5, NULL, '2021-03-29 07:00:21'),
(5, 'Значок', 'Большое обилие моделей BMW, а также самых разнообразных модификаций зачастую приводит простого обывателя в настоящий ступор.', 'Непонятные на первый взгляд символы, цифры и буквы, которые представляют собой неразрешимую загадку. Однако это вовсе не так, потому что каждый символ несет определенную смысловую нагрузку. BMW расшифровка маркировок силовых агрегатов и кузовных индексов содержит в себе важную информацию касательно модели автомобиля, его класса, количества цилиндров, а также литраже мотора. Далее приводится BMW расшифровка самых часто используемых букв и чисел.', 'tools/P3QipWeElkvFCsdJBuenzKnku6s7tmGkxpXILa2C.jpg', 7, '2021-03-29 09:56:29', '2021-03-29 10:05:53');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Админ', 'admin@mail.ru', NULL, '$2y$10$744uqFwdOCg9hO9kQFQ5MO9/nTnl0TY6t3M1nBJhbbtHrJoV.5Thu', 1, NULL, '2021-03-29 03:24:51', '2021-03-29 03:24:51'),
(2, 'User 1', 'user1@mail.ru', NULL, '$2y$10$zNRye7Nnzzpgg.jC7LQWSOVJcmWA4C/JuvvVIZ5zHOckwA43JZpGS', 0, NULL, '2021-03-29 03:28:42', '2021-03-29 06:42:17');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tools`
--
ALTER TABLE `tools`
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
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `tools`
--
ALTER TABLE `tools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

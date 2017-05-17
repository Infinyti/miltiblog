-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 17 2017 г., 16:57
-- Версия сервера: 5.5.50
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `multiblog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `author_id`, `created_at`, `updated_at`) VALUES
(1, 'Laravel ', 'q', 1, NULL, '2017-05-15 17:25:17'),
(2, ' Symfony', 'Symfony is a PHP web application framework and a set of reusable PHP components/libraries. Symfony was published as free software on October 18, 2005 and released under the MIT license.', 0, NULL, NULL),
(3, 'CodeIgniter', 'CodeIgniter is loosely based on the popular model–view–controller (MVC) development pattern. While controller classes are a necessary part of development under CodeIgniter, models and views are optional.[2] Codeigniter can be also modified to use Hierarchical Model View Controller (HMVC[3]) which allows developers to maintain modular grouping of Controller, Models and View arranged in a sub-directory format.', 0, NULL, NULL),
(11, 'Категория 0', 'Описание 0', 1, '2017-05-14 01:24:38', '2017-05-14 06:52:46'),
(12, 'Категория 1', 'Описание', 1, '2017-05-14 01:31:41', '2017-05-14 06:52:20'),
(13, 'test', 'test', 2, '2017-05-16 10:48:36', '2017-05-16 10:48:36'),
(14, 'dbzd', 'dzhbetdzbd', 1, '2017-05-16 14:58:21', '2017-05-16 14:58:21'),
(15, 'eathsrt', 'jsrthrt', 1, '2017-05-16 14:58:28', '2017-05-16 14:58:28'),
(16, 'htsrthsr', 'thjsrths', 1, '2017-05-16 14:58:31', '2017-05-16 14:58:31');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL,
  `nick` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `note_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_05_12_041558_create_categories_table', 1),
('2017_05_12_041731_create_comments_table', 1),
('2017_05_12_041904_create_posts_table', 1),
('2017_05_16_182416_create_users_status', 1),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_05_12_041558_create_categories_table', 1),
('2017_05_12_041731_create_comments_table', 1),
('2017_05_12_041904_create_posts_table', 1),
('2017_05_16_182416_create_users_status', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `img`, `author_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 'Laravel — бесплатный веб-фреймворк с открытым кодом, предназначенный для разработки с использованием архитектурной модели MVC (англ. Model View Controller — модель-представление-контроллер). Laravel выпущен под лицензией MIT. Исходный код проекта размещается на GitHub[1].  В результате опроса sitepoint.com в декабре 2013 года о самых популярных PHP-фреймворках Laravel занял место самого многообещающего проекта на 2014 год[2].', 'images/posts/LaravelLogo.png', 0, 1, '2017-05-12 21:26:27', '2017-05-12 21:26:27'),
(2, 'Laravel - история', 'История[править | править вики-текст] Laravel был создан Taylor Otwell как более функциональная альтернатива CodeIgniter, который не предусматривал различные дополнительные функции. Первый бета-релиз Laravel стал доступен 9 июня 2011 года, а Laravel 1 вышел в этом же месяце. Laravel 1 включает в себя встроенную поддержку для аутентификации, локализации, модели, представления, сессий, маршрутизации и других механизмов.  Laravel 2 был выпущен в сентябре 2011 года. Основные новые функции включают в себя поддержку контроллеров, которые сделали фреймворк полностью MVC-совместимым, встроенную поддержку для инверсии управления и систему шаблонов Blade.  Laravel 3 был выпущен в феврале 2012 года с набором новых функций, включая интерфейс командной строки (CLI) под именем "Artisan", встроенную поддержку нескольких систем управления базами данных, миграции баз данных в виде контроля версий, обработку событий. Выпуск Laravel 3 получил значительное увеличение числа пользователей, что повлияло на его популярность.', 'images/posts/sfdwggfbe.jpg', 0, 1, '2017-05-12 22:47:10', '2017-05-12 22:47:10'),
(3, 'Laravel - возможности', 'Возможности[править | править вики-текст] Ключевые особенности, лежащие в основе архитектуры Laravel[1][3]:  Пакеты (англ. packages) — позволяют создавать и подключать модули в формате Composer к приложению на Laravel. Многие дополнительные возможности уже доступны в виде таких модулей. Eloquent ORM — реализация шаблона проектирования ActiveRecord на PHP. Позволяет строго определить отношения между объектами базы данных. Стандартный для Laravel построитель запросов Fluent поддерживается ядром Eloquent. Логика приложения — часть разрабатываемого приложения, объявленная либо при помощи контроллеров, либо маршрутов (функций-замыканий). Синтаксис объявлений похож на синтаксис, используемый в каркасе Sinatra. Обратная маршрутизация связывает между собой генерируемые приложением ссылки и маршруты, позволяя изменять последние с автоматическим обновлением связанных ссылок. При создании ссылок с помощью именованных маршрутов Laravel автоматически генерирует конечные URL. REST-контроллеры — дополнительный слой для разделения логики обработки GET- и POST-запросов HTTP. Автозагрузка классов — механизм автоматической загрузки классов PHP без необходимости подключать файлы их определений в include. Загрузка по требованию предотвращает загрузку ненужных компонентов; загружаются только те из них, которые действительно используются. Составители представлений (англ. view composers) — блоки кода, которые выполняются при генерации представления (шаблона). Инверсия управления (англ. Inversion of Control) — позволяет получать экземпляры объектов по принципу обратного управления. Также может использоваться для создания и получения объектов-одиночек (англ. singleton). Миграции — система управления версиями для баз данных. Позволяет связывать изменения в коде приложения с изменениями, которые требуется внести в структуру БД, что упрощает развёртывание и обновление приложения. Модульное тестирование (юнит-тесты) — играет очень большую роль в Laravel, который сам по себе содержит большое число тестов для предотвращения регрессий (ошибок вследствие обновления кода или исправления других ошибок). Страничный вывод (англ. pagination) — упрощает генерацию страниц, заменяя различные способы решения этой задачи единым механизмом, встроенным в Laravel.', 'images/posts/maxresdefault.jpg', 0, 1, '2017-05-13 00:12:01', '2017-05-13 00:12:01'),
(4, 'Symfony', 'Symfony — свободный фреймворк, написанный на PHP, который использует паттерн Model-View-Controller.  Symfony предлагает быструю разработку и управление веб-приложениями, позволяет легко решать рутинные задачи веб-программиста. Работает только с PHP 5 и выше. Имеет поддержку множества баз данных (MySQL, PostgreSQL, SQLite или любая другая PDO-совместимая СУБД). Информация о реляционной базе данных в проекте должна быть связана с объектной моделью. Это можно сделать при помощи ORM инструмента. Symfony поставляется с двумя из них: Propel и Doctrine.', 'images/posts/symfony_logo_vertical.png', 0, 2, '2017-05-13 07:53:54', '2017-05-13 07:53:54'),
(5, 'CodeIgniter', 'CodeIgniter — популярный MVC фреймворк с открытым исходным кодом, написанный на языке программирования PHP, для разработки полноценных веб-систем и приложений. Разработан компанией EllisLab (англ.)русск., а также Риком Эллисом (Rick Ellis) и Полом Бурдиком (Paul Burdick).  Старая версия CodeIgniter’а (CodeIgniter 2.x), как и более ранние версии, распространяются под проприетарной лицензией в стиле Apache/BSD, однако текущая ветвь CodeIgniter 3 перелицензирована под MIT[2].', 'images/posts/codeIgniter.jpg', 0, 3, '2017-05-13 07:57:34', '2017-05-13 07:57:34'),
(10, '1dgfhrdgnf', '1gnxfgnxfgn', 'images/posts/no_image.png', 1, 11, '2017-05-14 04:05:09', '2017-05-14 04:05:09'),
(11, 'bdfbd', 'fbdfbdfb', 'images/posts/codeIgniter.jpg', 1, 11, '2017-05-14 05:39:28', '2017-05-14 05:39:28'),
(12, 'qwerty', 'qwerty', 'images/posts/maxresdefault.jpg', 1, 2, '2017-05-15 06:40:56', '2017-05-15 06:40:56'),
(13, 'dfbzdfb', '<p>d<strong>cfbdzxfbdsfb</strong></p><p><strong>dfbsrgbsdf<em>DBfzdfb</em></strong></p><p><strong><em>aefbasRfbSFbSBVSFb</em></strong></p><p><strong><em>FSbfs&nbsp;</em></strong></p>', 'images/posts/no_image.png', 1, 1, '2017-05-15 08:49:10', '2017-05-15 08:49:10'),
(14, 'cbzdfn bxzdfn', '&nbsp;xdgn zdfgn zdgn', 'images/posts/no_image.png', 1, 1, '2017-05-15 08:52:11', '2017-05-15 08:52:11'),
(16, '2222222222', '<b><i><font face="impact">2222222222222222</font></i></b>', 'images/posts/no_image.png', 1, 1, '2017-05-15 08:52:46', '2017-05-15 08:52:46'),
(17, 'sfdnzfgnz', '<p>dfgnzdgnzdgnzdfgn</p>', 'images/posts/codeIgniter.jpg', 1, 2, '2017-05-15 16:12:09', '2017-05-15 16:12:09'),
(18, 'fbzdfbzdfbzdfbzdfbzdfb', '<p><strong>Добавление нового поста</strong></p><p><em>Добавление нового поста</em></p><ol><li>Добавление нового поста</li></ol><ul><li>Добавление нового поста</li></ul><p><a href="http://multiblog.loc/post/17">Добавление нового поста</a></p>', 'images/posts/no_image.png', 1, 1, '2017-05-15 16:24:45', '2017-05-15 16:24:45'),
(19, 'test', '<p>Test</p>', 'images/posts/codeIgniter.jpg', 1, 1, '2017-05-15 17:31:07', '2017-05-15 17:31:07'),
(20, 'ачияваиява', '<p>ияваияваияываи</p>', 'images/posts/58832_300x300.jpg', 2, 11, '2017-05-16 11:07:26', '2017-05-16 11:07:26');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` int(11) DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'images/avatars/find_user.jpg',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `roles`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin1', 'admin1@gmail.com', '$2y$10$YZKQj7YPASP40laAPL39wOWlwKNkcq.pXENgmKGGEcA5i8g9Ghlvq', 1, 'images/avatars/office-small.jpg', 'LIdH11qbY2ikTVAAZ0TNeJ3CVyxHoY6LRHzG7pGHmElwx6QiUzUBZctdptns', '2017-05-15 05:45:38', '2017-05-17 10:16:57'),
(2, 'bloger', 'bloger@gmail.com', '$2y$10$n4wKEWAn.tuUf1Xjlollw.icC.Z6.qt46KYcvpjuoKpGYAnd8eOzS', 2, 'images/avatars/find_user.jpg', 'Xt51i0CtqRYoArWPxAaWKRpnAFg04WkNlFVeP3zmToSRO0whFn71L7mVT0lQ', '2017-05-16 06:15:47', '2017-05-16 10:08:12'),
(3, 'no_bloger', 'no_bloger@gmail.com', '$2y$10$2RGYKE2YqVCebtbXYg0Crukhd0NfkBpLGV5/DFiBPdoSV.4aiORxG', NULL, 'images/avatars/find_user.jpg', 'GfaoPCexL2VHSmwjx6GbPQZHOjSfJsXn9VM9O5N8kt1EUMRPG6fBIv65DDbP', '2017-05-16 10:09:21', '2017-05-16 10:23:44');

-- --------------------------------------------------------

--
-- Структура таблицы `users_status`
--

CREATE TABLE IF NOT EXISTS `users_status` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users_status`
--

INSERT INTO `users_status` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'bloger');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `users_status`
--
ALTER TABLE `users_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `users_status`
--
ALTER TABLE `users_status`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

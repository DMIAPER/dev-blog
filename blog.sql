-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-08-2017 a las 17:06:05
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idVideo` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `user_id`, `category_id`, `created_at`, `updated_at`, `slug`, `idVideo`) VALUES
(8, 'INSTALAR ANDROID STUDIO - CAPITULO 1', 'Para empezar con este Curso de Programación Android, vamos a describir los pasos básicos para disponer en nuestro PC del entorno y las herramientas necesarias para comenzar a programar aplicaciones para la plataforma Android. No voy a ser exhaustivo, ya que existen muy buenos tutoriales sobre la instalación de Java, Android Studio y el SDK de Android, incluida la documentación oficial de desarrollo de Android,&nbsp; por lo que tan sólo enumeraré los pasos necesarios de instalación y configuración, y proporcionaré los enlaces a las distintas herramientas.', 1, 6, '2017-08-10 15:56:09', '2017-08-11 07:59:14', 'primero-pasos-con-android-studio', 'FqcmdmJcSC4'),
(9, 'ANDROID STUDIO PRIMER PROYECTO - CAPITULO 2 - 1/2', 'En esta ocasión, os mostramos la primera parte de 2 videos en los que os vamos a enseñar a crear vuestra primera aplicación, después de instalar nuestro entorno de desarrollo para Android y comentar la estructura básica de un proyecto y los diferentes componentes software que podemos utilizar ya es hora de empezar a escribir algo de código. Y como siempre lo mejor es empezar por escribir una aplicación sencilla.', 1, 6, '2017-08-10 16:08:28', '2017-08-11 07:53:35', 'primer-proyecto-en-androidstudio', 'MktOPqfbM4E'),
(14, 'HTML5 SU EJEMPLAR Y SU ESTRUCTURA - LMSGI - CAPITULO 2', 'En este nuevo video, podréis ver los atributos que le podemos asignar a una etiqueta HMTL, los diferentes elementos que puede contener la etiqueta BODY, las etiquetas mas usadas en el nodo BODY y la estructura basica de un documento HTML. En el siguiente enlace podéis obtener los documento HTML que se han usado en vídeo. https://github.com/dev3apps/LMSGI.git', 1, 5, '2017-08-11 07:06:36', '2017-08-11 07:19:06', 'html5-su-ejemplar-y-su-estructura-lmsgi-capitulo-2', '_TIkruiU1Xs'),
(15, 'SQL - CONCEPTOS BASICOS DE BASES DE DATOS - CAPITULO 1', 'En este capítulo se introducen conceptos básicos de bases de datos, mysql, y phpmyadmin.', 1, 4, '2017-08-11 07:13:09', '2017-08-11 07:18:35', 'sql-conceptos-basicos-de-bases-de-datos-capitulo-1', 'uUFJEwg-_l4'),
(16, 'SQL - CREACION DE BASES DE DATOS CON PHPMYADMIN - CAPITULO 2', 'En este capítulo 2 se introduce sintaxis de SQL y con PHPMYADMIN se crea la base de datos y tablas.', 1, 4, '2017-08-11 07:41:24', '2017-08-11 07:41:24', 'sql-creacion-de-bases-de-datos-con-phpmyadmin-capitulo-2', 'Dj0AUV3cWEk'),
(17, 'INTRODUCCION A HTML5 - LMSGI - CAPITULO 1', 'Bienvenidos al curso de lenguaje de HTML, en este video veremos un poco de historia sobre HTML y la diferencia entre los diferentes Prólogos de cada documento HTML.', 1, 5, '2017-08-11 07:45:01', '2017-08-11 07:45:01', 'introduccion-a-html5-lmsgi-capitulo-1', 'j4G7mMbauqA'),
(18, 'ANDROID STUDIO PRIMER PROYECTO - CAPITULO 2 - 2/2', 'En esta ocasión, os mostramos la segunda parte del video en el que os\r\n vamos a enseñar a crear vuestra primera aplicación, después de instalar\r\n nuestro entorno de desarrollo para Android y comentar la estructura \r\nbásica de un proyecto y los diferentes componentes software que podemos \r\nutilizar ya es hora de empezar a escribir algo de código. Y como siempre\r\n lo mejor es empezar por escribir una aplicación sencilla.', 1, 6, '2017-08-11 07:52:14', '2017-08-17 13:11:55', 'android-studio-primer-proyecto-capitulo-2-2-2', 'uTz0aUnAPr8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `article_tag`
--

CREATE TABLE `article_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `article_tag`
--

INSERT INTO `article_tag` (`id`, `article_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(37, 8, 104, NULL, NULL),
(38, 8, 105, NULL, NULL),
(39, 8, 107, NULL, NULL),
(40, 9, 104, NULL, NULL),
(41, 9, 105, NULL, NULL),
(42, 9, 106, NULL, NULL),
(47, 14, 110, NULL, NULL),
(48, 14, 109, NULL, NULL),
(49, 14, 112, NULL, NULL),
(50, 15, 116, NULL, NULL),
(51, 15, 113, NULL, NULL),
(52, 15, 114, NULL, NULL),
(53, 16, 116, NULL, NULL),
(54, 16, 108, NULL, NULL),
(55, 16, 114, NULL, NULL),
(56, 17, 109, NULL, NULL),
(57, 17, 111, NULL, NULL),
(58, 17, 112, NULL, NULL),
(59, 18, 104, NULL, NULL),
(60, 18, 105, NULL, NULL),
(61, 18, 108, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `descripcion`, `created_at`, `updated_at`, `image`) VALUES
(4, 'Bases de Datos', 'Aprende a gestionar bases de datos a través de uno de los manejadores más populares, mySQL. En este curso aprenderás, desde la teoría en que se fundamentan las Bases de Datos hasta su implementación, pasando por el conocimiento del lenguaje estándar SQL.', '2017-08-10 15:17:47', '2017-08-10 15:17:47', 'sql_curso.jpg'),
(5, 'Html5', 'Conoce y aprende a usar las nuevas etiquetas del estándar de HTML.', '2017-08-10 15:18:40', '2017-08-10 15:18:40', 'html_curso.jpg'),
(6, 'Android', 'Aprende a programar aplicaciones para Android desde cero, utilizando Android Studio.', '2017-08-10 15:21:36', '2017-08-10 15:21:36', 'android_curso.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `name`, `article_id`, `created_at`, `updated_at`) VALUES
(8, 'android_1.png', 8, '2017-08-10 15:56:09', '2017-08-10 15:56:09'),
(9, 'android_2_1.png', 9, '2017-08-10 16:08:28', '2017-08-10 16:08:28'),
(14, 'html_2.png', 14, '2017-08-11 07:06:37', '2017-08-11 07:06:37'),
(15, 'sql_1.png', 15, '2017-08-11 07:13:09', '2017-08-11 07:13:09'),
(16, 'sql_2.png', 16, '2017-08-11 07:41:24', '2017-08-11 07:41:24'),
(17, 'html_1.png', 17, '2017-08-11 07:45:01', '2017-08-11 07:45:01'),
(18, 'android_2_2.png', 18, '2017-08-11 07:52:14', '2017-08-11 07:52:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(43, '2014_10_12_000000_create_users_table', 1),
(44, '2014_10_12_100000_create_password_resets_table', 1),
(45, '2017_07_13_111016_add_categories_table', 1),
(46, '2017_07_13_113451_add_articles_table', 1),
(47, '2017_07_13_122945_add_images_table', 1),
(48, '2017_07_13_125554_add_tags_table', 1),
(49, '2017_07_25_114730_add_slug_to_articles_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(104, 'Android', '2017-08-06 08:18:55', '2017-08-06 08:20:01'),
(105, 'AndroidStudio', '2017-08-06 08:19:13', '2017-08-06 08:19:50'),
(106, 'SDK', '2017-08-06 08:19:24', '2017-08-06 08:19:24'),
(107, 'Programación', '2017-08-06 08:19:40', '2017-08-06 08:19:40'),
(108, 'dev3apps', '2017-08-11 07:01:00', '2017-08-11 07:01:00'),
(109, 'LMSGI', '2017-08-11 07:02:05', '2017-08-11 07:02:05'),
(110, 'Aplcaciones Web', '2017-08-11 07:02:18', '2017-08-11 07:02:18'),
(111, 'paginas web', '2017-08-11 07:02:45', '2017-08-11 07:02:45'),
(112, 'que es html', '2017-08-11 07:03:01', '2017-08-11 07:03:01'),
(113, 'Desarrollo multiplaformas', '2017-08-11 07:08:52', '2017-08-11 07:08:52'),
(114, 'mysql', '2017-08-11 07:09:08', '2017-08-11 07:09:08'),
(115, 'phpmyadmin', '2017-08-11 07:09:35', '2017-08-11 07:09:35'),
(116, 'APRENDER SQL', '2017-08-11 07:09:49', '2017-08-11 07:09:49'),
(117, 'SQL', '2017-08-11 07:10:11', '2017-08-11 07:10:11'),
(118, 'w3schools html tutorial', '2017-08-11 07:45:40', '2017-08-11 07:45:40'),
(119, 'css html', '2017-08-11 07:46:02', '2017-08-11 07:46:02'),
(120, 'crear un sitio', '2017-08-11 07:46:23', '2017-08-11 07:46:23'),
(121, 'android studio app', '2017-08-11 07:53:50', '2017-08-11 07:53:50'),
(122, 'android studio download', '2017-08-11 07:54:00', '2017-08-11 07:54:00'),
(123, 'android studio desde cero', '2017-08-11 07:54:14', '2017-08-11 07:54:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('member','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pedro Miranda', 'mirandanisa@hotmail.com', '$2y$10$dL7MqK8PkDp7FDszvGzd9OnT7ZkFT/yv6xlcnJxdlf2uB9YuFq1Va', 'admin', 'V0x868mWIAwMKSElTBfSTBwzf6DycayK1TCx0YK0eI4pOf7mwG6QJBfGB2Q9', '2017-07-25 10:42:16', '2017-07-25 10:42:16'),
(54, 'Ruben', 'ronnmad8@gmail.com', '$2y$10$rH.R0OsRrYpd6x9i/Z227usE83wP2R68jWTH2maeXbXKVJwLOhGIC', 'member', '6X77cq96uoNrLDrwThWfRETUdnBI1wC4NdTiaIv5ZO7joPJXpxQJzbKjuE2p', '2017-08-11 13:29:34', '2017-08-11 13:29:34'),
(55, 'Diógenes Miaja', 'drdrakun@gmail.com', '$2y$10$V06eCRfg1QoJpklzENBY8u2EGf5LM91V6VG6KxfI5stKLLYldUYw2', 'member', NULL, '2017-08-11 14:01:49', '2017-08-11 14:01:49');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`),
  ADD KEY `articles_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `article_tag`
--
ALTER TABLE `article_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_tag_article_id_foreign` (`article_id`),
  ADD KEY `article_tag_tag_id_foreign` (`tag_id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_article_id_foreign` (`article_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `article_tag`
--
ALTER TABLE `article_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `article_tag`
--
ALTER TABLE `article_tag`
  ADD CONSTRAINT `article_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

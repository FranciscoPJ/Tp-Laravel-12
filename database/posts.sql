-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2025 a las 18:41:06
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_myblog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

-- CREATE TABLE `posts` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `title` varchar(255) NOT NULL,
--   `poster` varchar(255) NOT NULL,
--   `habilitated` tinyint(1) NOT NULL DEFAULT 0,
--   `content` text NOT NULL,
--   `id_user` bigint(20) UNSIGNED NOT NULL,
--   `id_category` bigint(20) UNSIGNED NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` ( `title`, `poster`, `habilitated`, `content`, `id_user`, `id_category`, `created_at`, `updated_at`) VALUES
( 'Formula 1', 'https://media.formula1.com/image/upload/f_auto,c_limit,w_1440,q_auto/f_auto,c_fill,q_auto,w_1320,t_16by9North,g_faces,ar_16:9/trackside-images/2024/F1_Grand_Prix_of_Emilia_Romagna/2153678527', 1, 'Contenido Formula 1', 1, 3, '2025-05-31 22:48:32', '2025-05-31 22:48:32'),
( 'Formula 2', 'https://www.autohebdo.fr/app/uploads/2022/10/DPPI_03322022_067-753x494.jpg', 0, 'Contenido Formula 2', 1, 3, '2025-05-31 22:52:17', '2025-06-04 08:18:21'),
('Formula 3', 'https://cdn-8.motorsport.com/images/amp/YBeJM5n2/s1200/matteo-nannini-hwa-racelab-1.webp', 1, 'Contenido Formula 3', 2, 3, '2025-05-31 22:54:01', '2025-05-31 22:54:01'),
( 'Formula 4', 'https://fiaformula4.com/wp-content/uploads/2023/06/7-BLX_5564.jpg-2.jpg', 1, 'Contenido Formula 4', 1, 3, '2025-05-31 23:19:36', '2025-05-31 23:19:36'),
( 'La evolución de la inteligencia artificial', 'https://whitestack.com/wp-content/uploads/2023/11/AI-1.webp', 1, 'Exploramos cómo la IA está cambiando nuestras vidas.', 1, 1, '2025-06-04 05:17:32', '2025-06-04 05:17:32'),
( 'Top 5 gadgets tecnológicos del 2025', 'https://images.unsplash.com/photo-1518770660439-4636190af475', 1, 'Una lista de los dispositivos más innovadores del año.', 1, 1, '2025-06-04 05:17:32', '2025-06-04 05:17:32'),
( 'Ciberseguridad en la era moderna', 'https://www.noticiasensalud.com/wp-content/uploads/2021/04/Medios-actuales-para-cuidar-de-la-salud-bienestar-fisico-y-mental.jpg', 1, 'Consejos clave para mantener tu información segura.', 1, 1, '2025-06-04 05:17:32', '2025-06-04 05:17:32'),
( 'Beneficios del ayuno intermitente', 'https://yoelijocuidarme.es/wp-content/uploads/2020/05/ayuno-intermitente-905x613.jpg', 1, 'Analizamos las ventajas y riesgos del ayuno intermitente.', 1, 2, '2025-06-04 05:17:32', '2025-06-04 05:17:32'),
( 'Ejercicios para mejorar tu postura', 'https://www.eldiariodecarlospaz.com.ar/u/fotografias/m/2024/10/1/f736x414-331051_374598_5050.jpg', 1, 'Rutinas simples para mantener una espalda saludable.', 1, 2, '2025-06-04 05:17:32', '2025-06-04 05:17:32'),
( 'Los mejores goles de la Champions League', 'https://images.unsplash.com/photo-1508780709619-79562169bc64', 1, 'Un repaso a las jugadas más memorables.', 1, 3, '2025-06-04 05:17:32', '2025-06-04 05:17:32'),
( 'Entrenamiento funcional en casa', 'https://aprende.com/wp-content/uploads/2024/01/entrenamiento-funcional-en-casa.webp', 1, 'Cómo mantenerte en forma sin ir al gimnasio.', 1, 3, '2025-06-04 05:17:32', '2025-06-04 05:17:32'),
( 'Maratones populares del mundo', 'https://www.trailrun.es/uploads/s1/11/95/09/58/maraton-de-nueva-york_3_565x325.jpeg', 1, 'Lista de las carreras más importantes a nivel mundial.', 1, 3, '2025-06-04 05:17:32', '2025-06-04 05:17:32'),
( 'Series imperdibles del 2025', 'https://capital.es/wp-content/uploads/2025/01/Montaje_web_Series_2025.jpeg.webp', 1, 'Recomendaciones de series para ver este año.', 1, 4, '2025-06-04 05:17:32', '2025-06-04 05:17:32'),
( 'El regreso del cine clásico', 'https://asalallena.com.ar/wp-content/uploads/2020/09/bttf.jpg', 1, 'Películas que están reviviendo el amor por lo retro.', 1, 4, '2025-06-04 05:17:32', '2025-06-04 05:17:32'),
( 'Top 10 videojuegos del momento', 'https://i.blogs.es/24b741/1366_2000/650_1200.webp', 1, 'Lo más jugado por gamers de todo el mundo.', 1, 4, '2025-06-04 05:17:32', '2025-06-04 05:17:32'),
( 'Apps para aprender idiomas', 'https://educatics.ar/wp-content/uploads/aplicaciones-educativas-de-idiomas.jpg', 1, 'Las mejores herramientas móviles para aprender nuevos idiomas.', 1, 5, '2025-06-04 05:17:32', '2025-06-04 05:17:32'),
( 'Educación online vs presencial', 'https://blogthinkbig.com/wp-content/uploads/sites/4/2020/10/CABECERA_online-vs-presencial-1.jpg?resize=1040%2C400', 1, 'Comparativa de métodos de enseñanza.', 1, 5, '2025-06-04 05:17:32', '2025-06-04 05:17:32'),
( 'Cómo estudiar de forma más eficiente', 'https://clubpreparatoriano.com/images/como-estudiar.jpg', 1, 'Técnicas para mejorar tu rendimiento académico.', 1, 5, '2025-06-04 05:17:32', '2025-06-04 05:17:32');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_id_user_foreign` (`id_user`),
  ADD KEY `posts_id_category_foreign` (`id_category`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

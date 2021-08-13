-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-08-2021 a las 05:37:54
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto2021`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_com` bigint(25) NOT NULL,
  `id_pub_com` bigint(20) NOT NULL,
  `id_usu_com` bigint(11) NOT NULL,
  `coment` varchar(3500) NOT NULL,
  `solucion` varchar(7999) DEFAULT NULL,
  `fecha_com` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_com`, `id_pub_com`, `id_usu_com`, `coment`, `solucion`, `fecha_com`) VALUES
(1, 4, 18, 'hola', '', '2021-07-29 19:22:18'),
(2, 4, 18, 'jyrhtegwf', '', '2021-07-29 19:25:31'),
(3, 4, 18, 'svdbfngmh', '', '2021-07-29 19:27:59'),
(4, 4, 18, 'svdbfngmh,kjmhngbf', '', '2021-07-29 19:29:11'),
(5, 4, 18, 'yujtrew', '', '2021-07-29 19:32:45'),
(6, 4, 18, 'yujtrew', 'lkyjuthrg', '2021-07-29 19:33:16'),
(7, 4, 18, 'u7t54r32e', 'k7u6j4y5r34qe', '2021-07-29 19:34:49'),
(8, 3, 18, 'todo un crack', 'while 2 &gt; 1:<div>      print(\"no papu :\'v\")</div><div><br></div>', '2021-07-29 21:41:51'),
(9, 3, 18, 'joder no dio', 'ewfrg<div>erfgdthyjker</div><div>dfgthyj</div><div>wdasfegrt gfyhj tyujik iop</div><div> ytujkl</div>', '2021-07-29 21:42:17'),
(10, 4, 18, 'hola prueba', 'for(int i= 0; i&lt;5; i++){<div>   cout&lt;&lt;\"hola\"&lt;&lt;i&lt;&lt;endl;</div><div>}</div>', '2021-08-01 20:39:29'),
(13, 4, 18, 'Buen ejercicio aqui mi respuesta', '$a=1;$b=2;$c= $a+$b;echo $c;', '2021-08-02 00:10:34'),
(14, 4, 18, 'prueba', 'ewqrtghjflkoi<div>awtsergdjfli</div><div>aw3esrtdhfyju</div><div>aserftgyv.</div><div>erstygfhk.lm</div><div>erfgythjk</div><div>rfgh</div>', '2021-08-02 00:11:23'),
(15, 4, 18, 'yhjk', '', '2021-08-02 19:51:33'),
(16, 4, 18, 'yui', '', '2021-08-02 21:00:39'),
(17, 1, 18, 'joder buen ejercicio aqui mi respuesta', 'echo \"hola\";<div>echo \"fin xd\";</div>', '2021-08-11 21:31:58'),
(18, 5, 18, 'no funciono f', '', '2021-08-11 21:33:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dimension_cliente`
--

CREATE TABLE `dimension_cliente` (
  `id_cliente` bigint(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `mensaje` varchar(300) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dimension_cliente`
--

INSERT INTO `dimension_cliente` (`id_cliente`, `nombre`, `correo`, `telefono`, `mensaje`, `fecha_registro`) VALUES
(2, 'nombre', 'catalina08delgado@gmail.com', 3135483198, 'hola', '2021-06-15 01:10:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lenguajes`
--

CREATE TABLE `lenguajes` (
  `codigo` int(10) NOT NULL,
  `nombre_lenguaje` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lenguajes`
--

INSERT INTO `lenguajes` (`codigo`, `nombre_lenguaje`) VALUES
(0, 'Assembly'),
(1, 'Basic'),
(2, 'C'),
(3, 'C#'),
(4, 'C++'),
(5, 'Cobol'),
(6, 'Dart'),
(7, 'Elixir'),
(8, 'Fortran'),
(9, 'Go'),
(10, 'Haskell'),
(11, 'HTML-CSS'),
(12, 'Java'),
(13, 'JavaScript'),
(14, 'Kotlin'),
(15, 'Lisp'),
(16, 'Lua'),
(17, 'Pascal'),
(18, 'Perl'),
(19, 'PHP'),
(20, 'Python'),
(21, 'Ruby'),
(22, 'Rust'),
(23, 'SQL'),
(24, 'swift');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` bigint(11) NOT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `id_usu_per` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `descripcion`, `id_usu_per`) VALUES
(17, NULL, NULL),
(18, 'Daniel es gei', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id_pub` bigint(20) NOT NULL,
  `ejercicio` varchar(3500) NOT NULL,
  `solucion` varchar(7999) NOT NULL,
  `id_usu_pub` bigint(11) NOT NULL,
  `fecha_pub` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `titulo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`id_pub`, `ejercicio`, `solucion`, `id_usu_pub`, `fecha_pub`, `titulo`) VALUES
(1, 'iuytrewqrtyuiyjthgrew', 'rgrdhdrjytf<div>xjtfgjdr</div><div>txjt</div><div>xjtd</div><div>tfjct</div>', 18, '2021-07-20 21:35:10', 'tbgrdvfcsxa'),
(2, 'kymfnhtbgrfesdenytbgrefcd', 'tujnyhbgvdstmnyhrbgvfsdetyhnrbgcd', 18, '2021-07-21 13:30:03', 'tbgrdvfcsxa'),
(3, '0{´pñ-9.ol,yjunthbrgvf', 'lo,ikymujnhbgtvfcdsx', 18, '2021-07-21 13:31:15', 'ñ9po8l,yjutgrbvfcdw'),
(4, 'The Game', 'xd', 18, '2021-07-21 13:32:39', 'hola'),
(5, 'imprimir 3 veces hola xd', 'echo \"hola,hola,hola\";', 18, '2021-08-11 21:31:15', 'Hola 2 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `id_respuesta` bigint(28) NOT NULL,
  `id_com_res` bigint(25) NOT NULL,
  `id_usu_res` bigint(11) NOT NULL,
  `respuesta` varchar(3500) NOT NULL,
  `codigo_resp` varchar(3500) DEFAULT NULL,
  `fecha_resp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`id_respuesta`, `id_com_res`, `id_usu_res`, `respuesta`, `codigo_resp`, `fecha_resp`) VALUES
(1, 4, 18, 'xdddd buenisima esa', 'print(\"no\")', '2021-08-02 16:01:04'),
(2, 4, 18, 'xdddd buenisima esa', 'print(\"no\")', '2021-08-02 16:01:04'),
(3, 5, 18, 'steman', '', '2021-08-02 16:14:20'),
(4, 8, 18, 're lol', '', '2021-08-02 16:14:46'),
(5, 5, 18, 'no papu :\'v', 'print(\"pruebon\")', '2021-08-02 17:22:30'),
(6, 3, 18, 'prueba para ver si se guarda bien xd', 'wedfgbn<div>efg</div><div>fbgdfgb</div><div>fbggfc</div><div>fdv</div><div>for(idg){</div><div>  aszdxfvbdn</div><div>}</div>', '2021-08-02 17:25:10'),
(7, 1, 18, 'hola :)', '', '2021-08-02 19:41:39'),
(8, 1, 18, 'hola :)', '', '2021-08-02 19:42:28'),
(9, 1, 18, 'wqef', '', '2021-08-02 19:47:04'),
(10, 1, 18, 'rdftgyhjkn', '', '2021-08-02 19:51:41'),
(11, 1, 18, 'rdftgyhjkn', '', '2021-08-02 19:53:04'),
(12, 1, 18, 'rdftgyhjkn', '', '2021-08-02 19:53:05'),
(13, 1, 18, 'rdftgyhjkn', '', '2021-08-02 19:53:58'),
(14, 2, 18, 'waesdrtf', '', '2021-08-02 19:54:07'),
(15, 2, 18, 'waesdrtf', '', '2021-08-02 19:55:51'),
(16, 2, 18, 'waesdrtf', '', '2021-08-02 19:55:52'),
(17, 2, 18, 'waesdrtf', '', '2021-08-02 19:55:59'),
(18, 18, 18, 'xd mero gil', 'echo \"hola\";', '2021-08-11 21:33:52'),
(19, 18, 18, 'xd mero gil', '', '2021-08-11 21:34:11'),
(20, 18, 18, 'xd mero gil', '', '2021-08-11 21:34:26'),
(21, 18, 18, 'terhyjk', '', '2021-08-11 21:34:34'),
(22, 18, 18, 'terhyjk', '', '2021-08-11 21:36:57'),
(23, 17, 18, 'se puede hacer mejor', '', '2021-08-11 21:59:53'),
(24, 17, 18, 'se puede hacebfgvdcsr mejor', '', '2021-08-11 22:02:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` bigint(11) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `nombre_usuario` varchar(18) NOT NULL,
  `contrasenia` varchar(100) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `codigo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `correo`, `nombre_usuario`, `contrasenia`, `fecha_registro`, `codigo`) VALUES
(15, 'hola@hola', 't', '4d186321c1a7f0f354b297e8914ab2', '2021-07-06 19:36:07', 'USER'),
(17, 'c@c', 'c', '202cb962ac59075b964b07152d234b70', '2021-07-06 19:41:42', 'USER'),
(18, 'f@f', 'hytgrfedw', '827ccb0eea8a706c4c34a16891f84e7b', '2021-07-12 20:52:30', 'USER');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_com`),
  ADD KEY `id_pub_com` (`id_pub_com`),
  ADD KEY `id_usu_com` (`id_usu_com`);

--
-- Indices de la tabla `dimension_cliente`
--
ALTER TABLE `dimension_cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id_pub`),
  ADD KEY `id_usu_pub` (`id_usu_pub`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`id_respuesta`),
  ADD KEY `id_com_res` (`id_com_res`),
  ADD KEY `id_usu_res` (`id_usu_res`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_com` bigint(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `dimension_cliente`
--
ALTER TABLE `dimension_cliente`
  MODIFY `id_cliente` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id_pub` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `id_respuesta` bigint(28) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_pub_com`) REFERENCES `publicacion` (`id_pub`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_usu_com`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `perfil_ibfk_2` FOREIGN KEY (`id_usu_per`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD CONSTRAINT `publicacion_ibfk_1` FOREIGN KEY (`id_usu_pub`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `respuesta_ibfk_1` FOREIGN KEY (`id_com_res`) REFERENCES `comentarios` (`id_com`),
  ADD CONSTRAINT `respuesta_ibfk_2` FOREIGN KEY (`id_usu_res`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2023 a las 20:30:53
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_gonzalez_jeremias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(100) NOT NULL,
  `categoria_eliminada` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`, `categoria_eliminada`) VALUES
(1, 'Snacks', 'NO'),
(2, 'Bebidas alcohólicas', 'NO'),
(3, 'pruebas', 'SI'),
(4, 'probando1234', 'SI'),
(5, 'Aceites', 'NO'),
(6, 'Bebidas azucaradas', 'NO'),
(7, 'Galletitas', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id_consulta` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `numero_telefonico` varchar(50) NOT NULL,
  `consulta` varchar(256) NOT NULL,
  `respondido` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id_consulta`, `nombre`, `apellido`, `email`, `numero_telefonico`, `consulta`, `respondido`) VALUES
(1, 'Jeremias Ezequiel', 'Gonzalez', 'jeremiasgonzalez7464@gmail.com', '03794906261', 'Esta es una prueba de consulta.... eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', 'SI'),
(2, 'Jeremias Ezequiel', 'Gonzalez', 'killergameryt74@gmail.com', '03794906261', 'wdawdwadw', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_perfil` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `perfil_eliminado` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfil`, `descripcion`, `perfil_eliminado`) VALUES
(1, 'Admin', 'NO'),
(2, 'Cliente', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `descripcion_prod` varchar(100) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `cod_categoria` int(11) NOT NULL,
  `precio` float(15,2) NOT NULL,
  `precio_venta` float(15,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `stock_min` int(11) NOT NULL,
  `eliminado` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `descripcion_prod`, `imagen`, `cod_categoria`, `precio`, `precio_venta`, `stock`, `stock_min`, `eliminado`) VALUES
(8, 'Garrapatas Editado3', '1685574118_b7154a12b1e3ffb99007.jpg', 2, 1900.00, 100000.00, 1111, 1, 'SI'),
(9, 'Gaseosa Coca Cola sabor original 2.25 l.', '1685581096_d45d006bd02599bb52bc.jpg', 2, 750.00, 950.00, 11110, 1, 'NO'),
(10, 'Aceite de girasol Cocinero plus 1.5 l.', '1686709757_841d08e63315fd0c65c7.png', 7, 300.00, 500.00, 4999, 1, 'NO'),
(11, 'Aceite de girasol Cocinero plus 1.5 l.', '1685738755_4b19ecdc2a3c7f3f4acb.png', 5, 750.00, 1050.00, 5000, 1, 'NO'),
(12, 'Aceite de girasol Natura 1.5 l.', '1685738789_97f5b5f79704a69db916.png', 5, 1300.00, 1550.00, 4998, 1, 'NO'),
(13, 'Cerveza rubia Heineken Retornable 1 l.', '1685817799_96a8b806500952825595.png', 2, 750.00, 950.00, 12321, 1, 'NO'),
(14, 'Gaseosa Fanta naranja 2.25 l.', '1686709837_60250d5ee05f9f891161.jpg', 6, 600.12, 759.99, 5000, 1, 'NO'),
(15, 'Galletitas crackers La Providencia 101 g.', '1686709898_0357041fc10b3a544d4b.png', 7, 100.99, 149.99, 7999, 1, 'NO'),
(16, 'Papas fritas Lays clásicas bolsa 145 g.', '1686709984_f362fc190ad916772220.png', 1, 1450.00, 1999.99, 9998, 1, 'NO'),
(17, 'Palitos de maíz super queso Cheetos 238 g.', '1686710050_6d9e370ac886eab14ccb.png', 1, 1450.99, 2460.99, 10, 1, 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `usuario`, `email`, `pass`, `perfil_id`, `baja`) VALUES
(10, 'Jeremias', 'Gonzalez', 'jeremias123', 'jeremias@gmail.com', '$2y$10$DWd1iFr3c9wz2XjMMSgzLe5MmNqHOJoR7dJs4tFF7ZffHz.bKVYEa', 1, 'NO'),
(11, 'fulanito', 'mengano', 'fulanito de tal', 'fulanito@ejemplo.com', '$2y$10$IJNRtMQWDER.mxOFUpqd4OO0c962s5BNDJZy8inTauKc05rIVeLGa', 2, 'SI'),
(12, 'noad', 'admin', 'noadmin', 'noadmin@gamil.com', '$2y$10$a1uuX0L4hQ8sjgjsREOViOagx6kHH27vww21anSmzF3eQT0ckFBka', 2, 'NO'),
(13, 'admin', 'eladmin', 'admin', 'admin@admin.com', '$2y$10$o1J6oM0b0njOow7nTUCCjuAPx3AsPra/FW54HoNHa5o2tg.izdwmu', 1, 'NO'),
(14, 'Jeremias Ezequiel', 'Gonzalez', '45845578', 'jeremiasgonzalez7464@gmail.com', '$2y$10$VuUXtohCs/4JUgkgBguRRuCHYgQh5.E1b.lxPDQ7EM/ji.P91jqGK', 2, 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_cabecera`
--

CREATE TABLE `ventas_cabecera` (
  `id_ventas_cabecera` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `usuario_id` int(11) NOT NULL,
  `total_ventas` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas_cabecera`
--

INSERT INTO `ventas_cabecera` (`id_ventas_cabecera`, `fecha`, `usuario_id`, `total_ventas`) VALUES
(1, '2023-06-11 00:00:00', 12, 369.00),
(2, '2023-06-11 00:00:00', 12, 369.00),
(3, '2023-06-11 00:00:00', 12, 369.00),
(4, '2023-06-11 00:00:00', 12, 369.00),
(5, '2023-06-11 00:00:00', 12, 262.00),
(6, '2023-06-11 00:00:00', 12, 377.00),
(7, '2023-06-11 00:00:00', 12, 0.00),
(8, '2023-06-11 00:00:00', 12, 0.00),
(9, '2023-06-11 00:00:00', 12, 0.00),
(10, '2023-06-11 00:00:00', 12, 0.00),
(11, '2023-06-11 00:00:00', 12, 0.00),
(12, '2023-06-11 00:00:00', 12, 0.00),
(13, '2023-06-11 00:00:00', 12, 0.00),
(14, '2023-06-11 00:00:00', 12, 0.00),
(15, '2023-06-11 00:00:00', 12, 0.00),
(16, '2023-06-11 00:00:00', 12, 0.00),
(17, '2023-06-11 00:00:00', 12, 0.00),
(18, '2023-06-11 00:00:00', 12, 0.00),
(19, '2023-06-11 00:00:00', 12, 0.00),
(20, '2023-06-11 00:00:00', 12, 0.00),
(21, '2023-06-11 00:00:00', 12, 0.00),
(22, '2023-06-11 00:00:00', 12, 131.00),
(23, '2023-06-11 00:00:00', 12, 0.00),
(24, '2023-06-11 00:00:00', 12, 1127.00),
(25, '2023-06-11 00:00:00', 12, 1127.00),
(26, '2023-06-11 00:00:00', 12, 0.00),
(27, '2023-06-11 00:00:00', 12, 0.00),
(28, '2023-06-11 00:00:00', 12, 0.00),
(29, '2023-06-11 00:00:00', 12, 131.00),
(30, '2023-06-11 00:00:00', 12, 131.00),
(31, '2023-06-11 00:00:00', 12, 0.00),
(32, '2023-06-11 00:00:00', 12, 0.00),
(33, '2023-06-11 00:00:00', 12, 0.00),
(34, '2023-06-11 00:00:00', 12, 0.00),
(35, '2023-06-11 00:00:00', 12, 0.00),
(36, '2023-06-11 00:00:00', 12, 254.00),
(37, '2023-06-11 00:00:00', 12, 254.00),
(38, '2023-06-11 00:00:00', 12, 254.00),
(39, '2023-06-11 00:00:00', 12, 254.00),
(40, '2023-06-11 00:00:00', 12, 254.00),
(41, '2023-06-11 00:00:00', 12, 0.00),
(42, '2023-06-11 00:00:00', 12, 0.00),
(43, '2023-06-11 00:00:00', 12, 0.00),
(44, '2023-06-11 00:00:00', 12, 0.00),
(45, '2023-06-11 00:00:00', 12, 0.00),
(46, '2023-06-14 00:00:00', 12, 23262.87),
(47, '2023-06-14 00:00:00', 12, 7254.95),
(48, '2023-06-14 00:00:00', 12, 7254.95),
(49, '2023-06-14 00:00:00', 12, 7254.95),
(50, '2023-06-14 00:00:00', 12, 7254.95),
(51, '2023-06-14 00:00:00', 12, 7254.95),
(52, '2023-06-14 00:00:00', 12, 7254.95),
(53, '2023-06-14 00:00:00', 12, 7254.95),
(54, '2023-06-14 00:00:00', 12, 7254.95),
(55, '2023-06-14 00:00:00', 12, 3900.99),
(56, '2023-06-15 00:00:00', 12, 7102.97);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_detalle`
--

CREATE TABLE `ventas_detalle` (
  `id_venta_detalle` int(11) NOT NULL,
  `venta_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas_detalle`
--

INSERT INTO `ventas_detalle` (`id_venta_detalle`, `venta_id`, `producto_id`, `cantidad`, `precio`) VALUES
(2, 3, 12, 3, 123.00),
(3, 4, 12, 3, 123.00),
(4, 5, 13, 2, 131.00),
(5, 6, 13, 1, 131.00),
(6, 6, 12, 1, 123.00),
(7, 6, 11, 1, 123.00),
(8, 22, 13, 1, 131.00),
(9, 24, 13, 1, 131.00),
(10, 24, 12, 1, 123.00),
(11, 24, 11, 1, 123.00),
(12, 24, 9, 1, 750.00),
(13, 25, 12, 1, 123.00),
(14, 25, 13, 1, 131.00),
(15, 25, 11, 1, 123.00),
(16, 25, 9, 1, 750.00),
(17, 29, 13, 1, 131.00),
(18, 30, 13, 1, 131.00),
(19, 36, 13, 1, 131.00),
(20, 36, 12, 1, 123.00),
(21, 37, 13, 1, 131.00),
(22, 37, 12, 1, 123.00),
(23, 38, 13, 1, 131.00),
(24, 38, 12, 1, 123.00),
(25, 39, 13, 1, 131.00),
(26, 39, 12, 1, 123.00),
(27, 40, 13, 1, 131.00),
(28, 40, 12, 1, 123.00),
(29, 46, 17, 12, 1450.99),
(30, 46, 9, 1, 750.00),
(31, 46, 16, 2, 1450.00),
(32, 46, 15, 1, 100.99),
(33, 46, 13, 2, 750.00),
(34, 46, 10, 2, 300.00),
(35, 47, 17, 5, 1450.99),
(36, 48, 17, 5, 1450.99),
(37, 49, 17, 5, 1450.99),
(38, 50, 17, 5, 1450.99),
(39, 51, 17, 5, 1450.99),
(40, 52, 17, 5, 1450.99),
(41, 53, 17, 5, 1450.99),
(42, 54, 17, 5, 1450.99),
(43, 55, 16, 1, 1450.00),
(44, 55, 15, 1, 100.99),
(45, 55, 12, 1, 1300.00),
(46, 55, 10, 1, 300.00),
(47, 55, 9, 1, 750.00),
(48, 56, 17, 3, 1450.99),
(49, 56, 16, 1, 1450.00),
(50, 56, 12, 1, 1300.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id_consulta`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `cod_categorias` (`cod_categoria`),
  ADD KEY `cod_categoria` (`cod_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `perfil_id` (`perfil_id`);

--
-- Indices de la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  ADD PRIMARY KEY (`id_ventas_cabecera`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  ADD PRIMARY KEY (`id_venta_detalle`),
  ADD KEY `venta_id` (`venta_id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  MODIFY `id_ventas_cabecera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  MODIFY `id_venta_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`cod_categoria`) REFERENCES `categorias` (`id_categoria`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`perfil_id`) REFERENCES `perfiles` (`id_perfil`);

--
-- Filtros para la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  ADD CONSTRAINT `ventas_cabecera_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  ADD CONSTRAINT `ventas_detalle_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `ventas_detalle_ibfk_2` FOREIGN KEY (`venta_id`) REFERENCES `ventas_cabecera` (`id_ventas_cabecera`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

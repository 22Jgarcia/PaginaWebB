-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-08-2024 a las 14:39:09
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--
create database examen;
use examen;

CREATE TABLE `clientes` (
  `codigo_cliente` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `nit` bigint NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`codigo_cliente`, `nombre`, `nit`, `direccion`) VALUES
(1, 'Juan Pérez', 123456789, 'Calle 123, Ciudad'),
(2, 'María Gómez', 987654321, 'Avenida 456, Municipio'),
(3, 'Pedro Rodríguez', 456789123, 'Carrera 789, Localidad'),
(4, 'Ana Sánchez', 321654987, 'Calle 159, Población'),
(5, 'Luis Hernández', 159357456, 'Avenida 789, Región'),
(6, 'Sofía Jiménez', 789456123, 'Carrera 159, Ciudad'),
(7, 'Miguel Torres', 456123789, 'Calle 456, Municipio'),
(8, 'Lucia Castillo', 789123456, 'Avenida 159, Localidad'),
(9, 'Carlos Mendoza', 159456789, 'Carrera 456, Población'),
(10, 'Gabriela Flores', 789321654, 'Calle 159, Región');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `codigo_detalle_pedido` int NOT NULL,
  `codigo_pedido` int NOT NULL,
  `codigo_producto` int NOT NULL,
  `unidad_medida` varchar(50) NOT NULL,
  `cantidad` decimal(10,2) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `costo` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `detalle_pedido`
--

INSERT INTO `detalle_pedido` (`codigo_detalle_pedido`, `codigo_pedido`, `codigo_producto`, `unidad_medida`, `cantidad`, `precio`, `costo`) VALUES
(1, 1, 1, 'Unidad', 5.00, 10.99, 7.99),
(2, 1, 2, 'Kilogramo', 2.50, 15.50, 11.75),
(3, 2, 3, 'Litro', 3.00, 8.25, 5.75),
(4, 2, 4, 'Caja', 1.00, 50.00, 35.00),
(5, 3, 5, 'Unidad', 10.00, 4.99, 3.50),
(6, 3, 6, 'Metro', 8.00, 6.75, 4.90),
(7, 4, 7, 'Kilogramo', 4.00, 12.99, 9.50),
(8, 4, 8, 'Unidad', 15.00, 3.25, 2.19),
(9, 5, 9, 'Litro', 6.00, 9.75, 7.00),
(10, 5, 10, 'Caja', 2.00, 45.00, 32.00),
(11, 6, 1, 'Unidad', 8.00, 10.99, 7.99),
(12, 6, 4, 'Caja', 1.00, 50.00, 35.00),
(13, 7, 5, 'Unidad', 12.00, 4.99, 3.50),
(14, 7, 8, 'Unidad', 20.00, 3.25, 2.19),
(15, 8, 2, 'Kilogramo', 3.00, 15.50, 11.75),
(16, 8, 9, 'Litro', 4.00, 9.75, 7.00),
(17, 9, 3, 'Litro', 5.00, 8.25, 5.75),
(18, 9, 6, 'Metro', 10.00, 6.75, 4.90),
(19, 10, 7, 'Kilogramo', 6.00, 12.99, 9.50),
(20, 10, 10, 'Caja', 3.00, 45.00, 32.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `codigo_pedido` int NOT NULL,
  `codigo_cliente` int NOT NULL,
  `fecha` date NOT NULL,
  `sucursal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`codigo_pedido`, `codigo_cliente`, `fecha`, `sucursal`) VALUES
(1, 1, '2023-05-15', 'S001'),
(2, 2, '2023-06-20', 'S002'),
(3, 3, '2023-07-01', 'S003'),
(4, 4, '2023-08-10', 'S001'),
(5, 5, '2023-09-05', 'S002'),
(6, 6, '2023-10-12', 'S003'),
(7, 7, '2023-11-20', 'S001'),
(8, 8, '2023-12-01', 'S002'),
(9, 9, '2024-01-08', 'S003'),
(10, 10, '2024-02-15', 'S001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigo_producto` int NOT NULL,
  `descripcion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo_producto`, `descripcion`, `precio`) VALUES
(1, 'Producto A', 10.99),
(2, 'Producto B', 15.50),
(3, 'Producto C', 8.25),
(4, 'Producto D', 50.00),
(5, 'Producto E', 4.99),
(6, 'Producto F', 6.75),
(7, 'Producto G', 12.99),
(8, 'Producto H', 3.25),
(9, 'Producto I', 9.75),
(10, 'Producto J', 45.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `codigo_usurio` int NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` int NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_actualizacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`codigo_usurio`, `usuario`, `clave`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(1, 'usuario1', 1234, '2022-01-01', '2022-01-02'),
(2, 'usuario2', 2345, '2022-01-03', '2022-01-04'),
(3, 'usuario3', 3456, '2022-01-05', '2022-01-06'),
(4, 'usuario4', 4567, '2022-01-07', '2022-01-08'),
(5, 'usuario5', 5678, '2022-01-09', '2022-01-10'),
(6, 'usuario6', 6789, '2022-01-11', '2022-01-12'),
(7, 'usuario7', 7890, '2022-01-13', '2022-01-14'),
(8, 'usuario8', 8901, '2022-01-15', '2022-01-16'),
(9, 'usuario9', 9012, '2022-01-17', '2022-01-18'),
(10, 'usuario10', 1235, '2022-01-19', '2022-01-20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`codigo_cliente`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`codigo_detalle_pedido`),
  ADD KEY `codigo_pedido` (`codigo_pedido`),
  ADD KEY `codigo_producto` (`codigo_producto`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`codigo_pedido`),
  ADD KEY `codigo_cliente` (`codigo_cliente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codigo_usurio`),
  ADD UNIQUE KEY `fecha_creacion` (`fecha_creacion`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD CONSTRAINT `detalle_pedido_ibfk_1` FOREIGN KEY (`codigo_pedido`) REFERENCES `pedido` (`codigo_pedido`),
  ADD CONSTRAINT `detalle_pedido_ibfk_2` FOREIGN KEY (`codigo_producto`) REFERENCES `productos` (`codigo_producto`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`codigo_cliente`) REFERENCES `clientes` (`codigo_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

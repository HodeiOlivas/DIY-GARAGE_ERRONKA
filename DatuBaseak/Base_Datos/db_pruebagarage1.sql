-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-05-2022 a las 09:43:37
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_pruebagarage1`
--
CREATE DATABASE IF NOT EXISTS `db_pruebagarage1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_pruebagarage1`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cabin`
--

CREATE TABLE `cabin` (
  `Cabin_ID` varchar(10) NOT NULL,
  `id_worker` int(20) NOT NULL,
  `Size` double(3,2) NOT NULL,
  `Color` varchar(20) NOT NULL,
  `Price_Hour` double(5,2) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cabin`
--

INSERT INTO `cabin` (`Cabin_ID`, `id_worker`, `Size`, `Color`, `Price_Hour`, `Description`) VALUES
('C0', 2, 2.00, 'Blue', 25.63, 'Washing Cabin'),
('C1', 2, 3.20, 'Yellow', 45.10, 'Cabin designed for tall vehicles. '),
('C2', 1, 1.85, 'Green', 30.00, 'Non-Stick Cabib - Designed to repairs that can get'),
('C3', 2, 4.50, 'White', 95.60, 'Cabin made for hosting painting and plating proces'),
('C4', 4, 2.25, 'Black', 71.80, 'Soundproofed cabin - Designed to test customers\' vehicle');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customer`
--

CREATE TABLE `customer` (
  `Username` varchar(50) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Birthday` date NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Phone_Number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `customer`
--

INSERT INTO `customer` (`Username`, `Name`, `Surname`, `Password`, `Birthday`, `Mail`, `Phone_Number`) VALUES
('user11', 'primer', 'cliente', 'pwd1', '2020-06-06', 'cliente.primer@garage.diy', 963852741),
('user22', 'bigarren', 'bezeroa', 'pwd2', '2016-10-08', 'bezeroa.bigarren@garage.diy', 123456789),
('user33', 'third', 'customer', 'pwd3', '2015-04-04', 'customer.third@garage.diy', 123789456),
('user44', 'Lorena', 'Perez', 'pwd4', '2000-07-11', 'Perez.Lorena@garage.diy', 111222333);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id_Product` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` double(10,2) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id_Product`, `Name`, `Price`, `Description`) VALUES
('CM11', 'Carrocería Metal', 74.10, 'CCAM'),
('EP06', 'Exhaust Pipe', 60.00, 'Silent exhaust pipe'),
('FS90', 'Front Spoiler', 260.00, 'Front spoiler for racing cars.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `purchase`
--

CREATE TABLE `purchase` (
  `id_Purchase` int(50) NOT NULL,
  `cust_Username` varchar(50) NOT NULL,
  `prod_ID` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Amount` int(50) NOT NULL,
  `Final_Cost` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `purchase`
--

INSERT INTO `purchase` (`id_Purchase`, `cust_Username`, `prod_ID`, `Date`, `Amount`, `Final_Cost`) VALUES
(1, 'user11', 'CM11', '2021-09-27', 3, 90.00),
(11, 'user33', 'CM11', '2022-01-13', 7, 60.55),
(15, 'user22', 'EP06', '2022-04-12', 2, 0.00),
(29, 'user22', 'EP06', '2022-04-20', 3, 0.00),
(30, 'user22', 'EP06', '2022-04-20', 3, 0.00),
(34, 'user22', 'EP06', '2022-04-14', 2, 0.00),
(35, 'user22', 'EP06', '2022-04-14', 2, 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservation`
--

CREATE TABLE `reservation` (
  `id_Reservation` int(50) NOT NULL,
  `cust_Username` varchar(50) NOT NULL,
  `id_cabin` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Starting_Hour` time NOT NULL,
  `Ending_Hour` time NOT NULL,
  `Amount_Hours` int(20) NOT NULL,
  `Total_Price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservation`
--

INSERT INTO `reservation` (`id_Reservation`, `cust_Username`, `id_cabin`, `Date`, `Starting_Hour`, `Ending_Hour`, `Amount_Hours`, `Total_Price`) VALUES
(1, 'user11', 'C0', '2022-03-30', '09:00:00', '11:00:00', 2, 15.40),
(5, 'user22', 'C0', '2022-04-05', '10:00:00', '12:00:00', 2, 50.95),
(7, 'user22', 'C0', '2022-03-30', '11:00:00', '12:00:00', 2, 3.88),
(8, 'user33', 'C3', '2016-04-21', '10:00:00', '12:00:00', 2, 44.73),
(11, 'user22', 'C1', '2019-11-06', '10:00:00', '11:00:00', 1, 86.20),
(46, 'user11', 'C1', '2022-04-25', '10:00:00', '11:00:00', 1, 180.55);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `worker`
--

CREATE TABLE `worker` (
  `Worker_ID` int(4) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Occupation` varchar(30) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `Phone_Number` int(20) NOT NULL,
  `Salary` double(6,2) NOT NULL,
  `Start_time` time NOT NULL,
  `Finish_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `worker`
--

INSERT INTO `worker` (`Worker_ID`, `Name`, `Surname`, `Password`, `Occupation`, `Mail`, `Phone_Number`, `Salary`, `Start_time`, `Finish_time`) VALUES
(1, 'primer', 'trabajador', 'pwd1', 'Mechanic', 'trabajador.primer@garage.diy', 123456789, 1200.99, '09:00:00', '19:00:00'),
(2, 'bigarren', 'langile', 'pwd2', 'Mechanic', 'langile.bigarren@garage.diy', 987654321, 900.20, '09:00:00', '19:00:00'),
(3, 'Jhon', 'Philips', 'pwd3', 'Mechanic', 'Philips.Jhon@garage.diy', 123456897, 1600.20, '09:00:00', '19:00:00'),
(4, 'Noel', 'Anderson', 'pwd4', 'Admin', 'Anderson.Noel@garage.diy', 951357852, 1250.45, '09:00:00', '19:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cabin`
--
ALTER TABLE `cabin`
  ADD PRIMARY KEY (`Cabin_ID`),
  ADD KEY `id_worker` (`id_worker`);

--
-- Indices de la tabla `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Username`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_Product`);

--
-- Indices de la tabla `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id_Purchase`),
  ADD KEY `cust_Username` (`cust_Username`),
  ADD KEY `id_Product` (`prod_ID`);

--
-- Indices de la tabla `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_Reservation`),
  ADD KEY `cust_Username` (`cust_Username`),
  ADD KEY `id_cabin` (`id_cabin`);

--
-- Indices de la tabla `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`Worker_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id_Purchase` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_Reservation` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `worker`
--
ALTER TABLE `worker`
  MODIFY `Worker_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cabin`
--
ALTER TABLE `cabin`
  ADD CONSTRAINT `cabin_ibfk_1` FOREIGN KEY (`id_worker`) REFERENCES `worker` (`Worker_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`cust_Username`) REFERENCES `customer` (`Username`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`prod_ID`) REFERENCES `product` (`id_Product`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`cust_Username`) REFERENCES `customer` (`Username`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_cabin`) REFERENCES `cabin` (`Cabin_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

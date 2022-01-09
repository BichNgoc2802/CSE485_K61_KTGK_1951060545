-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 02:02 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1951060545_employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `1951060545_employees`
--

CREATE TABLE `1951060545_employees` (
  `maNV` int(10) UNSIGNED NOT NULL,
  `hovaten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phongban` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luong` float NOT NULL,
  `ngayvaolam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `1951060545_employees`
--

INSERT INTO `1951060545_employees` (`maNV`, `hovaten`, `chucvu`, `phongban`, `luong`, `ngayvaolam`) VALUES
(0, 'Nguyễn Văn Anh', 'Phó trưởng  BM', 'Nhân sự', 80000000, '2022-01-11'),
(2, 'Minh Châu', 'Nhân viên', 'Nhân sự', 6000000, '2022-01-02'),
(3, 'Nguyễn Nam Anh', 'Nhân viên', 'Nhân sự', 70000000, '2022-01-03'),
(4, 'Nguyễn Duy Minh', 'Phó phòng', 'Nhân sự', 6000000, '2022-01-02'),
(5, 'Nguyễn Quỳnh Chi', 'Nhân viên', 'Nhân sự', 6000000, '2022-01-10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

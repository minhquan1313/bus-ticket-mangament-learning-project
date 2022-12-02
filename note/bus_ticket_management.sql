-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 03:23 AM
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
-- Database: `bus_ticket_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `tinh`
--

CREATE TABLE `tinh` (
  `tinh_id` int(10) NOT NULL PRIMARY KEY,
  `ten_tinh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tinh`
--

INSERT INTO `tinh` (`tinh_id`, `ten_tinh`) VALUES
(1, 'Thành Phố Hồ Chí Minh'),
(2, 'Tỉnh Cà Mau'),
(3, 'Tỉnh Đắk Lắk'),
(4, 'Tỉnh Long An');

-- --------------------------------------------------------

--
-- Table structure for table `chuyen`
--

CREATE TABLE `chuyen` (
  `chuyen_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL PRIMARY KEY,
  `from_id` int(10) NOT NULL,
  `to_id` int(10) NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chuyen`
--

INSERT INTO `chuyen` (`chuyen_id`, `from_id`, `to_id`) VALUES
('1-2', 1, 2),
('1-3', 1, 3),
('1-4', 1, 4),
('2-3', 2, 3),
('2-4', 2, 4),
('3-4', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `xe`
--

CREATE TABLE `xe` (
  `xe_id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `bien_so` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cho_ngoi` int(10) NOT NULL,
  `loai` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gia_tien` int(10) NOT NULL,
  `wifi` bit NOT NULL,
  `bed` bit NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe`
--

INSERT INTO `xe` (`xe_id`, `bien_so`, `hinh_anh`, `cho_ngoi`, `loai`, `gia_tien`, `wifi`, `bed`) VALUES
(1, '59N-5051', '/images/bus.jpg', 39, 'VIP', 120000, 1, 1),
(2, '59N-5052', '/images/bus.jpg', 39, 'Thường', 60000, 0, 0),
(3, '59N-5053', '/images/bus.jpg', 39, 'VIP', 70000, 1, 0),
(4, '59N-5054', '/images/bus.jpg', 39, 'VIP', 90000, 0, 1),
(5, '59N-5055', '/images/bus.jpg', 39, 'Thường', 7000, 0, 0),
(6, '59N-5056', '/images/bus.jpg', 39, 'VIP', 120000, 1, 1),
(7, '59N-5057', '/images/bus.jpg', 39, 'VIP', 50000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chuyen_va_xe`
--

CREATE TABLE `chuyen_va_xe` (
  `chuyen_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `xe_id` int(10) NOT NULL,
  `thoi_gian_khoi_hanh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `do_dai` int(10) NOT NULL,
   PRIMARY KEY (`chuyen_id`, `xe_id`, `thoi_gian_khoi_hanh`)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chuyen_va_xe`
--

INSERT INTO `chuyen_va_xe` (`chuyen_id`, `xe_id`, `thoi_gian_khoi_hanh`, `do_dai`) VALUES
('1-2', 1, '2022-12-02', '308000'),
('1-2', 2, '2023-12-02', '308000'),
('1-2', 1, '2022-06-02', '308000'),
('1-2', 3, '2022-06-02', '308000'),
('1-2', 2, '2022-06-02', '308000'),
('1-2', 2, '2022-07-02', '308000'),
('1-2', 2, '2022-12-02', '308000');

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `khach_hang_id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `sdt` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ho` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten_dem` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`khach_hang_id`, `sdt`, `ho`, `ten_dem`, `ten`, `mat_khau`) VALUES
(1, '0123456789', 'Nguyen', 'Van', 'A', '1'),
(2, '0123456788', 'Nguyen', 'Van', 'B', '1'),
(3, '0123456787', 'Nguyen', 'Van', 'C', '1'),
(4, '0123456786', 'Nguyen', 'Van', 'D', '1'),
(5, '0123456785', 'Nguyen', 'Van', 'E', '1');

-- --------------------------------------------------------

--
-- Table structure for table `trang_thai`
--

CREATE TABLE `trang_thai` (
  `trang_thai_id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `ten` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trang_thai`
--

INSERT INTO `trang_thai` (`trang_thai_id`, `ten`) VALUES
(1, 'Có thể dùng'),
(2, 'Đã dùng'),
(3, 'Lỡ chuyến'),
(4, 'Đã huỷ');

-- --------------------------------------------------------

--
-- Table structure for table `ve_xe`
--

CREATE TABLE `ve_xe` (
  `ve_xe_id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `khach_hang_id` int(10) NOT NULL,
  `chuyen_id`  varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `xe_id` int(10) NOT NULL,
  `thoi_gian_khoi_hanh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `so_nguoi` int(10) NOT NULL,
  `trang_thai_id` int(10) NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ve_xe`
--

INSERT INTO `ve_xe` (`ve_xe_id`, `khach_hang_id`, `chuyen_id`, `xe_id`, `thoi_gian_khoi_hanh`, `so_nguoi`, `trang_thai_id`) VALUES
(1, 1, '1-2', 1, '2022-12-02 9:00:00', 2, 1),
(2, 1, '1-2', 1, '2022-12-02 9:00:00', 2, 4),
(3, 1, '1-2', 2, '2022-12-02 13:00:00', 1, 1),
(4, 3, '1-2', 2, '2022-12-02 15:30:00', 2, 1),
(5, 2, '1-2', 1, '2022-12-02 16:30:00', 1, 1);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
-- ALTER TABLE `product`
--   MODIFY `ProductId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 18, 2023 at 01:00 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinhvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `HinhAnh` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Ten_Danh_Muc` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `GiaTien` decimal(10,3) NOT NULL,
  `DanhMuc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `HinhAnh`, `Ten_Danh_Muc`, `GiaTien`, `DanhMuc`) VALUES
(1, 'p1.jpg', 'Bình Nắp Bật 500ml', '50.000', 'Bình Nắp Bật'),
(2, 'p2.jpg', 'Bình ULike 800ml', '100.000', 'Bình ULike'),
(3, 'p3.jpg', 'Cốc Cafe 200ml', '60.000', 'Cốc Cafe'),
(4, 'p4.jpg', 'Ly Pastel 1000ml', '60.000', 'Bình Patel'),
(5, 'p5.jpg', 'Bình Nhựa', '50.000', 'Bình Nhựa'),
(6, 'p6.jpg', 'Bình Patel 600ml', '60.000', 'Bình Patel'),
(7, 'p7.jpg', 'Bình giữ nhiệt inox tai Gấu Pastel', '50.000', 'Bình Patel'),
(8, 'p8.jpg', 'Cốc Cafe 300ml', '50.000', 'Cốc Cafe'),
(9, 'p9.jpg', 'Cốc Cafeholic', '80.000', 'Cốc Cafe'),
(10, 'p10.jpg', 'Bình Sport 1000ml', '100.000', 'Bình Sport'),
(11, 'p11.jpg', 'Bình Phích 500ml', '60.000', 'Bình Phích'),
(12, 'p17.jpg', 'Bình ULike 1000ml', '100.000', 'Bình ULike'),
(13, 'p22.jpg', 'Bình Cafe Cat 300ml', '60.000', 'Cốc Cafe');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int NOT NULL,
  `madon` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `SanPham` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `nguoidat` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `diaChi` varchar(500) NOT NULL,
  `hinhThuc` varchar(500) NOT NULL,
  `trangthai` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `madon`, `SanPham`, `nguoidat`, `diaChi`, `hinhThuc`, `trangthai`) VALUES
(655, '8637', 'Bình Nắp Bật 500ml', 'Nguyễn Viết Thăng Long', 'Sơn La', 'Thanh Toán Online', 'Duyệt'),
(5989, '3862', 'Bình giữ nhiệt Pastel 420ml', 'Trương Ngu Hoàng', 'Sơn La', 'Thanh Toán Online', 'Không'),
(6919, '9398', 'Bình ULike 800ml', 'Nguyễn Viết Thăng Long', 'Việt Nam', 'Thanh Toán Khi Nhận Hàng', 'Không'),
(7692, '1010', 'Cốc Cafe 200ml', 'Trương Ngu Hoàng', 'Sơn La', 'Thanh Toán Khi Nhận Hàng', 'Không');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int NOT NULL,
  `taikhoan` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `matkhau` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hoTen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `taikhoan`, `matkhau`, `hoTen`) VALUES
(482, 'long@gmail.com', '123456', 'Nguyễn Viết Thăng Long'),
(3352, 'Hoang@gmail.com', '123', 'Trương Ngu Hoàng'),
(3431, 'longthangnguyenviet@gmail.com', '123456', 'Nguyễn Viết Thăng Long');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

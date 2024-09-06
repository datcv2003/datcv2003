-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 08, 2024 at 11:45 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dressrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anhsp`
--

CREATE TABLE `tb_anhsp` (
  `id_anh` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `id_san_pham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_baidang`
--

CREATE TABLE `tb_baidang` (
  `id_bai_dang` int(11) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ngay_dang` date NOT NULL,
  `path` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_baidang`
--

INSERT INTO `tb_baidang` (`id_bai_dang`, `tieu_de`, `noi_dung`, `ngay_dang`, `path`, `username`, `trangthai`) VALUES
(1, 'gdfb vfdrg', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2024-01-24', 'Screenshot 2024-01-05 214304.png', 'a', 1),
(2, 'fff', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2024-01-24', 'Screenshot 2024-01-05 214304.png', 'a', 1),
(3, 'êr', '1321sa', '2024-01-26', 'Screenshot 2024-01-05 214304.png', 'a', 1),
(4, 'Tiêu đề 1', 'Nội dung 1', '2024-01-24', 'Screenshot 2024-01-05 214304.png', 'a', 1),
(5, 'Tiêu đề 2', 'Nội dung 2', '2024-01-24', 'Screenshot 2024-01-05 214304.png', 'a', 1),
(6, 'Tiêu đề 3', 'nội dung 3', '2024-01-26', 'Screenshot 2024-01-05 214304.png', 'a', 1),
(7, 'Tiêu đề 1', 'Nội dung 1', '2024-01-24', 'Screenshot 2024-01-05 214304.png', 'a', 1),
(8, 'Tiêu đề 2', 'Nội dung 2', '2024-01-24', 'Screenshot 2024-01-05 214304.png', 'a', 1),
(9, 'Tiêu đề 3', 'nội dung 3', '2024-01-26', 'Screenshot 2024-01-05 214304.png', 'a', 1),
(10, 'Tiêu đề 1', 'Nội dung 1', '2024-01-24', 'Screenshot 2024-01-05 214304.png', 'a', 1),
(11, 'Tiêu đề 2', 'Nội dung 2', '2024-01-24', 'Screenshot 2024-01-05 214304.png', 'a', 1),
(12, 'Tiêu đề 3', 'nội dung 3', '2024-01-26', 'Screenshot 2024-01-05 214304.png', 'a', 1),
(13, 'Tiêu đề 1', 'Nội dung 1', '2024-01-24', 'Screenshot 2024-01-05 214304.png', 'a', 1),
(14, 'Tiêu đề 2', 'Nội dung 2', '2024-01-24', 'Screenshot 2024-01-05 214304.png', 'a', 1),
(15, 'Tiêu đề 3', 'nội dung 3', '2024-01-26', 'Screenshot 2024-01-05 214304.png', 'a', 1),
(16, 'Tiêu đề 4', 'Nội dung 1', '2024-01-24', 'Screenshot 2024-01-05 214304.png', 'a', 1),
(17, 'Tiêu đề 5', 'Nội dung 2', '2024-01-24', 'Screenshot 2024-01-05 214304.png', 'a', 1),
(18, 'Tiêu đề 6', 'Nội dung 3', '2024-01-26', 'Screenshot 2024-01-05 214304.png', 'a', 1),
(19, 'Tiêu đề 7', 'Nội dung 7', '2024-01-24', 'Screenshot 2024-01-05 214304.png', 'a', 1),
(20, 'Tiêu đề 8', 'Nội dung 8', '2024-01-24', 'Screenshot 2024-01-05 214304.png', 'a', 1),
(21, 'Tiêu đề 9', 'nội dung 9', '2024-01-26', 'Screenshot 2024-01-05 214304.png', 'a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_binhluan`
--

CREATE TABLE `tb_binhluan` (
  `id_binh_luan` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_binh_luan` date NOT NULL,
  `username` varchar(255) NOT NULL,
  `id_san_pham` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_binhluan`
--

INSERT INTO `tb_binhluan` (`id_binh_luan`, `noi_dung`, `ngay_binh_luan`, `username`, `id_san_pham`) VALUES
(5, 'adu ok đấy', '2024-01-26', 'admin', 4),
(7, 'heheheh', '2024-01-29', 'a', 4),
(9, 'okkkkk', '2024-01-29', 'admin', 13);

-- --------------------------------------------------------

--
-- Table structure for table `tb_chitiet_donhang`
--

CREATE TABLE `tb_chitiet_donhang` (
  `id_don_hang` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `tong_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_danhgia`
--

CREATE TABLE `tb_danhgia` (
  `id_danh_gia` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_them` date NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `so_sao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_danhmuc`
--

CREATE TABLE `tb_danhmuc` (
  `id_danh_muc` int(11) NOT NULL,
  `mo_ta` text NOT NULL,
  `path` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_danhmuc`
--

INSERT INTO `tb_danhmuc` (`id_danh_muc`, `mo_ta`, `path`, `status`) VALUES
(3, 'Váy cưới làm lễ', 'Screenshot (439).png', 1),
(4, 'Áo dài cưới', 'Screenshot 2024-01-05 214304.png', 1),
(5, 'Váy cưới đi bàn', 'Screenshot 2024-01-05 174233.png', 1),
(6, 'Phụ kiện', 'Screenshot 2024-01-08 091840.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_donhang`
--

CREATE TABLE `tb_donhang` (
  `id_donhang` int(11) NOT NULL,
  `ngay_dat` date NOT NULL,
  `tong_gia` int(11) NOT NULL,
  `trang_thai` varchar(255) NOT NULL,
  `phuong_thuc_tt` varchar(255) NOT NULL,
  `ten_nguoi_mua` varchar(255) NOT NULL,
  `dien_thoai` int(11) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_khachhang`
--

CREATE TABLE `tb_khachhang` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `ten_khach_hang` varchar(255) DEFAULT NULL,
  `dien_thoai` int(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dia_chi` varchar(255) DEFAULT NULL,
  `quyen_han` varchar(255) DEFAULT 'User',
  `trang_thai` varchar(255) DEFAULT NULL,
  `option` varchar(255) DEFAULT NULL,
  `ma_xac_nhan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_khachhang`
--

INSERT INTO `tb_khachhang` (`username`, `password`, `ten_khach_hang`, `dien_thoai`, `email`, `dia_chi`, `quyen_han`, `trang_thai`, `option`, `ma_xac_nhan`) VALUES
('1111', '1', NULL, NULL, NULL, NULL, 'user', NULL, NULL, NULL),
('a', 'a', 'a', 837862, 'a', 'a', '1', 'a', 'a', 1),
('admin', 'a', NULL, NULL, 'donguyengiapicloud@gmail.com', NULL, '1', 'Kích Hoạt', NULL, NULL),
('customer', 'test', 'default', 988306943, 'test@gmail.com', 'address', 'User', NULL, NULL, NULL),
('moden', 'aaa', NULL, NULL, NULL, NULL, 'User', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_lienhe`
--

CREATE TABLE `tb_lienhe` (
  `id_lienhe` int(11) NOT NULL,
  `noi_dung` text,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dien_thoai` varchar(255) DEFAULT NULL,
  `ten_khach_hang` varchar(255) DEFAULT NULL,
  `id_san_pham` int(11) DEFAULT NULL,
  `loai_dich_vu` varchar(255) DEFAULT 'Liên hệ đặt váy',
  `trang_thai` enum('Chưa Liên Hệ','Đã Liên Hệ','Đã Liên Hệ Lần 1','Đã Liên Hệ Lần 2','Đã Liên Hệ Lần 3','Hoàn thành') DEFAULT 'Chưa Liên Hệ',
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_lienhe`
--

INSERT INTO `tb_lienhe` (`id_lienhe`, `noi_dung`, `username`, `email`, `dien_thoai`, `ten_khach_hang`, `id_san_pham`, `loai_dich_vu`, `trang_thai`, `date`) VALUES
(17, 'heheheheheh', 'admin', 'giapdnph35799@fpt.edu.vn', '0988306943', 'Đỗ Nguyên Giáp', 4, 'Liên hệ đặt váy', 'Chưa Liên Hệ', '2024-01-01'),
(18, 'adawdaqeq12312312312', 'admin', 'donguyengiapicloud@gmail.com', '09qe2', 'Đỗ Nguyên Giáp', 3, 'Liên hệ đặt váy', 'Chưa Liên Hệ', '2024-01-11'),
(19, 'heheheheheh', 'admin', 'giapdnph35799@fpt.edu.vn', '0988306943', 'Đỗ Nguyên Giáp', 4, 'Liên hệ đặt váy', 'Hoàn thành', '2024-01-18'),
(20, 'adawdaqeq12312312312', 'admin', 'donguyengiapicloud@gmail.com', '09qe2', 'Đỗ Nguyên Giáp', 3, 'Liên hệ đặt váy', 'Chưa Liên Hệ', '2024-01-02'),
(21, 'IGQIYAWGERIYWGYIR', 'a', 'giapdnph35799@fpt.edu.vn', '0988306943', 'Đỗ Nguyên Giáp', 7, 'Liên hệ đặt váy', 'Chưa Liên Hệ', NULL),
(22, 'ádasdas', 'customer', 'bdvph35799@fpt.edu.vn', '0988306943', 'Đỗ Nguyên Giáp', 4, 'Liên hệ đặt váy', 'Chưa Liên Hệ', NULL),
(23, 'ADAD', 'customer', 'bdvph35799@fpt.edu.vn', '0988306943', 'Đỗ Nguyên Giáp', 4, 'Liên hệ đặt váy', 'Hoàn thành', '2024-01-29'),
(24, 'cccaas', 'customer', 'giapdnph35799@fpt.edu.vn', '0988306943', 'Đỗ Nguyên Giáp', 5, 'Liên hệ đặt váy', 'Chưa Liên Hệ', '2024-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rates`
--

CREATE TABLE `tb_rates` (
  `id` int(11) NOT NULL,
  `stars` int(11) NOT NULL,
  `noi_dung` text,
  `date_rate` date DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_rates`
--

INSERT INTO `tb_rates` (`id`, `stars`, `noi_dung`, `date_rate`, `ip_address`) VALUES
(1, 4, 'ok', '2024-01-10', NULL),
(2, 5, 'ok', '2024-01-10', NULL),
(3, 5, 'ok', '2024-01-10', NULL),
(4, 3, 'ok', '2024-01-10', NULL),
(5, 5, 'Bố m DDOSS sập trang', '2024-01-28', NULL),
(6, 4, '', '2024-01-28', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sanpham`
--

CREATE TABLE `tb_sanpham` (
  `id_san_pham` int(11) NOT NULL,
  `ten_san_pham` varchar(255) DEFAULT NULL,
  `gia_san_pham` float DEFAULT NULL,
  `img_path_default` varchar(255) DEFAULT NULL,
  `mo_ta_san_pham` text,
  `ma_san_pham` varchar(255) DEFAULT NULL,
  `id_danh_muc` int(11) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `toption` int(11) DEFAULT NULL,
  `khuyen_mai` int(11) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_sanpham`
--

INSERT INTO `tb_sanpham` (`id_san_pham`, `ten_san_pham`, `gia_san_pham`, `img_path_default`, `mo_ta_san_pham`, `ma_san_pham`, `id_danh_muc`, `so_luong`, `toption`, `khuyen_mai`, `status`) VALUES
(4, 'Váy cưới làm lễ 02', 3000000, 'vayle2-1.jpeg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 4, 1, NULL, NULL, 1),
(5, 'Váy cưới làm lễ 03', 4000000, 'vayle6-1.jpg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 5, 3, NULL, NULL, 1),
(8, 'Váy cưới làm lễ 02', 3000000, 'vayle2-1.jpeg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 4, 1, NULL, NULL, 1),
(9, 'Váy cưới làm lễ 03', 4000000, 'vayle6-1.jpg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 5, 3, NULL, NULL, 1),
(11, 'Váy cưới làm lễ 02', 3000000, 'vayle2-1.jpeg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 4, 1, 1, 10, 1),
(12, 'Váy cưới làm lễ 03', 4000000, 'vayle6-1.jpg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 5, 3, 1, 5, 1),
(13, 'Váy cưới làm lễ 05', 2000000, 'vayle5-1.jpg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'vcdb01', 3, 1, 1, 20, 1),
(14, 'Váy cưới làm lễ 02', 3000000, 'vayle2-1.jpeg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 4, 1, 1, 15, 1),
(15, 'Váy cưới làm lễ 03', 4000000, 'vayle6-1.jpg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 5, 3, 1, 11, 1),
(16, 'Váy cưới làm lễ 05', 2000000, 'vayle5-1.jpg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'vcdb01', 3, 1, 1, 30, 1),
(17, 'Váy cưới làm lễ 02', 3000000, 'vayle2-1.jpeg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 4, 1, 1, 10, 1),
(18, 'Váy cưới làm lễ 03', 4000000, 'vayle6-1.jpg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 5, 3, 1, 5, 1),
(19, 'Váy cưới làm lễ 05', 2000000, 'vayle5-1.jpg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'vcdb01', 3, 1, 1, 20, 1),
(20, 'Váy cưới làm lễ 02', 3000000, 'vayle2-1.jpeg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 4, 1, 1, 15, 1),
(21, 'Váy cưới làm lễ 03', 4000000, 'vayle6-1.jpg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 5, 3, 1, 11, 1),
(22, 'Váy cưới làm lễ 05', 2000000, 'vayle5-1.jpg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'vcdb01', 3, 1, 1, 30, 1),
(23, 'Váy cưới làm lễ 02', 9000000, 'vayle2-1.jpeg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 4, 1, 1, 10, 1),
(24, 'Váy cưới làm lễ 03', 9000000, 'vayle6-1.jpg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 5, 3, 1, 5, 1),
(25, 'Váy cưới làm lễ 05', 9000000, 'vayle5-1.jpg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'vcdb01', 3, 1, 1, 20, 1),
(26, 'Váy cưới làm lễ 02', 9000000, 'vayle2-1.jpeg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 4, 1, 1, 15, 1),
(27, 'Váy cưới làm lễ 03', 9000000, 'vayle6-1.jpg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 5, 3, 1, 11, 1),
(28, 'Váy cưới làm lễ 05', 9000000, 'vayle5-1.jpg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'vcdb01', 3, 1, 1, 30, 1),
(29, 'Váy cưới làm lễ 02', 3000000, 'vayle2-1.jpeg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 4, 1, 1, 10, 1),
(30, 'Váy cưới làm lễ 03', 4000000, 'vayle6-1.jpg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 5, 3, 1, 5, 1),
(31, 'Váy cưới làm lễ 05', 2000000, 'vayle5-1.jpg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'vcdb01', 3, 1, 1, 20, 1),
(32, 'Váy cưới làm lễ 02', 3000000, 'vayle2-1.jpeg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 4, 1, 1, 15, 1),
(33, 'Váy cưới làm lễ 03', 4000000, 'vayle6-1.jpg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 5, 3, 1, 11, 1),
(34, 'Váy cưới làm lễ 05', 2000000, 'vayle5-1.jpg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'vcdb01', 3, 1, 1, 30, 1),
(35, 'Váy cưới làm lễ 02', 3000000, 'vayle2-1.jpeg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 4, 1, 1, 10, 1),
(36, 'Váy cưới làm lễ 03', 4000000, 'vayle6-1.jpg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 5, 3, 1, 5, 1),
(37, 'Váy cưới làm lễ 05', 2000000, 'vayle5-1.jpg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'vcdb01', 3, 1, 1, 20, 1),
(38, 'Váy cưới làm lễ 02', 3000000, 'vayle2-1.jpeg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 4, 1, 1, 15, 1),
(39, 'Váy cưới làm lễ 03', 4000000, 'vayle6-1.jpg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'adc01', 5, 3, 1, 11, 1),
(40, 'Váy cưới làm lễ 05', 2000000, 'vayle5-1.jpg', 'Váy cưới là một chiếc váy trắng truyền thống được phụ nữ mặc vào ngày cưới của mình. Loại váy này thường được thiết kế để tôn lên vẻ đẹp và nét thanh lịch của cô dâu, và thường được làm từ các loại vải cao cấp như satin, tơ lụa, ren, hoặc voan. Váy cưới thường có nhiều kiểu dáng khác nhau như váy xoè, váy công chúa, váy ôm, và váy xòe, phòng thân hoặc váy đuôi cá.  Ngoài ra, váy cưới cũng có thể được trang trí bằng các đính kết, hoa văn, và hoa cưới để tăng thêm vẻ đẹp và sự quyến rũ. Mỗi chiếc váy cưới đều mang trong mình thông điệp về sự trang trọng, tinh tế và tình yêu, và được coi là biểu tượng quan trọng trong nghi lễ kết hôn.', 'vcdb01', 3, 1, 1, 30, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anhsp`
--
ALTER TABLE `tb_anhsp`
  ADD PRIMARY KEY (`id_anh`),
  ADD KEY `ik_tb_anhsp_tb_sanpham` (`id_san_pham`);

--
-- Indexes for table `tb_baidang`
--
ALTER TABLE `tb_baidang`
  ADD PRIMARY KEY (`id_bai_dang`),
  ADD KEY `il_tb_baidang_tb_khachhang` (`username`);

--
-- Indexes for table `tb_binhluan`
--
ALTER TABLE `tb_binhluan`
  ADD PRIMARY KEY (`id_binh_luan`),
  ADD KEY `ik_tb_binhluan_tb_khachhang` (`username`),
  ADD KEY `ik_tb_binhluan_tb_sanpham` (`id_san_pham`);

--
-- Indexes for table `tb_chitiet_donhang`
--
ALTER TABLE `tb_chitiet_donhang`
  ADD PRIMARY KEY (`id_don_hang`),
  ADD KEY `ik_tb_chitiet_donhang_tb_sanpham` (`id_san_pham`);

--
-- Indexes for table `tb_danhgia`
--
ALTER TABLE `tb_danhgia`
  ADD PRIMARY KEY (`id_danh_gia`),
  ADD KEY `ik_tb_danhgia_tb_sanpham` (`id_san_pham`),
  ADD KEY `ik_tb_danhgia_tb_khachhang` (`username`);

--
-- Indexes for table `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  ADD PRIMARY KEY (`id_danh_muc`);

--
-- Indexes for table `tb_donhang`
--
ALTER TABLE `tb_donhang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `ik_tb_donhang_tb_khachhang` (`username`);

--
-- Indexes for table `tb_khachhang`
--
ALTER TABLE `tb_khachhang`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_lienhe`
--
ALTER TABLE `tb_lienhe`
  ADD PRIMARY KEY (`id_lienhe`);

--
-- Indexes for table `tb_rates`
--
ALTER TABLE `tb_rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD PRIMARY KEY (`id_san_pham`),
  ADD KEY `ik_tb_sanpham_tb_danhmuc` (`id_danh_muc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anhsp`
--
ALTER TABLE `tb_anhsp`
  MODIFY `id_anh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_baidang`
--
ALTER TABLE `tb_baidang`
  MODIFY `id_bai_dang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_binhluan`
--
ALTER TABLE `tb_binhluan`
  MODIFY `id_binh_luan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_chitiet_donhang`
--
ALTER TABLE `tb_chitiet_donhang`
  MODIFY `id_don_hang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_danhgia`
--
ALTER TABLE `tb_danhgia`
  MODIFY `id_danh_gia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  MODIFY `id_danh_muc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_donhang`
--
ALTER TABLE `tb_donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_lienhe`
--
ALTER TABLE `tb_lienhe`
  MODIFY `id_lienhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_rates`
--
ALTER TABLE `tb_rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  MODIFY `id_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_anhsp`
--
ALTER TABLE `tb_anhsp`
  ADD CONSTRAINT `ik_tb_anhsp_tb_sanpham` FOREIGN KEY (`id_san_pham`) REFERENCES `tb_sanpham` (`id_san_pham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_baidang`
--
ALTER TABLE `tb_baidang`
  ADD CONSTRAINT `il_tb_baidang_tb_khachhang` FOREIGN KEY (`username`) REFERENCES `tb_khachhang` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_binhluan`
--
ALTER TABLE `tb_binhluan`
  ADD CONSTRAINT `ik_tb_binhluan_tb_khachhang` FOREIGN KEY (`username`) REFERENCES `tb_khachhang` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ik_tb_binhluan_tb_sanpham` FOREIGN KEY (`id_san_pham`) REFERENCES `tb_sanpham` (`id_san_pham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_chitiet_donhang`
--
ALTER TABLE `tb_chitiet_donhang`
  ADD CONSTRAINT `ik_tb_chitiet_donhang_tb_sanpham` FOREIGN KEY (`id_san_pham`) REFERENCES `tb_sanpham` (`id_san_pham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_danhgia`
--
ALTER TABLE `tb_danhgia`
  ADD CONSTRAINT `fk_danhgia_sanpham` FOREIGN KEY (`id_san_pham`) REFERENCES `tb_sanpham` (`id_san_pham`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ik_tb_danhgia_tb_khachhang` FOREIGN KEY (`username`) REFERENCES `tb_khachhang` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_donhang`
--
ALTER TABLE `tb_donhang`
  ADD CONSTRAINT `ik_tb_donhang_tb_khachhang` FOREIGN KEY (`username`) REFERENCES `tb_khachhang` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD CONSTRAINT `ik_tb_sanpham_tb_danhmuc` FOREIGN KEY (`id_danh_muc`) REFERENCES `tb_danhmuc` (`id_danh_muc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

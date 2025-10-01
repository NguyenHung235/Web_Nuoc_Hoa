-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 28, 2022 lúc 03:35 PM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nuochoa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'admin', 'lamcao123', 1),
(3, 'tandmin', 'lamcao123', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`) VALUES
(3, 1, '9281', 0),
(4, 1, '4458', 0),
(5, 6, '1632', 1),
(6, 8, '8138', 0),
(7, 1, '4175', 0),
(8, 10, '4735', 0),
(9, 10, '9942', 0),
(10, 10, '6423', 0),
(11, 10, '7455', 0),
(12, 10, '7966', 0),
(13, 10, '8874', 0),
(14, 10, '2712', 1),
(16, 12, '892', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(7, '9281', 9, 3),
(8, '9281', 8, 1),
(9, '4458', 9, 3),
(10, '4458', 8, 1),
(11, '1632', 12, 5),
(12, '8138', 11, 5),
(13, '4175', 6, 2),
(14, '4175', 8, 2),
(15, '4735', 30, 1),
(16, '9942', 29, 1),
(17, '6423', 24, 1),
(18, '7455', 29, 1),
(19, '7966', 30, 1),
(20, '8874', 30, 1),
(21, '2712', 22, 1),
(22, '1919', 22, 1),
(23, '892', 22, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(12, 'cham', 'chamnguyen0803@gmail.com', 'HaNoi', 'lamcao123', '0987');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(2, 'NÆ°á»›c hoa Ná»¯', 3),
(4, 'NÆ°á»›c hoa Nam', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhanvien`
--

CREATE TABLE `tbl_nhanvien` (
  `id_nhanvien` int(9) NOT NULL,
  `tennhanvien` varchar(1000) NOT NULL,
  `manv` varchar(100) NOT NULL,
  `dienthoai` int(50) NOT NULL,
  `diachi` varchar(1000) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `chucvu` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `giakm` varchar(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `giakm`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(0, 'Zara Red Vanilla', '22', '380000', '770000', 2, '1646058542_Zara Red Vanilla.jpg', 'NÆ°á»›c hoa Zara Red Vanilla thuá»™c nhÃ³m nÆ°á»›c hoa Xá»‹t. ÄÃ¢y lÃ  máº«u nÆ°á»›c hoa thuá»™c dÃ²ng nÆ°á»›c hoa Eau De Toilette nÃªn cÃ³ kháº£ nÄƒng lÆ°u hÆ°Æ¡ng tá»« 3-5 tiáº¿ng vÃ  mÃ¹i hÆ°Æ¡ng dá»‹u nháº¹ Ä‘Ã£ thu hÃºt Ä‘Æ°á»£c nhá»¯ng ngÆ°á»i Ä‘am mÃª nÆ°á»›c hoa. CÃ¡c táº§ng hÆ°Æ¡ng Ä‘áº§u, hÆ°Æ¡ng giá»¯a vÃ  hÆ°Æ¡ng cuá»‘i vá»›i sá»± Ä‘a dáº¡ng vá» mÃ¹i hÆ°Æ¡ng táº¡o sá»± háº¥p dáº«n láº¡ thÆ°á»ng.', '', 1, 4),
(0, 'Zara Wonder Rose', '21', '399000', '950000', 3, '1646058687_uploaded_0df826f8938b4f2a2bcd509f1abfba', 'NÆ°á»›c hoa Zara Wonder Rose cÃ³ dung tÃ­ch 200ml thuá»™c nhÃ³m nÆ°á»›c hoa Xá»‹t. ÄÃ¢y lÃ  máº«u nÆ°á»›c hoa thuá»™c dÃ²ng nÆ°á»›c hoa Eau De Parfum nÃªn cÃ³ kháº£ nÄƒng lÆ°u hÆ°Æ¡ng lÃ¢u vÃ  khuáº¿ch tÃ¡n tá»‘t. Mang mÃ¹i hÆ°Æ¡ng Ä‘áº·c trÆ°ng cá»§a HÆ°Æ¡ng cÃ¢y cá» Ä‘Ã£ thu hÃºt Ä‘Æ°á»£c nhá»¯ng ngÆ°á»i Ä‘am mÃª nÆ°á»›c hoa. CÃ¡c táº§ng hÆ°Æ¡ng Ä‘áº§u, hÆ°Æ¡ng giá»¯a vÃ  hÆ°Æ¡ng cuá»‘i vá»›i sá»± Ä‘a dáº¡ng vá» mÃ¹i hÆ°Æ¡ng táº¡o sá»± háº¥p dáº«n láº¡ thÆ°á»ng.', '', 1, 2),
(0, 'Zara Femme', '20', '350000', '610000', 1, '1646058754_uploaded_c5823bc527914e6c82238ad5e5deee', 'NÆ°á»›c hoa Zara Femme cÃ³ dung tÃ­ch 30ml thuá»™c nhÃ³m nÆ°á»›c hoa Xá»‹t. ÄÃ¢y lÃ  máº«u nÆ°á»›c hoa thuá»™c dÃ²ng nÆ°á»›c hoa Eau De Toilette cÃ³ kháº£ nÄƒng lÆ°u hÆ°Æ¡ng tá»« 3-5 tiáº¿ng vÃ  mÃ¹i hÆ°Æ¡ng dá»‹u nháº¹. Mang mÃ¹i hÆ°Æ¡ng Ä‘áº·c trÆ°ng cá»§a HÆ°Æ¡ng mÃ¡t, dá»… chá»‹u Ä‘Ã£ thu hÃºt Ä‘Æ°á»£c nhá»¯ng ngÆ°á»i Ä‘am mÃª nÆ°á»›c hoa. CÃ¡c táº§ng hÆ°Æ¡ng Ä‘áº§u, hÆ°Æ¡ng giá»¯a vÃ  hÆ°Æ¡ng cuá»‘i vá»›i sá»± Ä‘a dáº¡ng vá» mÃ¹i hÆ°Æ¡ng táº¡o sá»± háº¥p dáº«n láº¡ thÆ°á»ng.', '', 1, 4),
(0, 'Zara Nuit', '19', '534000', '650000', 6, '1646058865_uploaded_d5997c9a7e76bdc40131a06b376964', 'NÆ°á»›c hoa Zara Nuit cÃ³ dung tÃ­ch 100ml thuá»™c nhÃ³m nÆ°á»›c hoa Xá»‹t. ÄÃ¢y lÃ  máº«u nÆ°á»›c hoa thuá»™c dÃ²ng nÆ°á»›c hoa Eau De Parfum nÃªn cÃ³ kháº£ nÄƒng lÆ°u hÆ°Æ¡ng lÃ¢u vÃ  khuáº¿ch tÃ¡n tá»‘t. Mang mÃ¹i hÆ°Æ¡ng Ä‘áº·c trÆ°ng cá»§a HÆ°Æ¡ng gá»— Ä‘Ã£ thu hÃºt Ä‘Æ°á»£c nhá»¯ng ngÆ°á»i Ä‘am mÃª nÆ°á»›c hoa. CÃ¡c táº§ng hÆ°Æ¡ng Ä‘áº§u, hÆ°Æ¡ng giá»¯a vÃ  hÆ°Æ¡ng cuá»‘i vá»›i sá»± Ä‘a dáº¡ng vá» mÃ¹i hÆ°Æ¡ng táº¡o sá»± háº¥p dáº«n láº¡ thÆ°á»ng.', '', 1, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  ADD PRIMARY KEY (`id_nhanvien`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  MODIFY `id_nhanvien` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

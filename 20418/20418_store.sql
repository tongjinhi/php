-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-11-18 04:38
-- 서버 버전: 10.4.27-MariaDB
-- PHP 버전: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `test`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `20418_store`
--

CREATE TABLE `20418_store` (
  `prod_num` int(11) NOT NULL,
  `item` char(10) NOT NULL,
  `color` char(10) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `like_num` int(11) DEFAULT NULL,
  `image` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20418_store`
--

INSERT INTO `20418_store` (`prod_num`, `item`, `color`, `price`, `like_num`, `image`) VALUES
(12345, '목도리', '갈색', 10000, 123, 'muffler.jpg'),
(20418, '티셔츠', '하양', 10000, 204, 'T-shirt.jpg'),
(70824, '모자', '검정', 20000, 824, 'cap.jpg'),
(98765, '장갑', '핑크', 15000, 987, 'gloves.jpg'),
(110308, '바지', '아이보리', 20000, 418, 'pants.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20418_store`
--
ALTER TABLE `20418_store`
  ADD PRIMARY KEY (`prod_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

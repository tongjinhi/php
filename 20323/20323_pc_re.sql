-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-11-20 03:40
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
-- 테이블 구조 `20323_pc_re`
--

CREATE TABLE `20323_pc_re` (
  `game` char(30) NOT NULL,
  `goal` char(10) NOT NULL,
  `performance` char(5) DEFAULT NULL,
  `cpu_br` char(10) DEFAULT NULL,
  `pc_price` int(11) DEFAULT NULL,
  `image` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20323_pc_re`
--

INSERT INTO `20323_pc_re` (`game`, `goal`, `performance`, `cpu_br`, `pc_price`, `image`) VALUES
('로블록스', '게임용', '중', '라이젠', 800000, '로블록스.jpg'),
('마인크래프트', '게임용', '하', '인텔', 500000, '마인크래프트.jpg'),
('발로란트', '게임용', '중', '인텔', 750000, '발로란트.jpg'),
('베스테리아', '게임', '상', '라이젠', 900000, '베스테리아.jpg'),
('오버워치', '게임용', '중', '인텔', 800000, '오버워치.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20323_pc_re`
--
ALTER TABLE `20323_pc_re`
  ADD PRIMARY KEY (`game`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

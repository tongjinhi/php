-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-10-21 03:11
-- 서버 버전: 10.4.32-MariaDB
-- PHP 버전: 8.2.12

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
-- 테이블 구조 `20416_trip`
--

CREATE TABLE `20416_trip` (
  `Area` char(20) NOT NULL,
  `place` char(20) NOT NULL,
  `culture` char(50) DEFAULT NULL,
  `hotel` char(50) NOT NULL,
  `restaurant` char(50) DEFAULT NULL,
  `image` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20416_trip`
--

INSERT INTO `20416_trip` (`Area`, `place`, `culture`, `hotel`, `restaurant`, `image`) VALUES
('서울', '경복궁', '경복궁은 조선왕조', '신라스테이', '초밥집', 'trip_jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20416_trip`
--
ALTER TABLE `20416_trip`
  ADD PRIMARY KEY (`Area`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

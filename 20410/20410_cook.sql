-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-10-21 03:04
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
-- 테이블 구조 `20410_cook`
--

CREATE TABLE `20410_cook` (
  `name` char(20) NOT NULL,
  `diff` int(11) DEFAULT NULL,
  `c_stuff` char(200) NOT NULL,
  `recipe` char(200) NOT NULL,
  `c_info` char(200) DEFAULT NULL,
  `image` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20410_cook`
--

INSERT INTO `20410_cook` (`name`, `diff`, `c_stuff`, `recipe`, `c_info`, `image`) VALUES
('삭슈카 (에그 인 헬)', 2, '계란, 토마토 소스, 소세지 ...', '소세지를 먹기 좋게 잘라...', '이 음식은 지중해의 ...', 'food.png');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20410_cook`
--
ALTER TABLE `20410_cook`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-10-21 02:45
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
-- 테이블 구조 `20303_map`
--

CREATE TABLE `20303_map` (
  `name` char(30) NOT NULL,
  `maker` char(30) NOT NULL,
  `version` char(30) NOT NULL,
  `map_date` date NOT NULL,
  `description` char(100) DEFAULT NULL,
  `image` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20303_map`
--

INSERT INTO `20303_map` (`name`, `maker`, `version`, `map_date`, `description`, `image`) VALUES
('점프맵', '스티브', '1.150.2', '2022-02-22', '다양한 컨셉의 지형을 뛰어넘으며 자신의 실력을 확인하세요!', 'jump_map.png');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20303_map`
--
ALTER TABLE `20303_map`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

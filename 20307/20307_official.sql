-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-10-21 02:47
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
-- 테이블 구조 `20307_official`
--

CREATE TABLE `20307_official` (
  `name` char(20) NOT NULL,
  `type` char(5) NOT NULL,
  `rel_date` date NOT NULL,
  `contents` char(200) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `buylink` char(70) DEFAULT NULL,
  `img` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20307_official`
--

INSERT INTO `20307_official` (`name`, `type`, `rel_date`, `contents`, `price`, `buylink`, `img`) VALUES
('RimWorld','', '2013-11-04', 'AI스토리텔러와 함께하는 이야기 생성기', 35, 'https://steam.steampowered.com/store/Rimworld', './rimworld__textimg.png');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20307_official`
--
ALTER TABLE `20307_official`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

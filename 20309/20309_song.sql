-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-11-20 03:35
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
-- 테이블 구조 `20309_song`
--

CREATE TABLE `20309_song` (
  `songtitle` char(20) NOT NULL,
  `artist` char(20) NOT NULL,
  `feat` char(20) NOT NULL,
  `range1` char(20) NOT NULL,
  `genre` char(20) NOT NULL,
  `iamge` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 테이블의 덤프 데이터 `20309_song`
--

INSERT INTO `20309_song` (`songtitle`, `artist`, `feat`, `range1`, `genre`, `iamge`) VALUES
('Champion Love Song', 'Masiwei', 'RollFlash', '3분39초', '중국힙합', 'CL.jpg'),
('if i got money', '릴러말즈', '크루셜스타,창모', '4분13초', '힙합', 'igm.jpg'),
('ITX', '제너더질라', '창모', '3분10초', '힙합', 'ITX.jpg'),
('북향', '다이나믹듀오', '오혁', '3분43초', '싱잉랩', 'bh.jpg'),
('하나,둘', '김승민', '펀치', '3분21초', '싱잉랩', 'ot.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20309_song`
--
ALTER TABLE `20309_song`
  ADD PRIMARY KEY (`songtitle`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

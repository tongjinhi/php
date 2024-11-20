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
-- 테이블 구조 `20330_son`
--

CREATE TABLE `20330_son` (
  `name` char(10) NOT NULL,
  `team` char(10) NOT NULL,
  `age` char(10) NOT NULL,
  `league` char(10) NOT NULL,
  `nationily` char(10) NOT NULL,
  `image` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20330_son`
--

INSERT INTO `20330_son` (`name`, `team`, `age`, `league`, `nationily`, `image`) VALUES
('리오넬 메시', '인터마이애미', '37', '메이저 리그 사커', '아르헨티나', 'messi.jpg'),
('손흥민', '토트넘 핫스퍼', '32', '프리미어리그', '대한민국', 'son.jpg'),
('양민혁', '토트넘 핫스퍼', '18', '프리미어리그', '대한민국', 'ymh.jpg'),
('이강인', '파리생제르맹', '23', '리그앙 1', '대한민국', 'lgi.jpg'),
('황희찬', '울버햄튼', '28', '프리미어리그', '대한민국', 'hhc.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20330_son`
--
ALTER TABLE `20330_son`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

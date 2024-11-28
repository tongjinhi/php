-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-11-27 03:50
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
-- 테이블 구조 `20301_art`
--

CREATE TABLE `20301_art` (
  `sn` int(11) NOT NULL,
  `art_name` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `publisher` varchar(20) NOT NULL,
  `art_date` date NOT NULL,
  `art_description` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20301_art`
--

INSERT INTO `20301_art` (`sn`, `art_name`, `author`, `publisher`, `art_date`, `art_description`, `image`) VALUES
(1, '모나리자', '레오나르도 다 빈치', '초상', '2024-03-01', '최후의 만찬, 동방', '모나리자.jpg'),
(2, '신경망의 예술관', '레오나르도 다 빈치', '통진고', '2024-04-02', '작품설명', '신경망의 예술관.jpg'),
(3, '세계 뉴스', '레오나르도 다 빈치', '통진고', '2024-05-03', '작품설명', '세계 뉴스.jpg'),
(4, '최후의 만찬', '레오나르도 다 빈치', '통진고', '2024-06-04', '작품설명', '최후의 만찬.jpg'),
(5, '세상의 구세주', '레오나르도 다 빈치', '통진고', '2024-07-05', '작품설명', '세상의 구세주.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20301_art`
--
ALTER TABLE `20301_art`
  ADD PRIMARY KEY (`sn`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `20301_art`
--
ALTER TABLE `20301_art`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

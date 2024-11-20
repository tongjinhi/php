-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-11-20 03:37
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
-- 테이블 구조 `20326_ppl`
--

CREATE TABLE `20326_ppl` (
  `categorization` char(20) DEFAULT NULL,
  `name` char(20) NOT NULL,
  `actor` char(30) NOT NULL,
  `time` date NOT NULL,
  `ratings` int(11) NOT NULL,
  `image` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20326_ppl`
--

INSERT INTO `20326_ppl` (`categorization`, `name`, `actor`, `time`, `ratings`, `image`) VALUES
('드라마', '구미호뎐', '이동욱, 조보아', '2020-10-07', 6, '구미호뎐.jpg'),
('예능', '런닝맨', '유재석, 지석진, 김종국 등', '2010-07-11', 4, '런닝맨.jpg'),
('드라마', '마우스', '이승기, 이희준', '2021-03-03', 7, '마우스.jpg'),
('드라마', '악의꽃', '이준기, 문채원', '2020-07-29', 6, '악의꽃.jpg'),
('예능', '틈만나면,', '유재석, 유연석', '2024-10-22', 3, '틈만나면.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20326_ppl`
--
ALTER TABLE `20326_ppl`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

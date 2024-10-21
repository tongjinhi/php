-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-10-21 03:07
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
-- 테이블 구조 `20409_movie`
--

CREATE TABLE `20409_movie` (
  `movie_name` char(20) NOT NULL,
  `supervision` char(20) NOT NULL,
  `genre` char(20) NOT NULL,
  `rating` char(20) NOT NULL,
  `opening_date` date DEFAULT NULL,
  `image` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20409_movie`
--

INSERT INTO `20409_movie` (`movie_name`, `supervision`, `genre`, `rating`, `opening_date`, `image`) VALUES
('범죄도시4-1', '허명행-2', '범죄/액션-3', '15세이상 관람가-4', '2024-04-24', 'crime city.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20409_movie`
--
ALTER TABLE `20409_movie`
  ADD PRIMARY KEY (`movie_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

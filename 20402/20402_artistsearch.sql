-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-10-21 03:01
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
-- 테이블 구조 `20402_artistsearch`
--

CREATE TABLE `20402_artistsearch` (
  `person_id` int(11) NOT NULL,
  `series` char(50) NOT NULL,
  `influence` char(50) NOT NULL,
  `times` char(40) DEFAULT NULL,
  `nationality` char(10) DEFAULT NULL,
  `image` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20402_artistsearch`
--

INSERT INTO `20402_artistsearch` (`person_id`, `series`, `influence`, `times`, `nationality`, `image`) VALUES
(1, '시녀들', '빈첸트 반 고흐', '입제추의', '스페인', 'vangogh.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20402_artistsearch`
--
ALTER TABLE `20402_artistsearch`
  ADD PRIMARY KEY (`person_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

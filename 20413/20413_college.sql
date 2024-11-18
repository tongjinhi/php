-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-11-18 04:28
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
-- 테이블 구조 `20413_college`
--

CREATE TABLE `20413_college` (
  `school_name` char(20) NOT NULL,
  `dept_name` char(30) NOT NULL,
  `competition` char(50) NOT NULL,
  `job_rate` char(70) DEFAULT NULL,
  `admissions` char(90) DEFAULT NULL,
  `image` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20413_college`
--

INSERT INTO `20413_college` (`school_name`, `dept_name`, `competition`, `job_rate`, `admissions`, `image`) VALUES
('경희대', '소프트웨어융합과', '10.2:1', '94%', '2800', '경희대.jpg'),
('고려대', '영어영문학과', '20:1', '84%', '3000', '고려대.jpg'),
('단국대', '국어국문학과', '24:1', '81%', '2600', '단국대.jpg'),
('서울대울대', '경제학과', '35:1', '87%', '2700', '서울대.jpg'),
('연세대', '컴퓨터공학과', '20:1', '90%', '2500', '연세대.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20413_college`
--
ALTER TABLE `20413_college`
  ADD PRIMARY KEY (`school_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

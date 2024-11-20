-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-11-20 03:48
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
-- 테이블 구조 `20308_saus`
--

CREATE TABLE `20308_saus` (
  `project_name` char(30) NOT NULL,
  `budget` char(20) NOT NULL,
  `com_name` char(30) NOT NULL,
  `con_name` char(10) NOT NULL,
  `email` char(30) NOT NULL,
  `image` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20308_saus`
--

INSERT INTO `20308_saus` (`project_name`, `budget`, `com_name`, `con_name`, `email`, `image`) VALUES
('보험왕이 알려주는 영업 강의', '500만원', 'KCS', '김민주', '24tj20308@tongjin.hs.kr', '보험왕 영업.jpeg'),
('상대방을 신경쓰며 거절하는 방법 강의', '200만원', 'ERUS', '만구자', '24tj20308@tongjin.hs.kr', '거절 잘 하는 방법.jpeg'),
('아이스 브레이킹을 잘하는 방법 강의', '100만원', 'IBSG', '강설파', '24tj20308@tongjin.hs.kr', '말을 잘하는 방법.jpeg'),
('영업자의 태도 교육', '50만원', 'SAT', '이준', '24tj20308@tongjin.hs.kr', '영업사원의 태도.jpeg'),
('통진고 학생들을 위한 마케팅 강의', '10만원', '통진고', '김수혁', '24tj20308@tongjin.hs.kr', '통진고 마케팅 강의.jpeg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20308_saus`
--
ALTER TABLE `20308_saus`
  ADD PRIMARY KEY (`project_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

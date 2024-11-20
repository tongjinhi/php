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
-- 테이블 구조 `20321_player`
--

CREATE TABLE `20321_player` (
  `name` char(30) NOT NULL,
  `club` char(30) NOT NULL,
  `country` char(10) DEFAULT NULL,
  `position` char(10) DEFAULT NULL,
  `explan` char(100) DEFAULT NULL,
  `image` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20321_player`
--

INSERT INTO `20321_player` (`name`, `club`, `country`, `position`, `explan`, `image`) VALUES
('로드리', '맨체스터 시티FC', '스페인', '수비형 미드필더', '세계 최초로 수비형 미드필더 발롱도르 수상', '로드리.jpg'),
('리오넬 메시', '인터 마이애미FC', '아르헨티나', '공격수', '세계 최고의 상인 발롱도르 8개 수상', '리오넬 메시.jpg'),
('손흥민', '토트넘 핫스퍼 FC', '대한민국', '공격수', '아시아 최초 EPL 득점왕 수상', '손흥민.jpg'),
('케빈 더브라위너', '맨체스터 시티FC', '벨기에', '공격형 미드필더', 'EPL역대 최다 도움왕(4회),EPL 통산 도움 2위(113도움)', '케빈 더브라위너.jpg'),
('크리스티아누 호날두', '알 나스르 FC', '포르투갈', '공격수', '세계 최고의 상인 발롱도르 5개 수상', '크리스티아누 호날두.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20321_player`
--
ALTER TABLE `20321_player`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
-- 테이블 구조 `20313_gundam`
--

CREATE TABLE `20313_gundam` (
  `gundam_name` char(20) NOT NULL,
  `lineup` char(10) NOT NULL,
  `tpye` char(20) DEFAULT NULL,
  `meker` char(30) NOT NULL,
  `date` date DEFAULT NULL,
  `image` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 테이블의 덤프 데이터 `20313_gundam`
--

INSERT INTO `20313_gundam` (`gundam_name`, `lineup`, `tpye`, `meker`, `date`, `image`) VALUES
('Rx-0 유니콘 건담', 'MGEX', '건담', '반다이', '2020-09-12', 'Rx_0_유니콘건담MGEX.jpg'),
('\r\n가면라이더키바', 'f.g.r', '애니프라', '반다이남코', '2020-07-31', '가면라이더키바.jpg'),
('\r\n스트라이크건담', 'EG', '건담', '반다이', '2020-07-31', '스트라이크건담EG.jpg'),
('\r\n스트라이크프리덤', 'MGEX', '건담', '반다이남코', '2022-09-23', '스트라이크프리덤MGEX.jpg'),
('\r\n한카리아스', '포켓프라', '애니프라', '반다이', '2020-07-31', '포켓프라한카리아스.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20313_gundam`
--
ALTER TABLE `20313_gundam`
  ADD PRIMARY KEY (`image`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

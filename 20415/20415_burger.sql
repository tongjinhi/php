-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-11-19 07:32
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
-- 테이블 구조 `20415_burger`
--

CREATE TABLE `20415_burger` (
  `name` char(15) NOT NULL,
  `pay` int(11) NOT NULL,
  `R_day` date NOT NULL,
  `detail` char(20) NOT NULL,
  `calorie` int(11) NOT NULL,
  `image` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 테이블의 덤프 데이터 `20415_burger`
--

INSERT INTO `20415_burger` (`name`, `pay`, `R_day`, `detail`, `calorie`, `image`) VALUES
('감자튀김', 2500, '2030-04-01', '기름,감자', 330, '감자튀김.jpg'),
('더블치즈베이컨 버거', 4000, '2030-04-01', '고기,양파,치즈,빵,토마토', 2000, '버거.jpg'),
('초코콘', 1000, '2030-04-01', '초콜릿,아이스크림,콘', 500, '초코콘.jpg'),
('치킨너겟', 2300, '2030-04-01', '닭고기,대두,밀,우유,쇠고기,달걀', 1800, '치킨너겟.jpg'),
('콜라', 2000, '2030-04-01', '설탕,물,인산,색소', 350, '콜라.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20415_burger`
--
ALTER TABLE `20415_burger`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

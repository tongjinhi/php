-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-11-18 04:34
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
-- 테이블 구조 `20401_webtoon`
--

CREATE TABLE `20401_webtoon` (
  `title` char(30) NOT NULL,
  `author` char(30) NOT NULL,
  `genre` char(50) NOT NULL,
  `serial_period` date DEFAULT NULL,
  `serialization_cycle` char(100) DEFAULT NULL,
  `image` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20401_webtoon`
--

INSERT INTO `20401_webtoon` (`title`, `author`, `genre`, `serial_period`, `serialization_cycle`, `image`) VALUES
('스위트홈.jpg', '김칸비', '스릴러', '2017-10-12', '금요일', '스위트홈.jpg'),
('악녀를 죽여 줘', '사월생', '로맨스 판타지', '2019-12-19', '화요일', '악녀를 죽여 줘.jpg'),
('이제 곧 죽습니다', '이원식', '판타지', '2019-04-18', '금요일', '이제 곧 죽습니다.jpg'),
('전지적 독자 시점', '싱숑', '아포칼립스', '2018-01-06', '수요일', '전지적 독자 시점.jpg'),
('화이트 블러드', '임리나', '액션', '2020-01-15', '목요일', '화이트 블러드.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20401_webtoon`
--
ALTER TABLE `20401_webtoon`
  ADD PRIMARY KEY (`title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

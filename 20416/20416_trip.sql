-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-11-18 04:47
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
-- 테이블 구조 `20416_trip`
--

CREATE TABLE `20416_trip` (
  `Area` char(20) NOT NULL,
  `place` char(20) NOT NULL,
  `culture` char(50) DEFAULT NULL,
  `hotel` char(50) NOT NULL,
  `restaurant` char(50) DEFAULT NULL,
  `image` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20416_trip`
--

INSERT INTO `20416_trip` (`Area`, `place`, `culture`, `hotel`, `restaurant`, `image`) VALUES
('강릉', '낙산', '강원특별자치도 영동 지방의 빼어난 절경을 뜻하는 관동팔경 가운데 하나이다.', '낙산비치호텔', '흥부네밥상', 'Naksansa.jpg'),
('경주', '첨성대', '경주 첨성대는 국보 제31호로 신라 천년의 도읍지 경주에 있는 문화유산이다', '화림정한옥스테', '경주원콩국', 'Cheomseongdae.jpg'),
('남해', '독일마을', '1960년대 독일(당시 서독)에 간호사와 광부로 파견되었던 독일거주 교포들이 대한민국에 재', '요하네스펜', '당케슈니첼', 'German village.jpg'),
('서울', '경복궁', '경복궁은 조선왕조', '신라스테이', '초밥집', 'trip.jpg'),
('한라산', '어리목코스', '어리목 코스는 해발970m의 한라산 어리목탐방로 입구에서 시작해 어리목 계곡, 사제비동산,', '호텔난타', '춘심이네2호점', 'Eorimok Course.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20416_trip`
--
ALTER TABLE `20416_trip`
  ADD PRIMARY KEY (`Area`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

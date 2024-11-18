-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-11-18 06:27
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
-- 테이블 구조 `bookinfo`
--

CREATE TABLE `bookinfo` (
  `number` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `writer` varchar(50) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `p_date` date NOT NULL,
  `summary` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `bookinfo`
--

INSERT INTO `bookinfo` (`number`, `name`, `writer`, `publisher`, `p_date`, `summary`, `image`) VALUES
(1, '데미안', '헤르만헤세', '통진고출판', '2024-08-12', '참다운 어른이 되어 가는 소년 싱클레어의 이야기', '데미안.jpg'),
(2, '싯다르타', '헤르만헤세', '믿음사', '2024-08-13', '동서양의 정신적 유산을 시적으로 승화시킨 일종의 종교적 성장', '싯다르타.jpg'),
(3, '객체지향언어', '멘토르', '통진출판', '2024-08-13', '이것은 객체지향언어를 게임 프로그래밍을 활용하여 사용자가 이해하기 쉽게 해설', '객체지향.jpg'),
(4, '수레바퀴 아래서', '헤르만 헤세', '아로파', '2023-05-31', '19세기 말, 독일 사회를 배경으로 당대 억압적인 학교 제도의 모순점을 비판한 소설', '수레바퀴 아래서.jpg'),
(10, ' 유니티로 배우는 강화학습', '사이언', '마송출판사', '2024-11-18', '다양한 게임을 제작하며 배우는 심층 강화학습', '강화.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `bookinfo`
--
ALTER TABLE `bookinfo`
  ADD PRIMARY KEY (`number`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `bookinfo`
--
ALTER TABLE `bookinfo`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

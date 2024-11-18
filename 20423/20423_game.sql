-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-11-18 04:40
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
-- 테이블 구조 `20423_game`
--

CREATE TABLE `20423_game` (
  `name` char(10) NOT NULL,
  `P_date` date NOT NULL,
  `Genre` char(5) NOT NULL,
  `rating` char(10) NOT NULL,
  `explanation` char(200) NOT NULL,
  `image` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20423_game`
--

INSERT INTO `20423_game` (`name`, `P_date`, `Genre`, `rating`, `explanation`, `image`) VALUES
('리그오브레전드', '2006-06-01', 'MOVA', '12세 이용가', '리그오브레전드 개인의 숙련도와 팀 시너지를 조합하는 5대5 게임이다', 'lol.jpg'),
('발로란트', '2020-06-02', 'FPS', '15세 이용가', '발로란트는 폭발물을 설치 또는 해체 하는 5:5게임이다', 'valorant.jpg'),
('배틀그라운드', '2017-04-06', 'FPS', '청소년 이용불가', '배틀그라운드는 100명에서 1위를 하는 게임이다', 'PUBG.jpg'),
('오버워치', '2016-05-24', 'FPS', '12세 이용가', '오버워치는 각 캐릭터의 스킬로 게임을 승리하는 5:5게임이다', 'overwatch.jpg'),
('포트나이트', '2017-07-25', 'TPS', '12세 이용가', '포트나이트는  3인칭 슈팅 게임으로, PVP 콘텐츠인 배틀로얄 게임이다', 'fortnite.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20423_game`
--
ALTER TABLE `20423_game`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

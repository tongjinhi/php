-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-11-20 03:52
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
-- 테이블 구조 `20303_map`
--

CREATE TABLE `20303_map` (
  `name` char(30) NOT NULL,
  `maker` char(30) NOT NULL,
  `version` char(30) NOT NULL,
  `map_date` date NOT NULL,
  `description` char(100) DEFAULT NULL,
  `image` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20303_map`
--

INSERT INTO `20303_map` (`name`, `maker`, `version`, `map_date`, `description`, `image`) VALUES
('colorless', '재민1414', '1.20', '2024-07-07', '색이 사라진 세계에서 색을 다시 되찾기 위해 모험을 떠나는 주인공의 이야기', 'colorless.png'),
('the backroom', 'WAL', '1.20.1', '2024-07-07', '백룸에서부터 탈출하세요!', 'backroom.png'),
('time keeper', '리스빈', '1.13.3', '2024-07-07', '시간을 지키는 타임키퍼의 위대한 여정!', 'time keeper.png'),
('수많은 별들 중에', '콜룰라', '1.12.2', '2024-07-07', '로맨스 소설', 'stars.png'),
('팬션 살인사건', '별돌맹이', '1.7.10', '2024-07-07', '팬션 살인사건 과연 범인은?', 'merder.png');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20303_map`
--
ALTER TABLE `20303_map`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

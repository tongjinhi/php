-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-11-18 04:46
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
-- 테이블 구조 `20409_movie`
--

CREATE TABLE `20409_movie` (
  `movie_name` char(20) NOT NULL,
  `supervision` char(20) NOT NULL,
  `genre` char(20) NOT NULL,
  `rating` char(20) NOT NULL,
  `opening_date` date DEFAULT NULL,
  `image` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20409_movie`
--

INSERT INTO `20409_movie` (`movie_name`, `supervision`, `genre`, `rating`, `opening_date`, `image`) VALUES
('날씨의 아이', ' 신카이 마코토', '로맨스/재난', '15세이상 관람가', '2024-07-19', 'a child of the weather.jpg'),
('범죄도시4-1', '허명행-2', '범죄/액션-3', '15세이상 관람가-4', '2024-04-24', 'crime city.jpg'),
('베놈 라스트 댄스', '켈리 마셀', ' 스릴러, 공포, 어드벤처, 다크 판', '15세이상 관람가', '2024-10-23', 'Venom.jpg'),
('베테랑2', '류승완', '범죄', '15세이상 관람가', '2024-09-13', 'Veteran.jpg'),
('청설', ' 조선호', '로맨스/드라마', '전체관람', '2024-11-06', 'a clear theory.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20409_movie`
--
ALTER TABLE `20409_movie`
  ADD PRIMARY KEY (`movie_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

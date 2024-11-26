-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-11-18 04:42
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
-- 테이블 구조 `20426_news`
--

CREATE TABLE `20426_news` (
  `title` char(20) NOT NULL,
  `news_date` date DEFAULT NULL,
  `opinion` char(20) NOT NULL,
  `contect` char(20) DEFAULT NULL,
  `source` char(20) DEFAULT NULL,
  `image` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20426_news`
--

INSERT INTO `20426_news` (`title`, `news_date`, `opinion`, `contect`, `source`, `image`) VALUES
('30년 동반 기업에 감사패 수여', '2024-11-18', '지속 가능한 상생 경영을 실천', '상생 경영을 다짐', '김태일 기자', 'management.JPG'),
('4년 연속 \'인권경영 인증\' 획득', '2024-11-18', '인권경영 관리 방침과 목표', '실행 체계 등 전문가 심사', '이성철 기자', 'human rights.png'),
('ESG A등급 받은 비결', '2023-09-24', '예술 작품 탄생', '6년 연속 A등급', '뉴스투데이=김소희 기자', 'ESG.JPG'),
('경영 전면 나서는 후계자', '2024-11-16', '연말 임원 인사에서 재계 후계자들의', '올해 재계 인사 트렌드는 후계자 승진', '김문수 기자', 'HD.jpg'),
('영감독기구 임기만료', '2024-07-16', '법정 임기가 만료됐다.', '임원 임기가 만료돼도 후임자가 선임', '김예리 기자', 'federation.JPG');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20426_news`
--
ALTER TABLE `20426_news`
  ADD PRIMARY KEY (`title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-11-20 03:46
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
-- 테이블 구조 `20307_official`
--

CREATE TABLE `20307_official` (
  `name` char(20) NOT NULL,
  `type` char(5) NOT NULL,
  `rel_date` date NOT NULL,
  `contents` char(200) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `buylink` char(70) DEFAULT NULL,
  `img` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20307_official`
--

INSERT INTO `20307_official` (`name`, `type`, `rel_date`, `contents`, `price`, `buylink`, `img`) VALUES
('anomaly', 'dlc', '2024-04-11', '미친 초월체 아르코테크가 만들어낸, 초현실적이고 기괴한 실체들을 만나보십시오. ...', 30, 'https://어노스팀링크.com', 'rimworld_anomalyimg.png'),
('biotech', 'dlc', '2022-10-21', '새로운 종족들을 만나고, 메카노이드를 직접 조종하고, 무엇보다 중요한 당신의 아이를 양육하십시오.', 30, 'https://바텍스팀링크.com', 'rimworld_biotechimg.png'),
('combat extended', 'mod', '0000-00-00', '새로운 차원의 전투 경험을 만나보십시오. 각종 현실적인 무기와 방어, 엄폐시스템...', 0, 'https://CE스팀링크.com', 'rimworld_CEmod.png'),
('RimWorld', '', '2013-11-04', 'AI스토리텔러와 함께하는 이야기 생성기', 35, 'https://steam.steampowered.com/store/Rimworld', './rimworld_textimg.png'),
('rotalty', 'dlc', '2020-02-24', '제국이 도착했습니다. 수천년전의 구식 체제와 최신식의 초능력을 갖춘 이들과 협력할지, 적대할지...', 20, 'https://로얄티스팀링크.com', 'rimworld_royaltyimg.png');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20307_official`
--
ALTER TABLE `20307_official`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

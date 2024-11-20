-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-11-20 03:50
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
-- 테이블 구조 `20310_lc`
--

CREATE TABLE `20310_lc` (
  `creture_name` char(20) NOT NULL,
  `killability` char(20) NOT NULL,
  `attack` char(20) NOT NULL,
  `max` int(11) NOT NULL,
  `behavier` char(100) NOT NULL,
  `image` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20310_lc`
--

INSERT INTO `20310_lc` (`creture_name`, `killability`, `attack`, `max`, `behavier`, `image`) VALUES
('덤퍼', '처치가능', '높음', 4, '플레이어를 보면 가속하여 달려온다 속도는 벽에 박거나 코너가 아니면 끊임없이 가속한다', 'th.jpg'),
('벙커거미', '처치가능', '다소높음', 1, '거미줄을 생성하며 둥지를 지정해 플레이어를 노린다 거미줄에 닿을경우 벙커거미가 끝까지 추적한다\r\n(*거미줄은 타격을 줄 수 있는 무기로 제거 가능하지만 거미가 추적을 시작한다)', 'sp.jpg'),
('브래컨', '처치가능', '즉사', 1, '시설 내부에서만 돌아다니며 조용하고 빠르게 플레이어 뒤를 잡아 교살시킨다,후방을 자주자주 봐야한다(*브래컨을 여러명 또는 한 명이서 계속 보는것을 주의*)', 'br.jpg'),
('올가미 벼룩', '처치가능', '다소약함', 5, '천장에 붙어 플레이어의 머리를 노린다 올가미 벼룩이 머리에 달라 붙으면 가지고 있는 물건을 모두\r\n내려놓으며 시야가 상당히 제한된다 그 상태에선\r\n누군가가 올가미 벼룩을 때려주거나', 'sn.jpg'),
('호두까기인형', '처치가능', '다소높음', 10, '큰소리를 내며배회한다,배회할때 발차기를 주의하자', 'LC.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20310_lc`
--
ALTER TABLE `20310_lc`
  ADD PRIMARY KEY (`creture_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

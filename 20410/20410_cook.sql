-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-11-18 04:48
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
-- 테이블 구조 `20410_cook`
--

CREATE TABLE `20410_cook` (
  `name` char(20) NOT NULL,
  `diff` int(11) DEFAULT NULL,
  `c_stuff` char(200) NOT NULL,
  `recipe` char(200) NOT NULL,
  `c_info` char(200) DEFAULT NULL,
  `image` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20410_cook`
--

INSERT INTO `20410_cook` (`name`, `diff`, `c_stuff`, `recipe`, `c_info`, `image`) VALUES
('까르보나라', 3, '계란 노른자, 관찰레(베이컨으로 대체 가능) ...', '계란 노른자 3개에 치즈와 볶은 후추를....', 'no cream on carbonara', 'Carbonara.jpg'),
('삭슈카 (에그 인 헬)', 3, '계란, 토마토 소스, 소세지 ...', '소세지를 먹기 좋게 잘라...', '이 음식은 지중해의 ...', 'egg_in_hell.jpg'),
('새우 크림 파스타', 4, '새우, 우유, 새송이 버섯, 버터 ...', '면을 80%만 삶은 후 다른 팬에 우유와 재료 ...', '꾸덕하고 맛있는 크림파스타', 'cream_pasta.jpg'),
('양송이 파스타 (원팬)', 2, '페투치니 면(파스타), 양송이 버섯, 양파 ...', '팬에 면, 다진 양파, 슬라이스한 양송이 버섯 ...', '간단하고 쉽지만 맛은 보장되는 원팬 파스타', 'mush_pasta.png'),
('콘치즈 소세지', 4, '그릴드/후랑크 소세지, 피자 치즈, 양파, ...', '다진 파프리카, 양파에 후추 마요네즈를 ...', '손이 많이 가지만 그 만큼 맛있는 콘치즈 소세지', 'corn_with_sausage.png');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20410_cook`
--
ALTER TABLE `20410_cook`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

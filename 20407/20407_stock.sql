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
-- 테이블 구조 `20407_stock`
--

CREATE TABLE `20407_stock` (
  `stock_name` char(30) NOT NULL,
  `stock_information` char(30) NOT NULL,
  `Graph` char(30) NOT NULL,
  `chart` char(100) DEFAULT NULL,
  `country` char(30) DEFAULT NULL,
  `image` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `20407_stock`
--

INSERT INTO `20407_stock` (`stock_name`, `stock_information`, `Graph`, `chart`, `country`, `image`) VALUES
('kingsman', '몇 명이 죽었나', '주식.jpeg', '주식.jpeg', 'America', 'zldtm.png'),
('나호연', '언제까지 잘생길지', '그래프.JPEG', '그래프2.JPEG', 'korea', 'skghdus.jpeg'),
('코카콜라', '펩시를 이길 수 있을지?', '주식4.jpeg', '주식5.jpeg', 'America', 'zhzk.jpeg'),
('토토로', '언제까지 인기가 있을지', '주식2.jpeg', '주식 3.jpeg', 'Japan', 'xhxhfh.jpeg'),
('펩시', '코카콜라를 이길 수 있을지', '주식6.jpeg', '주식7.jpeg', 'America', 'vpqtl.jpeg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `20407_stock`
--
ALTER TABLE `20407_stock`
  ADD PRIMARY KEY (`stock_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

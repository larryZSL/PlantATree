-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-05-07 01:56:40
-- 服务器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `se`
--

-- --------------------------------------------------------

--
-- 表的结构 `tree`
--

CREATE TABLE `tree` (
  `tree_id` int(255) NOT NULL,
  `tree_name` varchar(255) NOT NULL,
  `tree_price` float NOT NULL,
  `tree_type` varchar(255) NOT NULL,
  `tree_category` varchar(255) NOT NULL,
  `tree_soilDrainage` varchar(255) NOT NULL,
  `tree_sun` varchar(255) NOT NULL,
  `tree_mainRequireLv` varchar(255) NOT NULL,
  `tree_mainRequireDe` varchar(255) NOT NULL,
  `tree_maxHeight` varchar(255) NOT NULL,
  `tree_growthRate` varchar(255) NOT NULL,
  `tree_quility` int(255) NOT NULL,
  `tree_stock` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `tree`
--

INSERT INTO `tree` (`tree_id`, `tree_name`, `tree_price`, `tree_type`, `tree_category`, `tree_soilDrainage`, `tree_sun`, `tree_mainRequireLv`, `tree_mainRequireDe`, `tree_maxHeight`, `tree_growthRate`, `tree_quility`, `tree_stock`) VALUES
(1, 'apple tree', 20, 'unknown', 'test', '...', '...', '...', '...', '...', '...', 1, 3);

--
-- 转储表的索引
--

--
-- 表的索引 `tree`
--
ALTER TABLE `tree`
  ADD PRIMARY KEY (`tree_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `tree`
--
ALTER TABLE `tree`
  MODIFY `tree_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

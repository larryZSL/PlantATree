-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-05-21 08:23:38
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
-- 表的结构 `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(255) NOT NULL,
  `cus_password` varchar(255) NOT NULL,
  `cus_fname` varchar(255) NOT NULL,
  `cus_lname` varchar(255) NOT NULL,
  `cus_gender` varchar(255) NOT NULL,
  `cus_email` varchar(255) NOT NULL,
  `cus_phone` varchar(255) NOT NULL,
  `cus_address` varchar(255) NOT NULL,
  `cus_tpq` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_password`, `cus_fname`, `cus_lname`, `cus_gender`, `cus_email`, `cus_phone`, `cus_address`, `cus_tpq`) VALUES
(1, '123', 'zzz', 'aaa', 'Male', '123@gmail.com', '0211111111', '3 dsdxcadd', 0);

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE `product` (
  `prod_id` int(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` int(255) NOT NULL,
  `prod_quility` int(255) NOT NULL,
  `prod_stock` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `shipment`
--

CREATE TABLE `shipment` (
  `ship_id` int(255) NOT NULL,
  `order_id` int(255) NOT NULL,
  `prod_id` int(255) NOT NULL,
  `prod_quility` int(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `tree_id` int(255) NOT NULL,
  `tree_name` varchar(255) NOT NULL,
  `tree_quility` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `tree_stock` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `tree`
--

INSERT INTO `tree` (`tree_id`, `tree_name`, `tree_price`, `tree_type`, `tree_category`, `tree_soilDrainage`, `tree_sun`, `tree_mainRequireLv`, `tree_mainRequireDe`, `tree_maxHeight`, `tree_growthRate`, `tree_stock`) VALUES
(1, 'apple tree', 20, 'unknown', 'test', 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', 35),
(2, 'lemon', 12, 'test2', 'test2', 'test2', 'test2', 'test2', 'test2', 'test2', 'test2', 18);

-- --------------------------------------------------------

--
-- 表的结构 `treeorder`
--

CREATE TABLE `treeorder` (
  `order_id` int(255) NOT NULL,
  `cus_id` int(255) NOT NULL,
  `tree_id` int(255) NOT NULL,
  `order_quility` int(255) NOT NULL,
  `order_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转储表的索引
--

--
-- 表的索引 `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`ship_id`);

--
-- 表的索引 `tree`
--
ALTER TABLE `tree`
  ADD PRIMARY KEY (`tree_id`);

--
-- 表的索引 `treeorder`
--
ALTER TABLE `treeorder`
  ADD PRIMARY KEY (`order_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `tree`
--
ALTER TABLE `tree`
  MODIFY `tree_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `treeorder`
--
ALTER TABLE `treeorder`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

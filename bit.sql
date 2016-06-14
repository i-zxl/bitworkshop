-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-06-14 17:50:35
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bit`
--

-- --------------------------------------------------------

--
-- 表的结构 `bit_message`
--

CREATE TABLE IF NOT EXISTS `bit_message` (
  `id` int(11) NOT NULL,
  `b_user` varchar(50) NOT NULL,
  `b_Professional` varchar(50) NOT NULL,
  `b_email` varchar(50) NOT NULL,
  `b_message` text NOT NULL,
  `b_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `bit_message`
--

INSERT INTO `bit_message` (`id`, `b_user`, `b_Professional`, `b_email`, `b_message`, `b_time`) VALUES
(0, 'ssdd', 'sdsdsd', 'sdsds@qq.com', 'sdasdsd', '2016-06-14');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

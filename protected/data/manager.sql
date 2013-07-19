-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
<<<<<<< HEAD
-- 生成日期: 2013 年 07 月 19 日 21:27
-- 服务器版本: 5.5.29-log
-- PHP 版本: 5.3.20
=======
-- 生成日期: 2013 年 07 月 22 日 01:02
-- 服务器版本: 5.6.12
-- PHP 版本: 5.5.0
>>>>>>> 94017a0... commited

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `manager`
--
CREATE DATABASE IF NOT EXISTS `manager` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `manager`;

-- --------------------------------------------------------

--
-- 表的结构 `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` char(32) NOT NULL,
  `nick_name` varchar(16) NOT NULL,
  `group_id` smallint(5) unsigned NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uni_username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `nick_name`, `group_id`, `created_time`) VALUES
(1, 'administerator', 'c822b444d738ddf229b5a7bb569b4b24', '超级管理员', 1, '2013-07-16 09:25:00');

-- --------------------------------------------------------

--
<<<<<<< HEAD
=======
-- 表的结构 `tbl_article`
--

CREATE TABLE IF NOT EXISTS `tbl_article` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` smallint(5) unsigned NOT NULL,
  `sortnum` mediumint(9) NOT NULL,
  `title` varchar(24) NOT NULL,
  `pic` varchar(48) NOT NULL,
  `link` varchar(64) NOT NULL,
  `intro` varchar(256) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `ind_category_id_sortnum` (`category_id`,`sortnum`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
>>>>>>> 94017a0... commited
-- 表的结构 `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `pid` smallint(5) unsigned NOT NULL,
  `route` varchar(48) NOT NULL,
  `sortnum` smallint(6) NOT NULL,
  `name` varchar(16) NOT NULL,
<<<<<<< HEAD
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
=======
  `pic` varchar(48) NOT NULL,
  `max_level` tinyint(1) unsigned NOT NULL,
  `intro` varchar(32) NOT NULL,
  `has_sub` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ind_route` (`route`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `pid`, `route`, `sortnum`, `name`, `pic`, `max_level`, `intro`, `has_sub`) VALUES
(1, 0, '', 10, '关于我们', '', 3, '', 0),
(2, 0, '', 20, '组织架构', '', 3, '', 0);
>>>>>>> 94017a0... commited

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

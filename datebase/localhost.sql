-- phpMyAdmin SQL Dump
-- version 3.3.7
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 12 月 20 日 03:28
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `music`
--
CREATE DATABASE `music` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `music`;

-- --------------------------------------------------------

--
-- 表的结构 `user_reg`
--

CREATE TABLE IF NOT EXISTS `user_reg` (
  `user_mobile` char(11) NOT NULL COMMENT '用户手机号',
  `email` varchar(50) NOT NULL COMMENT '用户邮箱',
  `user_name` varchar(50) NOT NULL COMMENT '用户名',
  `user_password` varchar(50) NOT NULL COMMENT '用户密码',
  PRIMARY KEY  (`user_name`,`user_password`),
  UNIQUE KEY `user_mobile` (`user_mobile`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户注册信息表';

--
-- 转存表中的数据 `user_reg`
--

INSERT INTO `user_reg` (`user_mobile`, `email`, `user_name`, `user_password`) VALUES
('15839115801', 'w@q.c', 'lxc', '123456'),
('15839115809', '', 'qwe', '');

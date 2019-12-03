-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2016 年 11 月 14 日 02:37
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `cms`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `admin`
-- 

CREATE TABLE `admin` (
  `user` varchar(20) character set gb2312 collate gb2312_bin NOT NULL,
  `pwd` varchar(20) character set gb2312 collate gb2312_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 
-- 导出表中的数据 `admin`
-- 

INSERT INTO `admin` VALUES (0x61646d696e, 0x61646d696e);
INSERT INTO `admin` VALUES (0x6c6f67696e, 0x6c6f67696e);

-- --------------------------------------------------------

-- 
-- 表的结构 `category`
-- 

CREATE TABLE `category` (
  `no` varchar(20) character set gb2312 collate gb2312_bin NOT NULL,
  `name` varchar(20) character set gb2312 collate gb2312_bin NOT NULL,
  `child` varchar(20) character set gb2312 collate gb2312_bin NOT NULL,
  `action` varchar(20) character set gb2312 collate gb2312_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 
-- 导出表中的数据 `category`
-- 

INSERT INTO `category` VALUES (0x31313131, 0x32323232, 0x33333333, 0x34343434);

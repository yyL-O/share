-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 06 月 24 日 19:59
-- 服务器版本: 5.1.33
-- PHP 版本: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `share`
--

-- --------------------------------------------------------

--
-- 表的结构 `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(5) NOT NULL,
  `pic` varchar(20) NOT NULL,
  `words` varchar(150) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `content`
--


-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `sex` int(2) NOT NULL,
  `city` varchar(20) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `introduce` varchar(150) NOT NULL,
  `img` varchar(50) NOT NULL DEFAULT 'images/userPic.jpg',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 导出表中的数据 `user`
--

INSERT INTO `user` (`uid`, `email`, `nickname`, `password`, `sex`, `city`, `occupation`, `introduce`, `img`) VALUES
(7, 'yylyang1228@gmail.com', 'yyl', 'e10adc3949ba59abbe56e057f20f883e', 0, '武汉', '程序媛', '如果说人生是一场冒险之旅，我愿意在野兽口中脱险，我愿意选择一条不知道尽头的道路，我愿意在途中结识同伴，我也愿意找到一个温暖的洞穴栖息。。。', 'uploads/xxxx.jpg'),
(8, '648457250@qq.com', 'll', 'e10adc3949ba59abbe56e057f20f883e', 0, '十堰', '前端工程师', '水瓶座女生，思维活跃，2B青年+文艺青年一枚，喜欢丢三落四，讨厌虚伪，属于奋发向上的一代。', 'uploads/z.jpg'),
(9, 'yylyang1228@outlook.com', 'yang', 'e10adc3949ba59abbe56e057f20f883e', 0, '成都', '小老板', '悠闲生活是我的座右铭。', 'images/userPic.jpg'),
(10, 'yylyang1228@163.com', 'y', 'e10adc3949ba59abbe56e057f20f883e', 0, '杭州', '自由职业', '所有的努力都会以这样那样的方式给予一定的回报，所以不要担心付出没有回报，只是可能存在于另一种形式罢了！', 'uploads/w=2048.jpg');

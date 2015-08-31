-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 08 月 28 日 10:15
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `thinkphp`
--
CREATE DATABASE IF NOT EXISTS `thinkphp` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `thinkphp`;

-- --------------------------------------------------------

--
-- 表的结构 `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
  `user_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `add_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  KEY `user_name` (`user_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='后台登陆用户名，密码，邮箱等信息' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `admin_user`
--

INSERT INTO `admin_user` (`user_id`, `user_name`, `email`, `password`, `add_time`) VALUES
(3, 'admin', '', '21232f297a57a5a743894a0e4a801fc3', 0);

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `demo` varchar(8) COLLATE utf8_bin NOT NULL COMMENT '评论针对哪一个demo这个板块',
  `user_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `comment` text COLLATE utf8_bin NOT NULL,
  `approving_num` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_image` varchar(128) COLLATE utf8_bin NOT NULL DEFAULT '__ROOT__/Home/Tpl/Public/images/tx.jpg' COMMENT '用户头像的路径',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='存储评论的内容' AUTO_INCREMENT=29 ;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`demo`, `user_name`, `comment`, `approving_num`, `id`, `user_image`) VALUES
('1-1', 'jack', 'jack is a good man', 12, 1, '__ROOT__/Home/Tpl/Public/images/tx.jpg'),
('1-1', 'jack', 'jack is a good man', 13, 2, '__ROOT__/Home/Tpl/Public/images/tx.jpg'),
('1-1', 'jack', 'jack is a good man', 14, 3, '__ROOT__/Home/Tpl/Public/images/tx.jpg'),
('1-1', 'jack', 'jack is a good man', 15, 4, '__ROOT__/Home/Tpl/Public/images/tx.jpg'),
('1-1', 'jack', 'jack is a nice', 100, 5, '__ROOT__/Home/Tpl/Public/images/tx.jpg'),
('1-1', 'jack', 'jack is a good boy', 12, 6, '__ROOT__/Home/Tpl/Public/images/tx.jpg'),
('1-1', '默认用户名', 'sdfasdfasf', 0, 7, '/thinkphp/Home/Tpl/Public/images/tx.jpg'),
('1-1', '默认用户名', 'sdfasdfasfdasfadf', 0, 8, '/thinkphp/Home/Tpl/Public/images/tx.jpg'),
('1-1', '默认用户名', 'adsfasdfasdf', 0, 9, '/thinkphp/Home/Tpl/Public/images/tx.jpg'),
('1-1', '默认用户名', 'asdfasdfaf', 0, 10, '/thinkphp/Home/Tpl/Public/images/tx.jpg'),
('1-1', '默认用户名', 'asdfasdfaf', 0, 11, '/thinkphp/Home/Tpl/Public/images/tx.jpg'),
('1-1', '默认用户名', 'sarsdfgsdf', 0, 12, '/thinkphp/Home/Tpl/Public/images/tx.jpg'),
('1-1', '默认用户名', 'sarsdfgsdf', 0, 13, '/thinkphp/Home/Tpl/Public/images/tx.jpg'),
('1-1', '默认用户名', '阿斯顿发送到发大水', 0, 14, '/thinkphp/Home/Tpl/Public/images/tx.jpg'),
('1-1', '默认用户名', '阿斯顿发送到发大水', 0, 15, '/thinkphp/Home/Tpl/Public/images/tx.jpg'),
('1-1', '默认用户名', '阿打发斯蒂芬', 0, 16, '/thinkphp/Home/Tpl/Public/images/tx.jpg'),
('1-1', '默认用户名', '阿打发斯蒂芬大法师的', 0, 17, '/thinkphp/Home/Tpl/Public/images/tx.jpg'),
('1-1', '默认用户名', '阿斯顿发送到方法', 0, 18, '/thinkphp/Home/Tpl/Public/images/tx.jpg'),
('1-1', '默认用户名', 'asdfasdfasd', 0, 19, '/thinkphp/Home/Tpl/Public/images/tx.jpg'),
('1-1', '默认用户名', '阿斯顿发地方的司法斯蒂芬', 0, 20, '/thinkphp/Home/Tpl/Public/images/tx.jpg'),
('1-1', '默认用户名', '阿斯蒂芬', 0, 21, '/thinkphp/Home/Tpl/Public/images/tx.jpg'),
('1-1', '默认用户名', '啊打算发松岛枫', 0, 22, '/thinkphp/Home/Tpl/Public/images/tx.jpg'),
('1-1', '默认用户名', '是的发送到发送到发送到', 0, 23, '/thinkphp/Home/Tpl/Public/images/tx.jpg'),
('1-1', '默认用户名', '十大发送到发送到', 0, 24, '/thinkphp/Home/Tpl/Public/images/tx.jpg'),
('1-1', '默认用户名', '阿斯顿发送到发送到发', 0, 25, '/thinkphp/Home/Tpl/Public/images/tx.jpg'),
('1-1', '默认用户名', '是对方告诉对方个', 0, 26, '/thinkphp/Home/Tpl/Public/images/tx.jpg'),
('1-1', '默认用户名', '山东分公司', 0, 27, '/thinkphp/Home/Tpl/Public/images/tx.jpg'),
('1-1', '默认用户名', '大事发生大事的发送到', 0, 28, '/thinkphp/Home/Tpl/Public/images/tx.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `d1`
--

CREATE TABLE IF NOT EXISTS `d1` (
  `txtarea` varchar(256) COLLATE utf8_bin NOT NULL,
  `location` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='玩乐之首页五组文字修改';

--
-- 转存表中的数据 `d1`
--

INSERT INTO `d1` (`txtarea`, `location`) VALUES
('每天十二单本地免费商品 餐厅、咖啡厅、酒店、酒吧、 KTV、旅游', 1),
('你的梦想是什么！！ 大声的说出来 我来帮你实现', 2),
('表问我智商是什么 我只是知道在这里 你的智商会给你带来money', 3),
('多久没有和女票约会了 别假装在学习了，来这里领取 约会基金去约会吧', 4),
('一张照片200元，你还等什么 还不赶快上传，来赚钱 一张200元！！！', 5);

-- --------------------------------------------------------

--
-- 表的结构 `demo`
--

CREATE TABLE IF NOT EXISTS `demo` (
  `picture` varchar(8) COLLATE utf8_bin NOT NULL COMMENT '板块照片路径',
  `topic` text COLLATE utf8_bin NOT NULL COMMENT '话题名称',
  `description` text COLLATE utf8_bin NOT NULL COMMENT '板块描述',
  `demo` varchar(8) COLLATE utf8_bin NOT NULL COMMENT '第几个板块',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `demo`
--

INSERT INTO `demo` (`picture`, `topic`, `description`, `demo`, `id`) VALUES
('1-1.jpg', '麦当劳', '麦当劳描述', '1-1', 1),
('1-2.jpg', '肯德基', '肯德基', '1-2', 2),
('1-3.jpg', '麦当劳', '麦当劳', '1-3', 3),
('1-4.jpg', '麦当劳', '麦当劳', '1-4', 4),
('1-5.jpg', '新主题，', '新主题，', '1-5', 5),
('1-6.jpg', '相应的', '相应的', '1-6', 6),
('1-7.jpg', '相应的', '相应的', '1-7', 7),
('1-8.jpg', '关评论将会', '关评论将会', '1-8', 8),
('1-9.jpg', '关评论将会', '关评论将会', '1-9', 9),
('1-10.jpg', '相应的', '相应的', '1-10', 10),
('2-1.jpg', '未选择替换主题', '未选择替换主题', '2-1', 11),
('2-2.jpg', '相应的', '相应的', '2-2', 12),
('2-3.jpg', '关评论将会', '关评论将会', '2-3', 13),
('2-4.jpg', '相关评论将会', '相关评论将会', '2-4', 14),
('2-5.jpg', '相关评论将会', '相关评论将会', '2-5', 15),
('2-6.jpg', '相关评论将会', '相关评论将会', '2-6', 16),
('2-7.jpg', '若未选择替换主题，相应的板块内容只是被替换，相关评论将会继续保留下来', '关评论将会', '2-7', 17),
('2-8.jpg', '关评论将会', '关评论将会', '2-8', 18),
('2-9.jpg', '相关评论将会', '相关评论将会', '2-9', 19),
('2-10.jpg', '相关评论将会', '相关评论将会', '2-10', 20),
('3-1.jpg', '相关评论将会', '相关评论将会', '3-1', 21),
('3-2.jpg', '相关评论将会', '相关评论将会', '3-2', 22),
('3-3.jpg', '相关评论将会', '相关评论将会', '3-3', 23),
('3-4.jpg', '相关评论将会', '相关评论将会', '3-4', 24),
('3-5.jpg', '相关评论将会', '相关评论将会', '3-5', 25),
('3-6.jpg', '相关评论将会', '相关评论将会', '3-6', 26),
('3-7.jpg', '相关评论将会', '相关评论将会', '3-7', 27),
('3-8.jpg', '相关评论将会', '相关评论将会', '3-8', 28),
('3-9.jpg', '相关评论将会', '相关评论将会', '3-9', 29),
('3-10.jpg', '相关评论将会', '相关评论将会', '3-10', 30);

-- --------------------------------------------------------

--
-- 表的结构 `dream`
--

CREATE TABLE IF NOT EXISTS `dream` (
  `topic` varchar(256) COLLATE utf8_bin NOT NULL COMMENT '梦想主题',
  `image` varchar(128) COLLATE utf8_bin NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='存储梦想的主题和图片' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `dream`
--

INSERT INTO `dream` (`topic`, `image`, `id`) VALUES
('麦当劳为您的梦想买单', 'dream_topic.jpg', 2);

-- --------------------------------------------------------

--
-- 表的结构 `dream_comment`
--

CREATE TABLE IF NOT EXISTS `dream_comment` (
  `user_name` varchar(128) COLLATE utf8_bin NOT NULL DEFAULT '无名氏' COMMENT '评论人的名字',
  `user_image` varchar(128) COLLATE utf8_bin NOT NULL DEFAULT '__ROOT__/Home/Tpl/Public/images/tx.jpg',
  `comment` text COLLATE utf8_bin NOT NULL,
  `approving_num` int(11) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='存储梦想板块的评论内容' AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `dream_comment`
--

INSERT INTO `dream_comment` (`user_name`, `user_image`, `comment`, `approving_num`, `id`) VALUES
('jack', 'sdf', 'jack is a good boy', 0, 1),
('jack', '__ROOT__/Home/Tpl/Public/images/tx.jpg', 'jack is a good boy', 0, 2),
('jack', '__ROOT__/Home/Tpl/Public/images/tx.jpg', 'jack is a good boy', 0, 3),
('默认用户名', '/thinkphp/Home/Tpl/Public/images/tx.jpg', '', 0, 4),
('默认用户名', '/thinkphp/Home/Tpl/Public/images/tx.jpg', '', 0, 5),
('默认用户名', '/thinkphp/Home/Tpl/Public/images/tx.jpg', '', 0, 6),
('默认用户名', '/thinkphp/Home/Tpl/Public/images/tx.jpg', '', 0, 7),
('默认用户名', '/thinkphp/Home/Tpl/Public/images/tx.jpg', '', 0, 8),
('默认用户名', '/thinkphp/Home/Tpl/Public/images/tx.jpg', '', 0, 9),
('默认用户名', '/thinkphp/Home/Tpl/Public/images/tx.jpg', '', 2, 10),
('默认用户名', '/thinkphp/Home/Tpl/Public/images/tx.jpg', 'adsfasfdasdfcvzxcvz', 0, 11);

-- --------------------------------------------------------

--
-- 表的结构 `dream_sign`
--

CREATE TABLE IF NOT EXISTS `dream_sign` (
  `user_name` varchar(128) COLLATE utf8_bin NOT NULL,
  `sign_time` varchar(128) COLLATE utf8_bin NOT NULL COMMENT '最近签到的时间',
  `sign_num` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='梦想签到表：用户名和最近一次签到的时间';

-- --------------------------------------------------------

--
-- 表的结构 `dream_zan`
--

CREATE TABLE IF NOT EXISTS `dream_zan` (
  `user_name` varchar(128) COLLATE utf8_bin NOT NULL,
  `comment_id` int(11) NOT NULL COMMENT '存储与梦想评论对应的id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(16) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `phone` varchar(32) COLLATE utf8_bin NOT NULL,
  `nick_name` varchar(32) COLLATE utf8_bin NOT NULL,
  `portrait` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `sex` int(4) NOT NULL,
  `birth` date NOT NULL,
  `location` varchar(64) COLLATE utf8_bin NOT NULL,
  `school` varchar(32) COLLATE utf8_bin NOT NULL,
  `join_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`username`, `password`, `phone`, `nick_name`, `portrait`, `sex`, `birth`, `location`, `school`, `join_time`) VALUES
('123', '202cb962ac59075b964b07152d234b70', '10086', 'hello_kitty', NULL, 2, '2015-08-05', '石家庄裕华区', '河北师范大学', '2015-08-10 13:45:57');

-- --------------------------------------------------------

--
-- 表的结构 `zaned`
--

CREATE TABLE IF NOT EXISTS `zaned` (
  `comment_id` int(11) NOT NULL,
  `user_name` text COLLATE utf8_bin NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `demo` varchar(8) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `zaned`
--

INSERT INTO `zaned` (`comment_id`, `user_name`, `id`, `demo`) VALUES
(0, '', 1, ''),
(0, '', 2, ''),
(0, '', 3, ''),
(0, 'userName', 4, ''),
(0, 'userName', 5, ''),
(0, 'userName', 6, ''),
(0, 'userName', 7, ''),
(0, 'userName', 8, ''),
(0, 'userName', 9, ''),
(0, 'userName', 10, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

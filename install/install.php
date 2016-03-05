<?php
/**
 * Created by PhpStorm.
 * User: xiaol
 * Date: 2016/2/28
 * Time: 13:29
 */

$blogname = $_GET['blogname'];
$blogold = $_GET['blogold'];
$bloguser = $_GET['bloguser'];
$blogabout = $_GET['blogabout'];
$blogsr = $_GET['blogsr'];
$blogqq = $_GET['blogqq'];
$blogyx = $_GET['blogyx'];
$blogpass = $_GET['blogpass'];
$blogphone = $_GET['blogphone'];

require ('../config.php');

mysql_query("CREATE TABLE `xblog_article` (
  `aid` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `artdate` varchar(255) COLLATE utf8_bin NOT NULL,
  `content` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;");

mysql_query("INSERT INTO `xblog_article` (`aid`, `title`, `artdate`, `content`) VALUES
(1, '你好世界', '2016-2-26', '博客安装完毕');");

mysql_query("ALTER TABLE `xblog_article`
  ADD PRIMARY KEY (`aid`);");

mysql_query("ALTER TABLE `xblog_article`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;");

//文章数据库操作完毕。
//开始操作个性化数据库


mysql_query("CREATE TABLE `xblog_me` (
  `name` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '字段名称',
  `value` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '字段数据'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;");



mysql_query("INSERT INTO `xblog_me` (`name`, `value`) VALUES
('name', '".$bloguser."'),
('old', '".$blogold."'),
('qq', '".$blogqq."'),
('tel', '".$blogphone."'),
('whyme', '".$blogabout."'),
('birthday', '".$blogsr."'),
('blogname', '".$blogname."');");

//个性化数据库操作完毕
//操作个人数据库

mysql_query("SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";
SET time_zone = \"+00:00\";");

mysql_query("CREATE TABLE `xblog_user` (
  `uid` int(11) NOT NULL COMMENT '用户编号',
  `username` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '用户名',
  `password` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '密码',
  `lv` varchar(255) COLLATE utf8_bin DEFAULT 'V1' COMMENT '等级',
  `tx` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '头衔',
  `txname` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `qq` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `weibo` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `about` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;");

mysql_query("INSERT INTO `xblog_user` (`uid`, `username`, `password`, `lv`, `tx`, `txname`, `phone`, `qq`, `weibo`, `about`) VALUES
(1,'".$blogyx."' , '".$blogpass."', 'admin', NULL, '', '', '', '', '');");


//一切准备就绪，真累啊


header("Location: ../index.php")
?>

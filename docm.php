<?php
require 'bg.php';
$uid = $_SESSION['uid'];
$text ='s';
$username = "";
$lv = "";
if ($uid!="")
{
    $result = mysql_query("SELECT * FROM xblog_user WHERE uid='".$uid."'");
    setcookie("uid",$uid,time()+3600,"/new/docm.php");
    while($row = mysql_fetch_array($result))
    {
        $username = $row['username'];
        $lv = $row['lv'];
    }
    if ($lv == "admin")
    {
        $text = '<div class="am-topbar-right"><div class="am-dropdown" data-am-dropdown="{boundary: \'.am-topbar\'}"><button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm am-dropdown-toggle" data-am-dropdown-toggle>欢迎您，'.$username.'<span class="am-icon-caret-down"></span></button><ul class="am-dropdown-content"><li><a href="usertx.php">用户中心</a></li><li><a href="admin.php">博客管理</a></li><li><a href="login.php?loginout=yes">登出</a></li></ul></div></div>';
    }
    else
    {
        $text = '<div class="am-topbar-right"><div class="am-dropdown" data-am-dropdown="{boundary: \'.am-topbar\'}"><button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm am-dropdown-toggle" data-am-dropdown-toggle>欢迎您，'.$username.'<span class="am-icon-caret-down"></span></button><ul class="am-dropdown-content"><li><a href="usertx.php">用户中心</a></li><li><a href="login.php?loginout=yes">登出</a></li></ul></div></div>';
    }
}
else
{
    $text ='<div class="am-topbar-right"><a href="login.php" class="am-btn am-btn-primary am-topbar-btn am-btn-sm">登录</a></div><div class="am-topbar-right"><a href="register.php" class="am-btn am-btn-primary am-topbar-btn am-btn-sm">注册</a></div>';
}
?>

<?php
/**
 * Created by PhpStorm.
 * User: xiaol
 * Date: 2016/2/26
 * Time: 20:44
 */
$aid = $_GET['aid'];
$result = mysql_query("SELECT * FROM xblog_article WHERE aid='".$aid."'");
$title = "";
$date = "";
$content = "";
while($row = mysql_fetch_array($result))
{
    $title = $row['title'];
    $date = $row['artdate'];
    $content = $row['content'];
}
?>


<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <title>文章详细 | <?php echo $title?> | <?php echo $name;?>的Xblog</title>

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <link rel="icon" type="image/png" href="assets/i/favicon.png">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="assets/i/app-icon72x72@2x.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="assets/i/app-icon72x72@2x.png">
    <meta name="msapplication-TileColor" content="#0e90d2">

    <link rel="stylesheet" href="assets/css/amazeui.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="http://123.56.64.197/cdn/prettify.css">
    <style>
        .tome{width:100px;height:100px;border-radius:100px}

        #footer {position: relative;
            margin-top: -60px;
            height: 60px;
            clear:both;
            background:#369
        }
        #footer p{
            color: white;
            padding: 20px;
        }
    </style>
</head>
<body>

<?php require 'header.php'?>
<!--在这里编写你的代码-->

<div class="am-g doc-am-g">
    <div class="am-u-sm-6 am-u-md-4 am-u-lg-3">
        <div class="am-panel am-panel-default">
            <div class="am-panel-hd">个人介绍</div>
            <div class="am-panel-bd">
                <div class="am-panel am-panel-default">
                    <div class="am-panel-bd"><div align="center"> <img class="tome" src="http://acode.wicp.net/cdn/me.PNG"> <h2><?php echo $name;?></h2><p><?php echo $whyme;?></p><br><span class="am-badge am-badge-success am-radius">傻逼</span>&nbsp;<span class="am-badge am-badge-success am-radius">丑死了</span>&nbsp;<span class="am-badge am-badge-success am-radius">程序员</span>&nbsp;<span class="am-badge am-badge-success am-radius">习惯不学好</span></php></div> </div>
                </div>
                <div class="am-panel am-panel-secondary">
                    <div class="am-panel-hd">一些个人信息</div>
                    <div class="am-panel-bd">
                        <div class="am-tabs" data-am-tabs="{noSwipe: 1}" id="doc-tab-demo-1">
                            <ul class="am-tabs-nav am-nav am-nav-tabs">
                                <li class="am-active"><a href="javascript: void(0)">普通人视角</a></li>
                                <li><a href="javascript: void(0)">开发者视角</a></li>
                            </ul>

                            <div class="am-tabs-bd">
                                <div class="am-tab-panel am-active">
                                    年龄：&nbsp;<code><?php echo $old?></code>
                                    <br>
                                    出生日期:&nbsp;<code><?php echo $birthday?></code>
                                    <br>
                                    QQ:&nbsp;<code><?php echo $qq?></code>
                                    <br>
                                    Tel:&nbsp;<code><?php echo $tel?></code>
                                </div>
                                <div class="am-tab-panel">
                            <pre>
{
    "old":14,
    "dateOfBirth":996595200,
    "nickName":"傻前端",
    "QQ":"2501100657"
    "tel":"18858298361"
}
                            </pre>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
        </div>
    </div>
        </div>
    <div class="am-u-sm-6 am-u-md-8 am-u-lg-9">
        <article class="am-article">
            <div class="am-article-hd">
                <h1 class="am-article-title"><?php echo $title?></h1>
                <p class="am-article-meta"><?php echo $date?></p>
            </div>
            <?php echo $content?>
        </article>
        <hr>
        <h1>评论</h1>
        <!-- 多说评论框 start -->
        <div class="ds-thread" data-thread-key="<?php echo $aid?>" data-title="<?php echo $title?>" data-url="http://ca"></div>
        <!-- 多说评论框 end -->
        <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
        <script type="text/javascript">
            var duoshuoQuery = {short_name:"xlme"};
            (function() {
                var ds = document.createElement('script');
                ds.type = 'text/javascript';ds.async = true;
                ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
                ds.charset = 'UTF-8';
                (document.getElementsByTagName('head')[0]
                || document.getElementsByTagName('body')[0]).appendChild(ds);
            })();
        </script>
        <!-- 多说公共JS代码 end -->
    </div>


</div>

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/prettify/r298/prettify.js"></script>
    <script>
        $(function(){
            $('pre').addClass('prettyprint linenums').attr('style', 'overflow:auto');
            window.prettyPrint && prettyPrint();
        })
    </script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
</body>
</html>





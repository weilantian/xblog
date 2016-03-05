<?php
if ($_GET['sub']=="yes")
{
    $con = mysql_connect($_GET['dbhost'],$_GET['dbuser'],$_GET['dbpass']);
    if (!$con)
    {
        echo '<script>alert("无法连接到这个数据库服务器。")</script>';
    }
    else
    {
        if(!mysql_select_db($_GET['dbname'], $con))
        {
            echo '<script>alert("这个数据库貌似不存在诶")</script>';
        }
        else
        {
            $myfile = fopen("../config.php", "w");
            $txt = "<?php
/**
熊孩子就不要随便改这个了233
 */

error_reporting(0);

class config{
    const install = 'true',
        hostname='".$_GET['dbhost']."',//MYSQL地址
    user='".$_GET['dbuser']."',//用户名
    password='".$_GET['dbpass']."',//密码
    dbname='".$_GET['dbname']."';//数据库名称
}



\$con = mysql_connect(config::hostname,config::user,config::password);
if (!\$con)
{
    die('发生了一些奇怪的错误: ' . mysql_error());
}

mysql_select_db(config::dbname, \$con);
mysql_query(\"SET NAMES 'utf8_btn'\");
mysql_query(\"SET CHARACTER SET utf8_bin\");
mysql_query(\"SET CHARACTER_SET_RESULTS='utf8_bin'\");";
            fwrite($myfile, $txt);
            fclose($myfile);
            echo '<script>alert("很好你已经完成了重要的一步，下面，我们将带领您个性化自己的博客");</script>';
            header("Location:step_2.php");
        }

    }
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
    <title>Xblog安装向导 | 第一步，共二步</title>

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <link rel="icon" type="image/png" href="assets/i/favicon.png">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="../assets/i/app-icon72x72@2x.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="apple-touch-icon-precomposed" href="../assets/i/app-icon72x72@2x.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="../assets/i/app-icon72x72@2x.png">
    <meta name="msapplication-TileColor" content="#0e90d2">

    <link rel="stylesheet" href="../assets/css/amazeui.min.css">
    <link rel="stylesheet" href="../assets/css/app.css">
</head>
<body>

<ol class="am-breadcrumb">
    <li>欢迎</li>
    <li class="am-active"><a href="#">配置数据库</a></li>
    <li>个性化</li>
    <li>>完成安装</li>
</ol>
<div data-am-widget="titlebar" class="am-titlebar am-titlebar-default" >
    <h2 class="am-titlebar-title ">
        安装向导——安装数据库
    </h2>
</div>

<br>
<!-- .am-u-sm-centered 始终居中 -->
<div class="am-g">

    <div class="am-u-sm-6 am-u-sm-centered">

        <form class="am-form" method="get">
            <fieldset>
                <legend>填写MySql数据库信息</legend>

                <div class="am-form-group">
                    <label for="doc-ipt-email-1">数据库地址</label>
                    <input type="text" class="" name="dbhost" id="doc-ipt-email-1" value="localhost" placeholder="MYsql数据库地址">
                </div>

                <div class="am-form-group">
                    <label for="doc-ipt-pwd-1">用户名</label>
                    <input type="text" class="" name="dbuser" id="doc-ipt-pwd-1" value="root" placeholder="用户名">
                </div>

                <div class="am-form-group">
                    <label for="doc-ipt-pwd-1">密码</label>
                    <input type="text" class="" name="dbpass" id="doc-ipt-pwd-1" placeholder="数据库密码">
                </div>

                <div class="am-form-group">
                    <label for="doc-ipt-pwd-1">已存在数据库名</label>
                    <input type="text" class="" name="dbname" id="doc-ipt-pwd-1" value="xblog" placeholder="数据库名称">
                </div>

                <div class="am-form-group">
                    <label for="doc-ipt-pwd-1">表前翼【静止修改】</label>
                    <input type="text" class="am-form-field" id="doc-ipt-pwd-1" value="xblog_" disabled>
                </div>

                <input type="hidden"  name="sub" value="yes">

                <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
            </fieldset>
        </form>
    </div>
</div>


<!--在这里编写你的代码-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="../assets/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="../assets/js/amazeui.min.js"></script>
</body>
</html>
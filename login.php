<?php
error_reporting(0);
session_start();
/**
 * Created by PhpStorm.
 * User: xiaol
 * Date: 2016/2/26
 * Time: 18:23
 */
$loginout = $_GET['loginout'];
$username=$_GET['username'];
$password=$_GET['password'];
$re_password="";
$logintest='';
$uid = "";
$fj = '';

if($loginout=="yes")
{
    unset($_SESSION['uid']);
    $logintest = '<div class="am-panel am-panel-success"><div class="am-panel-bd">登出成功</div></div>';
}
if ($username!="" && $password!="")
{
    //开始登陆操作
    $result = mysql_query("SELECT * FROM xblog_user WHERE username='".$username."'");

    while($row = mysql_fetch_array($result))
    {
        $re_password= $row['password'];
        $uid = $row['uid'];
        $fj = $row['tx'];
    }

    if ($re_password==$password)
    {
        if ($fj != "fenjing")
        {
            $logintest = '<div class="am-panel am-panel-success"><div class="am-panel-bd">登陆成功，<a href="index.php">返回首页</a></div></div>';
            $_SESSION['uid'] = $uid;
        }

    }
    else
    {
        $logintest = '<div class="am-panel am-panel-danger"><div class="am-panel-bd">用户名或密码错误</div></div>';
    }
}

?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo $name;?>的Xblog | 登陆</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="alternate icon" type="image/png" href="assets/i/favicon.png">
    <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
    <style>
        .header {
            text-align: center;
        }
        .header h1 {
            font-size: 200%;
            color: #333;
            margin-top: 30px;
        }
        .header p {
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="am-g">
        <h1><?php echo $name;?>的Xblog</h1>
        <p>请先登录来访问本站。</p>
    </div>
    <hr />
</div>
<div class="am-g">
    <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
        <?php echo $logintest?>
        <h3>登录</h3>
        <hr>
        <form method="get" action="index.php" class="am-form">
            <label for="email">邮箱:</label>
            <input type="text" name="username" id="email" value="">
            <br>
            <label for="password">密码:</label>
            <input type="password" name="password" id="password" value="">
            <input type="hidden" name="url"  value="login">
            <br>
            <label for="remember-me">
                <input id="remember-me" type="checkbox">
                记住密码
            </label>
            <br />
            <div class="am-cf">
                <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
                <a href="index.php?url=register" class="am-btn am-btn-default am-btn-sm am-fr">注册账号</a>
            </div>
        </form>
        <hr>
        <p>©<?php echo $blogname;?></p>
    </div>
</div>




<div class="am-modal am-modal-alert" tabindex="-1" id="alertme">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">管理员警告</div>
        <div class="am-modal-bd">
            您的账号已被封禁
        </div>
        <div class="am-modal-footer">
            <span class="am-modal-btn">确定</span>
        </div>
    </div>
</div>


<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="assets/js/amazeui.min.js"></script>

<?php
if ($fj == "fenjing")
{
    echo "<script>var modal = $('#alertme');modal.modal();</script>";
}
?>
</body>
</html>
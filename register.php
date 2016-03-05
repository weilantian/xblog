<?php
/**
 * Created by PhpStorm.
 * User: xiaol
 * Date: 2016/2/26
 * Time: 18:23
 */
require 'bg.php';
$loginout = $_GET['loginout'];
$username=$_GET['username'];
$password=$_GET['password'];
$passwordag=$_GET['passwordag'];
$logintest='';
$log = "";

if ($username!="" && $password!="" && $passwordag!="")
{


    $result = mysql_query("SELECT * FROM xblog_user WHERE username='".$username."'");
    while($row = mysql_fetch_array($result))
    {
        $log = $row['password'];
    }

    if ($log=="0" || $log=="")
    {
        if ($passwordag === $password)
        {
            mysql_query("INSERT INTO xblog_user (uid, username, password, lv, tx, txname, phone, qq, weibo, about) VALUES ('', '".$username."', '".$password."','V1',NULL,'','','','','')");
            $logintest ='<div class="am-panel am-panel-success"><div class="am-panel-bd">注册成功，现在就去<a href="login.php.php">去登陆</a></div></div>';
        }
        else
        {
            $logintest ='<div class="am-panel am-panel-success"><div class="am-panel-bd">两次密码输入不一致</div></div>';
        }
    }
    else
    {

        $logintest ='<div class="am-panel am-panel-success"><div class="am-panel-bd">该邮箱已存在</div></div>';
    }


    //开始登陆操作

}

?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo $name;?>的Xblog | 注册</title>
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
        <h1>Xblog</h1>
        <p>创造你的乐趣<br/>免费的开源博客平台</p>
    </div>
    <hr />
</div>
<div class="am-g">
    <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
        <?php echo $logintest?>
        <h3>注册账号</h3>
        <hr>

        <form method="get" action="index.php" class="am-form">
            <label for="email">邮箱:</label>
            <input type="text" name="username" id="email" value="">
            <br>
            <label for="password">密码:</label>
            <input type="password" name="password" id="password" value="">
            <br>
            <label for="passwordag">再次输入密码:</label>
            <input type="password" name="passwordag" id="passwordag" value="">
            <input type="hidden" name="url"  value="register">
            <br>
            <label for="remember-me">
                <input id="remember-me" type="checkbox">
                记住密码
            </label>
            <br />
            <div class="am-cf">
                <input type="submit" name="" value="注 册" class="am-btn am-btn-primary am-btn-sm am-fl">
                <a href="index.php?url=register" class="am-btn am-btn-default am-btn-sm am-fr">已有账号</a>
            </div>
        </form>
        <hr>
        <p>©<?php echo $blogname;?></p>
    </div>
</div>
</body>
</html>
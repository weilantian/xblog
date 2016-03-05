<?php

require 'bg.php';
$uid = $_SESSION['uid'];
$username = "";
$password = "";
$lv = "";
$txname = "";
$phone = "";
$qq = "";
$weibo = "";
$about = "";
if ($uid!="")
{
    $result = mysql_query("SELECT * FROM xblog_user WHERE uid='".$uid."'");
    while($row = mysql_fetch_array($result))
    {
        $username = $row['username'];
        $password = $row['password'];
        $lv = $row['lv'];
        $txname = $row['txname'];
        $phone = $row['phone'];
        $qq = $row['qq'];
        $weibo = $row['weibo'];
        $about = $row['about'];
    }
}
?>

<?php
if ($_GET['xiugai'] == "yes")
{
    $username = $_GET['username'];
    $txname = $_GET['txname'];
    $phone = $_GET['phone'];
    $qq = $_GET['qq'];
    $weibo = $_GET['weibo'];
    $about = $_GET['about'];
    mysql_query("UPDATE xblog_user SET username = '".$username."' WHERE uid = '".$uid."' ");
    mysql_query("UPDATE xblog_user SET txname = '".$txname."' WHERE uid = '".$uid."' ");
    mysql_query("UPDATE xblog_user SET phone = '".$phone."' WHERE uid = '".$uid."' ");
    mysql_query("UPDATE xblog_user SET qq = '".$qq."' WHERE uid = '".$uid."' ");
    mysql_query("UPDATE xblog_user SET weibo = '".$weibo."' WHERE uid = '".$uid."' ");
    mysql_query("UPDATE xblog_user SET about = '".$about."' WHERE uid = '".$uid."' ");
    echo '<script>alert("修改成功！");</script>';
}
?>


<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $blogname;?> | 用户管理</title>
    <meta name="description" content="这是一个 user 页面">
    <meta name="keywords" content="user">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar admin-header">
    <div class="am-topbar-brand">
        <strong><?php echo $blogname;?></strong> <small>用户中心</small>
    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    </div>
</header>

<div class="am-cf admin-main">
    <!-- sidebar start -->
    <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
        <div class="am-offcanvas-bar admin-offcanvas-bar">
            <ul class="am-list admin-sidebar-list">
                <li><a href="index.php"><span class="am-icon-home"></span> 首页</a></li>
                <li class="admin-parent">
                    <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span> 个人信息 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                    <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
                        <li><a href="admin-user.html" class="am-cf"><span class="am-icon-check"></span> 个人资料<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
                    </ul>
                </li>
                <li><a href="login.php?loginout=yes"><span class="am-icon-sign-out"></span> 注销</a></li>
            </ul>
        </div>
    </div>
    <!-- sidebar end -->

    <!-- content start -->
    <div class="admin-content">
        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">个人资料</strong> / <small>Personal information</small></div>
        </div>

        <hr/>

        <div class="am-g">

            <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
                <div class="am-panel am-panel-default">
                    <div class="am-panel-bd">
                        <div class="am-g">
                            <div class="am-u-md-4">
                                <img class="am-img-circle am-img-thumbnail" src="http://s.amazeui.org/media/i/demos/bw-2014-06-19.jpg?imageView/1/w/200/h/200/q/80" alt=""/>
                            </div>
                            <div class="am-u-md-8">
                                <p>你可以使用<a href="#">gravatar.com</a>提供的头像或者使用本地上传头像。 </p>
                                <form class="am-form">
                                    <div class="am-form-group">
                                        <input type="file" id="user-pic">
                                        <p class="am-form-help">请选择要上传的文件...</p>
                                        <button type="button" class="am-btn am-btn-primary am-btn-xs">保存</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="am-panel am-panel-default">
                    <div class="am-panel-bd">
                        <div class="user-info">
                            <p>等级信息</p>
                            <div class="am-progress am-progress-sm">
                                <div class="am-progress-bar" style="width: 60%"></div>
                            </div>
                            <p class="user-info-order">当前等级：<strong><?php echo $lv; ?></strong> 活跃天数：<strong>587</strong> 距离下一级别：<strong>160</strong></p>
                        </div>
                        <div class="user-info">
                            <p>信用信息</p>
                            <div class="am-progress am-progress-sm">
                                <div class="am-progress-bar am-progress-bar-success" style="width: 80%"></div>
                            </div>
                            <p class="user-info-order">信用等级：正常当前 信用积分：<strong>80</strong></p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
                <form action="usertx.php" class="am-form am-form-horizontal">
                    <input type="hidden" name="xiugai" value="yes">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">姓名 / Name</label>
                        <div class="am-u-sm-9">
                            <input type="text" name="txname" id="user-name" placeholder="姓名 / Name" value="<?php echo $txname?>">
                            <small>输入你的名字，让我们记住你。</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-email" class="am-u-sm-3 am-form-label">电子邮件 / Email</label>
                        <div class="am-u-sm-9">
                            <input type="text" name="username" id="user-email" placeholder="输入你的电子邮件 / Email" value="<?php echo $username?>">
                            <small>邮箱你懂得...</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-phone"  class="am-u-sm-3 am-form-label">电话 / Telephone</label>
                        <div class="am-u-sm-9">
                            <input type="tel" name="phone" id="user-phone" placeholder="输入你的电话号码 / Telephone" value="<?php echo $phone?>">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-QQ" class="am-u-sm-3 am-form-label">QQ</label>
                        <div class="am-u-sm-9">
                            <input type="number" name="qq" id="user-QQ" placeholder="输入你的QQ号码" value="<?php echo $qq?>">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">微博 / Twitter</label>
                        <div class="am-u-sm-9">
                            <input type="text" name="weibo" id="user-weibo" placeholder="输入你的微博 / Twitter" value="<?php echo $weibo?>">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-intro" class="am-u-sm-3 am-form-label">简介 / Intro</label>
                        <div class="am-u-sm-9">
                            <textarea class="" name="about" rows="5" id="user-intro" placeholder="输入个人简介" value="<?php echo $about?>"></textarea>
                            <small>250字以内写出你的一生...</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button type="submit" class="am-btn am-btn-primary">保存修改</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
    <hr>
    <p class="am-padding-left">©<?php echo $blogname;?></p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>

<script src="assets/js/app.js"></script>
</body>
</html>

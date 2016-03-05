<?php
error_reporting(0);
require 'config.php';
$uid = $_SESSION['uid'];
if ($uid!="")
{
    $result = mysql_query("SELECT * FROM xblog_user WHERE uid='".$uid."'");
    while($row = mysql_fetch_array($result))
    {
        $lv = $row['lv'];
    }
    if ($lv != "admin")
    {
        header('HTTP/1.1 404 Not Found');
        header("status: 404 Not Found");
        die("404 Not Found");
    }
    $sql="select * from xblog_article";
    $result = mysql_query($sql);
    $sums=mysql_num_rows($result);

    $sql="select * from xblog_user";
    $result = mysql_query($sql);
    $sumss=mysql_num_rows($result);
}
else
{
    header('HTTP/1.1 404 Not Found');
    header("status: 404 Not Found");
    die("404 Not Found");
}

?>

<?php
$caozuo = $_GET['caozuo'];
$uid = $_GET['uid'];
if ($caozuo == "fengjing")
{
    mysql_query("UPDATE xblog_user SET tx = 'fenjing' WHERE uid = '".$uid."'");
    echo '<script>alert("账号封禁封禁成功！");</script>';
}
if ($caozuo == "shanchu")
{
    mysql_query("DELETE FROM xblog_user WHERE uid='".$uid."'");
    echo '<script>alert("账户删除成功！");</script>';
}
if ($caozuo == "admin")
{
    mysql_query("UPDATE xblog_user SET lv = 'admin' WHERE uid = '".$uid."'");
    echo '<script>alert("编号为'.$uid.'的用户已被给予管理员权限。")</script>';
}
?>

<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Xblog后台</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
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
        <strong>Xblog</strong> <small>博客管理</small>
    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
            <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">0</span></a></li>
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="usertx.php"><span class="am-icon-user"></span> 资料</a></li>
                    <li><a href="login.php?loginout=yes"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
        </ul>
    </div>
</header>

<div class="am-cf admin-main">
    <!-- sidebar start -->
    <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
        <div class="am-offcanvas-bar admin-offcanvas-bar">
            <ul class="am-list admin-sidebar-list">
                <li><a href="index.php"><span class="am-icon-home"></span> 首页</a></li>
                <li class="admin-parent">
                    <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span> 管理中心 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                    <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
                        <li><a href="admin.php" class="am-cf"><span class="am-icon-check"></span> 首页<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
                        <li><a href="admin_lb.php"><span class="am-icon-puzzle-piece"></span> 文章管理</a></li>
                        <li><a href="admin_write.php"><span class="am-icon-th"></span> 写文章</a></li>
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
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>一些常用模块</small></div>
        </div>

        <ul class="am-avg-sm-1 am-avg-md-2 am-margin am-padding am-text-center admin-content-list ">
            <li><a href="#" class="am-text-success"><span class="am-icon-btn am-icon-file-text"></span><br/>当前含有文章<br/><?php echo $sums;?></a></li>
            <li><a href="#" class="am-text-warning"><span class="am-icon-btn am-icon-briefcase"></span><br/>总用户数量<br/><?php echo $sumss;?></a></li>
        </ul>

        <div class="am-g">
            <div class="am-u-sm-12">
                <table class="am-table am-table-bd am-table-striped admin-content-table">
                    <thead>
                    <tr>
                        <th>ID</th><th>用户名</th><th>电话</th><th>QQ</th><th>管理</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $result = mysql_query("SELECT * FROM xblog_user");
                    while($row = mysql_fetch_array($result))
                    {
                        echo '<tr><td>'.$row['uid'].'</td><td>'.$row['username'].'</td><td>'.$row['phone'].'</td><td>'.$row['qq'].'</td><td><div class="am-dropdown" data-am-dropdown><button class="am-btn am-btn-default am-btn-xs am-dropdown-toggle" data-am-dropdown-toggle><span class="am-icon-cog"></span><span class="am-icon-caret-down"></span></button><ul class="am-dropdown-content"><li><a href="admin.php?caozuo=fengjing&uid='.$row['uid'].'">封禁</a></li><li><a href="admin.php?caozuo=shanchu&uid='.$row['uid'].'">删除</a></li><li><a href="admin.php?caozuo=admin&uid='.$row['uid'].'">给予超级管理员权限</a></li></ul></div></td></tr>';
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="am-g">
            <div class="am-u-md-6">
                <div class="am-panel am-panel-default">
                    <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-1'}">文件上传<span class="am-icon-chevron-down am-fr" ></span></div>
                    <div class="am-panel-bd am-collapse am-in" id="collapse-panel-1">
                        <ul class="am-list admin-content-file">
                            <li>
                                <strong><span class="am-icon-upload"></span> Kong-cetian.Mp3</strong>
                                <p>3.3 of 5MB - 5 mins - 1MB/Sec</p>
                                <div class="am-progress am-progress-striped am-progress-sm am-active">
                                    <div class="am-progress-bar am-progress-bar-success" style="width: 82%">82%</div>
                                </div>
                            </li>
                            <li>
                                <strong><span class="am-icon-check"></span> 好人-cetian.Mp3</strong>
                                <p>3.3 of 5MB - 5 mins - 3MB/Sec</p>
                            </li>
                            <li>
                                <strong><span class="am-icon-check"></span> 其实都没有.Mp3</strong>
                                <p>3.3 of 5MB - 5 mins - 3MB/Sec</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="am-panel am-panel-default">
                    <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-2'}">浏览器统计<span class="am-icon-chevron-down am-fr" ></span></div>
                    <div id="collapse-panel-2" class="am-in">
                        <table class="am-table am-table-bd am-table-bdrs am-table-striped am-table-hover">
                            <tbody>
                            <tr>
                                <th class="am-text-center">#</th>
                                <th>浏览器</th>
                                <th>访问量</th>
                            </tr>
                            <tr>
                                <td class="am-text-center"><img src="assets/i/examples/admin-chrome.png" alt=""></td>
                                <td>Google Chrome</td>
                                <td>3,005</td>
                            </tr>
                            <tr>
                                <td class="am-text-center"><img src="assets/i/examples/admin-firefox.png" alt=""></td>
                                <td>Mozilla Firefox</td>
                                <td>2,505</td>
                            </tr>
                            <tr>
                                <td class="am-text-center"><img src="assets/i/examples/admin-ie.png" alt=""></td>
                                <td>Internet Explorer</td>
                                <td>1,405</td>
                            </tr>
                            <tr>
                                <td class="am-text-center"><img src="assets/i/examples/admin-opera.png" alt=""></td>
                                <td>Opera</td>
                                <td>4,005</td>
                            </tr>
                            <tr>
                                <td class="am-text-center"><img src="assets/i/examples/admin-safari.png" alt=""></td>
                                <td>Safari</td>
                                <td>505</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="am-u-md-6">
                <div class="am-panel am-panel-default">
                    <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-4'}">任务 task<span class="am-icon-chevron-down am-fr" ></span></div>
                    <div id="collapse-panel-4" class="am-panel-bd am-collapse am-in">
                        <ul class="am-list admin-content-task">
                            <li>
                                <div class="admin-task-meta"> Posted on 25/1/2120 by John Clark</div>
                                <div class="admin-task-bd">
                                    The starting place for exploring business management; helping new managers get started and experienced managers get better.
                                </div>
                                <div class="am-cf">
                                    <div class="am-btn-toolbar am-fl">
                                        <div class="am-btn-group am-btn-group-xs">
                                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-check"></span></button>
                                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-pencil"></span></button>
                                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-times"></span></button>
                                        </div>
                                    </div>
                                    <div class="am-fr">
                                        <button type="button" class="am-btn am-btn-default am-btn-xs">删除</button>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="admin-task-meta"> Posted on 25/1/2120 by 呵呵呵</div>
                                <div class="admin-task-bd">
                                    基兰和狗熊出现在不同阵营时。基兰会获得BUFF，“装甲熊憎恨者”。狗熊会获得BUFF，“时光老人憎恨者”。
                                </div>
                                <div class="am-cf">
                                    <div class="am-btn-toolbar am-fl">
                                        <div class="am-btn-group am-btn-group-xs">
                                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-check"></span></button>
                                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-pencil"></span></button>
                                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-times"></span></button>
                                        </div>
                                    </div>
                                    <div class="am-fr">
                                        <button type="button" class="am-btn am-btn-default am-btn-xs">删除</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="am-panel am-panel-default">
                    <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-3'}">管理员内部留言<span class="am-icon-chevron-down am-fr" ></span></div>
                    <div class="am-panel-bd am-collapse am-in am-cf" id="collapse-panel-3">
                        <!-- 多说评论框 start -->
                        <div class="ds-thread" data-thread-key="00001" data-title="管理员内部留言" data-url="请替换成文章的网址"></div>
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
            </div>
        </div>
    </div>
    <!-- content end -->

</div>

<a href="#" class="am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}">
    <span class="am-icon-btn am-icon-th-list"></span>
</a>

<footer>
    <hr>
    <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
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

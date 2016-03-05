<?php

require 'config.php';
$uid = $_SESSION['uid'];
$lv = "";
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
}
else
{
    header('HTTP/1.1 404 Not Found');
    header("status: 404 Not Found");
    die("404 Not Found");
}
?>

<?php
$text = '';
if ($_GET['add'] == "yes")
{
    mysql_query("INSERT INTO xblog_article (aid, title, artdate, content) VALUES ('', '".$_GET['title']."','".$_GET['arttime']."','".$_GET['content']."')");
    $text = '<div class="am-alert am-alert-success" data-am-alert><button type="button" class="am-close">&times;</button><p>发布成功！</p></div>';
}
?>
<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Xblog后台</title>
    <meta name="description" content="这是一个 table 页面">
    <meta name="keywords" content="table">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="assets/css/admin.css">
    <script type="text/javascript" charset="utf-8" src="ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="lang/zh-cn/zh-cn.js"></script>
    <style type="text/css">
        .writediv{
            width:100%;
        }
    </style>
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
            <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>
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
                        <li><a href="admin.php" class="am-cf"><span class="am-icon-check"></span> 首页</a></li>
                        <li><a href="admin_lb.php"><span class="am-icon-puzzle-piece"></span> 文章管理</a></li>
                        <li><a href="admin_write.php"><span class="am-icon-th"></span> 写文章<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
                    </ul>
                </li>
                <li><a href="login.php?loginout=yes"><span class="am-icon-sign-out"></span> 注销</a></li>
            </ul>
            
        </div>
    </div>
    <!-- sidebar end -->

    <!-- content start -->
    <div class="admin-content">
        <?php echo $text?>
        <form class="am-form" id="myfrom">
            <div class="am-form-group">
                <label for="doc-ipt-email-1">文章标题</label>
                <input type="text" class="" name="title" id="doc-ipt-email-1" placeholder="文章标题">
                <br>
                <input type="hidden" name="arttime" value="<?php echo date("Y-m-d H:i:s",time()+28800-date("Z",time()));?>" />
                <input type="hidden" id="conunet" name="content" value="">
                <input type="hidden"  name="add" value="yes">
            </div>
        </form>
        <script id="editor" class="writediv" type="text/plain" style="width:1024px;height:500px;"></script>
        <hr>
        <button type="button"  id="fbdoc" class="am-btn am-btn-primary">发布文章</button>
    </div>
    <!-- content end -->
</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

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
<script>
    var ue = UE.getEditor('editor');
    $("#fbdoc").click(function(){
        $("#conunet").attr("value",UE.getEditor('editor').getContent());
        $("#myfrom").submit();
    });
</script>
</body>
</html>

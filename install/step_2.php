<script>alert("很好你已经完成了重要的一步，下面，我们将带领您个性化自己的博客");</script>


<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <title>Xblog安装向导 | 第二步，共二步</title>

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
    <li>>配置数据库</li>
    <li class="am-active"><a href="#">个性化</a></li>
    <li>完成安装</li>
</ol>
<div data-am-widget="titlebar" class="am-titlebar am-titlebar-default" >
    <h2 class="am-titlebar-title ">
        安装向导——个性化
    </h2>
</div>

<br>
<!-- .am-u-sm-centered 始终居中 -->
<div class="am-g">

    <div class="am-u-sm-6 am-u-sm-centered">

        <form class="am-form" method="get" action="install.php">
            <fieldset>
                <legend>输入个性化数据</legend>

                <div class="am-form-group">
                    <label for="doc-ipt-email-1">博客名称</label>
                    <input type="text" class="" name="blogname" id="doc-ipt-email-1" >
                </div>

                <div class="am-form-group">
                    <label for="doc-ipt-pwd-1">博客主姓名</label>
                    <input type="text" class="" name="bloguser" id="doc-ipt-pwd-1"  >
                </div>

                <div class="am-form-group">
                    <label for="doc-ipt-pwd-1">博客主介绍</label>
                    <input type="text" class="" name="blogabout" id="doc-ipt-pwd-1" >
                </div>

                <div class="am-form-group">
                    <label for="doc-ipt-pwd-1">博客主年龄</label>
                    <input type="text" class="" name="blogaold" id="doc-ipt-pwd-1" >
                </div>

                <div class="am-form-group">
                    <label for="doc-ipt-pwd-1">博客主生日</label>
                    <input type="text" class="" name="blogsr" id="doc-ipt-pwd-1" >
                </div>

                <div class="am-form-group">
                    <label for="doc-ipt-pwd-1">博客主QQ</label>
                    <input type="text" class="" name="blogqq" id="doc-ipt-pwd-1" >
                </div>

                <div class="am-form-group">
                    <label for="doc-ipt-pwd-1">博客主电话</label>
                    <input type="text" class="" name="blogphone" id="doc-ipt-pwd-1" >
                </div>


                <div class="am-form-group">
                    <label for="doc-ipt-pwd-1">博客主邮箱</label>
                    <input type="email" class="" name="blogyx" id="doc-ipt-pwd-1" value="admin@admin.com">
                </div>


                <div class="am-form-group">
                    <label for="doc-ipt-pwd-1">博客管理员密码</label>
                    <input type="password" class="" name="blogpass" id="doc-ipt-pwd-1" value="xblog" placeholder="数据库名称">
                </div>

                <p><button id="sub" type="submit" class="am-btn am-btn-default">提交</button></p>
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

<script>
    $("sub").click(function(){
        var progress = $.AMUI.progress;
        progress.start();
    });
    </script>
</body>
</html>
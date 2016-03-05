<?php

//判断是否安装完毕

require 'bg.php';
$text = $_GET['n'];
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
    <title><?php echo $name;?>的Xblog</title>

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
    "tip":"请管理员自行修改(index.php与docm.php)"
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
        <?php
        $result = mysql_query("SELECT * FROM xblog_artdate WHERE content LIKE '".$text."'");
        while($row = mysql_fetch_array($result))
        {
            echo '<div class="am-panel am-panel-default"><div class="am-panel-bd"><article class="am-article"><div class="am-article-hd"><a href="docm.php?aid='.$row['aid'].'"><h1 class="am-article-title">'.$row['title'].'</h1></a><p class="am-article-meta">'.$row['artdate'].'</p></div>'.$row['content'].'</article></div></div>';
        }
        ?>

    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="http://apps.bdimg.com/libs/prettify/r298/prettify.js"></script>
<script>
    $(function(){
        $('pre').addClass('prettyprint linenums').attr('style', 'overflow:auto');
        window.prettyPrint && prettyPrint();
    })
</script>
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
</body>
</html>



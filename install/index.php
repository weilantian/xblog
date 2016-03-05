<!DOCTYPE html>
<!--[if lte IE 7 ]><html class="no-js ie lte7 lte8 lte9 "><![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8 lte8 lte9 "><![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9 lte9 "><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Amaze UI 是一个移动优先的跨屏前端框架。" />
    <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JS, JavaScript, framework, Amaze UI, front-end, frontend, web development, 前端框架, 开源, meizi, meizi UI, 妹子UI, Web Components" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <title>Xblog安装</title>
    <meta name="renderer" content="webkit" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="alternate icon" type="image/png" href="http://s.amazeui.org/assets/2.x/i/favicon.png" />
    <link rel="apple-touch-icon-precomposed" href="http://s.amazeui.org/assets/2.x/i/app-icon72x72@2x.png" />
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" href="http://s.amazeui.org/assets/2.x/i/startup-640x1096.png" />
    <link rel="stylesheet" href="http://cdn.amazeui.org//amazeui/2.5.2/css/amazeui.min.css" />
    <link rel="stylesheet" href="http://s.amazeui.org/assets/2.x/css/amaze.min.css?v=ijuu62my" />
    <!--[if (gte IE 9)|!(IE)]><!-->
    <script src="http://s.amazeui.org/assets/2.x/js/jquery.min.js"></script>
    <!--<![endif]-->
    <!--[if lt IE 9]><script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://cdn.amazeui.org/modernizr/2.8.3/modernizr.js"></script>
    <script src="http://s.amazeui.org/assets/2.x/js/amazeui.ie8polyfill.min.js"></script><![endif]-->
    <script src="http://cdn.amazeui.org//amazeui/2.5.2/js/amazeui.min.js"></script>
    <link rel="canonical" href="http://amazeui.org?_ver=2.x" />
</head>
<body class="amz-index" data-amui="2.x">
<!--[if lte IE 9 ]><div class="am-alert am-alert-danger ie-warning" data-am-alert>
    <button type="button" class="am-close">&times;</button>
    <div class="am-container">
        365 安全卫士提醒：你的浏览器太古董了，妹子无爱，<a
        href="http://browsehappy.com/" target="_blank">速速点击换一个</a>！</div></div><![endif]-->

<header class="am-topbar admin-header">
    <div class="am-topbar-brand">
        <strong>Xblog</strong> <small>欢迎</small>
    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

</header>
<div id="amz-home">
    <section id="amz-hero">
        <div class="amz-container am-cf">
            <div class="amz-mascot" data-am-scrollspy="{animation: 'slide-left', delay: 100}">
                <img class="am-img-responsive" src="http://s.amazeui.org/assets/2.x/i/ui/mascot.png" alt="mascot-xiaoMeng" />
            </div>
            <div class="amz-hero-intro">
                <div class="amz-hero-headings">
                    <h1 data-am-scrollspy="{animation:'slide-left'}">Xblog</h1>
                    <h2 data-am-scrollspy="{animation:'slide-right', delay: 500}">萌萌哒轻量级个人博客</h2>
                </div>
                <ul class="github-status">
                    <li><a href="https://github.com/amazeui/amazeui/stargazers" target="_blank"><span class="am-icon-star"></span> <span id="ghs-stargazers"></span> Stars</a></li>
                    <li><a href="https://github.com/amazeui/amazeui/network/members" target="_blank"><span class="am-icon-code-fork"></span> <span id="ghs-forks"></span> Forks</a></li>
                </ul>
                <div class="amz-btn-started" data-am-scrollspy="{animation:'scale-up', delay: 1500, repeat: false}">
                    <a href="step_1.php" class="am-btn am-btn-success am-btn-lg">现在安装</a>
                    <a href="https://github.com/amazeui/amazeui" class="am-btn am-btn-default am-btn-lg">Github</a>
                </div>
            </div>
        </div>
        <div class="amz-notify">
            <form id="subscribe-form">
                <div class="am-g am-g-fixed">
                    <div class="col-md-6 am-u-md-6 notify-latest">
                        <a href="https://github.com/amazeui/amazeui/releases/tag/v2.5.2"><span class="amz-notify-date">2016-03-05</span> <span class="amz-notify-divider">|</span> <span>Xblog Apacha V1.0</span></a>
                    </div>
                    <div class="col-md-6 am-u-md-6 am-alert am-alert-danger subscribe-alert" id="subscribe-msg-error">
                        <button type="button" class="am-close">&times;</button>
                        <p></p>
                    </div>
                    <div class="col-md-6 am-u-md-6 am-alert am-alert-warning subscribe-alert" id="subscribe-msg-success">
                        <button type="button" class="am-close">&times;</button>
                        <p></p>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="amz-features">
        <div class="am-g am-g-fixed">
            <div class="col-md-6 am-u-md-6" data-scrollspy="{animation: 'slide-top', delay: 500}">
                <img class="am-img-responsive img" src="http://s.amazeui.org/assets/2.x/i/ui/foundation.png" alt="foundation" />
                <h2>为移动而生</h2>
                <p>Xblog 以移动优先（Mobile first）为理念，从小屏逐步扩展到大屏，最终实现所有屏幕适配，适应移动互联潮流。</p>
            </div>
            <div class="col-md-6 am-u-md-6" data-scrollspy="{animation:'slide-top', delay: 500}">
                <img class="am-img-responsive img" src="http://s.amazeui.org/assets/2.x/i/ui/web.png" alt="web" />
                <h2>组件丰富，模块化</h2>
                <p>在将来的版本中，Xblog会支持插件扩展，让您的博客充满个性。</p>
            </div>
        </div>
        <div class="am-g am-g-fixed">
            <div class="col-md-6 am-u-md-6" data-scrollspy="{animation:'slide-right', delay: 1000}">
                <img class="am-img-responsive img" src="http://s.amazeui.org/assets/2.x/i/ui/chinese.png" alt="chinese" />
                <h2>本地化支持</h2>
                <p>Xblog会自动匹配适合的语言用于博客</p>
            </div>
            <div class="col-md-6 am-u-md-6" data-scrollspy="{animation:'slide-bottom', delay: 1500}">
                <img class="am-img-responsive img" src="http://s.amazeui.org/assets/2.x/i/ui/mobile.png" alt="mobile" />
                <h2>轻量级，高性能</h2>
                <p>Xblog 面向 HTML5 开发，使用 CSS3 来做动画交互，平滑、高效，更适合移动设备，让博客流畅无比。</p>
            </div>
        </div>
    </section>
    <section class="amz-credits">
        <div class="amz-container">
            <header>
                <h1 data-am-scrollspy="{animation:'fade'}">站在巨人的肩膀上</h1>
                <h2 data-scrollspy="{animation:'slide-bottom', delay: 500}">Xblog 汲取了很多优秀的社区资源，通过开源的形式来回馈社区。</h2>
            </header>
        </div>
    </section>
</div>
<div class="am-modal am-modal-no-btn" tabindex="-1" id="am-wechat">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">
            <a href="" class="am-close am-close-spin" data-am-modal-close="">&times;</a>
        </div>
        <div class="am-modal-bd">
            <img src="http://s.amazeui.org/assets/2.x/i/am/qr-ui.jpg" alt="Amaze UI 微信" />
            <br />在微信上关注我们
        </div>
    </div>
</div>
<div class="amz-toolbar" id="amz-toolbar">
    <a href="#top" title="回到顶部" class="am-icon-btn am-icon-arrow-up" id="amz-go-top"></a>
    <a href="/getting-started/faq" title="常见问题" class="am-icon-faq am-icon-btn am-icon-question-circle"></a>
</div>
<!--[if (gte IE 9)|!(IE)]><!-->
<script>!function(e){e(function(){function s(s){s=s||{},s.stargazers_count&&e("#ghs-stargazers").text(s.stargazers_count),s.forks&&e("#ghs-forks").text(s.forks)}function t(){if(n&&n.enabled){var e=n.get("_amazeui_github_status");e&&e.last_update&&(new Date).getTime()-e.last_update<432e5?s(e):a()}else a()}function a(){e.ajax({dataType:"json",url:"https://api.github.com/repos/amazeui/amazeui",success:function(e){e&&(s(e),e&&n&&n.enabled&&(e.last_update=(new Date).getTime(),n.set("_amazeui_github_status",e)))},error:function(e){window.console&&console.log(e)}})}var n=window.store,i=e("#subscribe-form"),o=i.find("#subscribe-email"),r=i.find("#subscribe-submit"),u=e("#subscribe-msg-error"),d=u.find("p"),c=e("#subscribe-msg-success"),l=c.find("p"),m="订阅时发生错误，请在评论中留言反馈！",b="am-animation-slide-top",f="am-animation-fade am-animation-reverse",p=e.AMUI.support.animation;i.on("submit",function(s){s.preventDefault();var t=o.val();return/.+@.+\..+/i.test(t)?(r.button({loadingWithSpinner:'<span class="am-icon-circle-o-notch am-icon-spin"></span> 提交中...'}).button("loading"),o.attr("disabled","disabled"),r.attr("disabled","disabled"),e.ajax({type:"POST",url:"/user/subscribe",data:{user:{email:t}},dataType:"json",success:function(e){0==e.status?(11e3===e.errCode?d.html("邮箱已经存在，静候 Amaze 传书吧！"):d.html(m),u.show().addClass(b),o.removeAttr("disabled"),r.removeAttr("disabled"),r.button("reset")):(u.hide(),l.html("提交成功，请查收邮件点击确认链接！"),c.show().addClass(b))},error:function(e,s){u.html(m)}}),void(p&&(u.on(p.end,function(){e(this).removeClass(b)}),c.on(p.end,function(){e(this).removeClass(b)})))):(o.focus(),!1)}),i.find(".am-close").on("click",function(){var s=e(this),t=s.parent(".am-alert");p?(t.addClass(f),t.one(p.end+".close.alert",function(e){t.removeClass(f).hide()})):t.hide()}),t()})}(window.jQuery||window.Zepto,window);</script>
<!--<![endif]-->
<script src="http://s.amazeui.org/assets/2.x/js/handlebars.min.js"></script>
<script src="http://s.amazeui.org/assets/2.x/js/main.min.js"></script>
<script>var _hmt=_hmt||[];!function(){var e=document.createElement("script");e.src="//hm.baidu.com/hm.js?b424d39312c46404f15e22574a531fbb",(document.getElementsByTagName("head")[0]||document.getElementsByTagName("body")[0]).appendChild(e)}(),function(e,t,a){function n(){!function(e,t,a,n,c,o,m){e.GoogleAnalyticsObject=c,e[c]=e[c]||function(){(e[c].q=e[c].q||[]).push(arguments)},e[c].l=1*new Date,o=t.createElement(a),m=t.getElementsByTagName(a)[0],o.async=1,o.src=n,m.parentNode.insertBefore(o,m)}(e,t,a,"//www.google-analytics.com/analytics.js","ga"),ga("create","UA-34196034-8","amazeui.org"),ga("send","pageview")}e.addEventListener?e.addEventListener("load",n,!1):e.attachEvent&&e.attachEvent("onload",n)}(window,document,"script");</script>
<div style="display:none">
    <script type="text/javascript">var cnzz_protocol="https:"==document.location.protocol?" https://":" http://";document.write(unescape("%3Cspan id='cnzz_stat_icon_1256061744'%3E%3C/span%3E%3Cscript src='"+cnzz_protocol+"s95.cnzz.com/z_stat.php%3Fid%3D1256061744%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>
</div>
<!-- Cached page generated on Tue Jan 26 2016 03:21:15 GMT+0000 (UTC) -->
</body>
</html>
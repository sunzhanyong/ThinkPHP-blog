<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title><?php echo ($config[0]["title"]); ?></title>
		<!-- meta -->
		<meta charset="UTF-8">
		<meta http-equiv="Cache-Control" content="no-siteapp"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="/tp_blog/Public/favicon.ico"/>
		<meta name="keywords" content="<?php echo ($config[0]["keywords"]); ?>" />
		<meta name="description" content="<?php echo ($config[0]["description"]); ?>" />
		<meta name="author" content="<?php echo ($config[0]["author"]); ?>">

	    <!-- css -->
		<link rel="stylesheet" href="/tp_blog/Public/Home/css/bootstrap.min.css">
		<link rel="stylesheet" href="/tp_blog/Public/Home/css/ionicons.min.css">
		<link rel="stylesheet" href="/tp_blog/Public/Home/css/pace.css">
	    <link rel="stylesheet" href="/tp_blog/Public/Home/css/custom.css">
	    <!-- js -->
	    <script src="/tp_blog/Public/Home/js/jquery-2.1.3.min.js"></script>
	    <script src="/tp_blog/Public/Home/js/bootstrap.min.js"></script>
	    <script src="/tp_blog/Public/Home/js/pace.min.js"></script>
	    <script src="/tp_blog/Public/Home/js/modernizr.custom.js"></script>
	</head>
<style type="text/css" media="screen">
/*returnTop*/
p#back-to-top { border: 1px solid #fff; height: 35px; width: 35px; border-radius: 3px; text-align: center; background: rgba(0, 0, 0, 0.25); position: fixed; display: none; bottom: 35px; right: 20px; }
p#back-to-top:hover { cursor: pointer; background: #ff6666; }
.ion-chevron-up { font-size: 20px; line-height: 35px; color: #fff; }
span#qrcode { border: 1px solid #fff; height: 35px; width: 35px; border-radius: 3px; text-align: center; background: rgba(0, 0, 0, 0.25); position: fixed; bottom: 10px; right: 20px; }
span#qrcode:hover { cursor: pointer; background: #ff6666; }
.ion-chatbox { font-size: 20px; line-height: 35px; color: #fff; }
#imgcode { display: none; position: fixed; right: 60px; bottom: 40px; }
</style>
	<body>
	<p id="#back-to-top"></p>
		<div class="container">
			<header id="site-header">
				<div class="row">
					<div class="col-md-4 col-sm-5 col-xs-8">
						<div class="logo">
							<h1><a href="/">极简主义</a></h1>
						</div>
					</div><!-- col-md-4 -->
					<div class="col-md-8 col-sm-7 col-xs-4">
						<nav class="main-nav" role="navigation">
							<div class="navbar-header">
  								<button type="button" id="trigger-overlay" class="navbar-toggle">
    								<span class="ion-navicon"></span>
  								</button>
							</div>

							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  								<ul class="nav navbar-nav navbar-right">
    								<li class="cl-effect-11"><a href="/" data-hover="Home">主页</a></li>
    								<li class="cl-effect-11"><a href="/articles" data-hover="Article">文章</a></li>
    								<li class="cl-effect-11"><a href="/about" data-hover="About">关于</a></li>
    								<li class="cl-effect-11"><a href="/contact" data-hover="Contact">留言</a></li>
  								</ul>
							</div><!-- /.navbar-collapse -->
						</nav>
						<div id="header-search-box">
							<a id="search-menu" href="#"><span id="search-icon" class="ion-ios-search-strong"></span></a>
							<div id="search-form" class="search-form">
								<form role="search" method="get" id="searchform" action="/article">
									<input type="search" name="title" placeholder="搜索文章..." autofocus="autofocus">
									<button type="submit"><span class="ion-ios-search-strong"></span></button>
								</form>
							</div>
						</div>
					</div><!-- col-md-8 -->
				</div>
			</header>
		</div>

		<style type="text/css" media="screen">
/**时钟**/
 .fill {background-color: #fff;height:340px;position: relative;border-radius: 50%;margin:0 auto;}
 .clock {position: absolute;opacity: 1;width:100%;height:340px;}
 .fill .clock {left: 0;top: 0;height:300px;}
 .centre {position: absolute;top: 50%;left: 50%;width: 0;height: 0;}
 .expand {position: absolute;top: 0;left: 0;transform: translate(-50%, -50%);}
 .anchor {position: absolute;top: 0;left: 0;width: 0;height: 0;}
 .element {position: absolute;top: 0;left: 0;}
 .round {border-radius: 296px;}
 .circle-1 {background: #2e3c49;width: 12px;height: 12px;}
 .circle-2 {background: #FA9F22;width: 8px;height: 8px;}
 .circle-3 {background: black;width: 4px;height: 4px;}
 .second {transform: rotate(180deg);}
 .minute {transform: rotate(54deg);}
 .second-hand {width: 2px;height: 164px;background: #FA9F22;transform: translate(-50%,-100%) translateY(24px);}
 .hour {transform: rotate(304.5deg);}
 .thin-hand {width: 4px;height: 50px;background: #293642;transform: translate(-50%,-100%);}
 .fat-hand {width: 10px;height: 57px;border-radius: 10px;background: #293642;transform: translate(-50%,-100%) translateY(-18px);}
 .minute-hand {height: 112px;}
 .hour-text {position: absolute;font: 40px Hei, Helvetica, Arial, sans-serif;color: #293642;transform: translate(-50%,-50%);}
 .hour-10 {padding-left: 0.4ex;}
 .hour-11 {padding-left: 0.25ex;}
 .minute-text {position: absolute;font: 12px Avenir Next, Helvetica, Arial, sans-serif;color: #293642;transform: translate(-50%,-50%);}
 .minute-line {background: #293642;width: 1px;height: 9px;transform: translate(-50%,-100%) translateY(-131px);
</style>
<div class="content-body">
    <div class="container">
        <div class="row">
            <main class="col-md-8">
            <!-- html5时钟开始 -->
                <div class="fill">
                  <div class="reference"></div>
                  <div class="clock" id="utility-clock">
                    <div class="centre">
                      <div class="dynamic"></div>
                      <div class="expand round circle-1"></div>
                      <div class="anchor hour">
                        <div class="element thin-hand"></div>
                        <div class="element fat-hand"></div>
                      </div>
                      <div class="anchor minute">
                        <div class="element thin-hand"></div>
                        <div class="element fat-hand minute-hand"></div>
                      </div>
                      <div class="anchor second">
                        <div class="element second-hand"></div>
                      </div>
                      <div class="expand round circle-2"></div>
                      <div class="expand round circle-3"></div>
                    </div>
                  </div>
                </div>
                <!-- html5时钟结束 -->
            <?php if(is_array($artres)): $i = 0; $__LIST__ = $artres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$avo): $mod = ($i % 2 );++$i;?><article class="post post-1">
                    <header class="entry-header">
                        <h1 class="entry-title">
                            <a href="/article/<?php echo ($avo["id"]); ?>"><?php echo ($avo["title"]); ?></a>
                        </h1>
                        <div class="entry-meta">
                            <span class="post-category"><a href="javascript:void(0)"><?php echo ($avo["name"]); ?></a></span>

                            <span class="post-date"><a href="javascript:void(0)"><time class="entry-date"><?php echo ($avo["ctime"]); ?></time></a></span>

                            <span class="post-author"><a href="javascript:void(0)"><?php echo ($avo["username"]); ?></a></span>
                        </div>
                    </header>
                    <div class="entry-content clearfix">
                        <div style="font-size: 14px;">
                            <?php if($avo['intro'] != ''): echo ($avo["intro"]); ?>……
                            <?php else: ?>
                                <?php
 $contents = htmlspecialchars_decode($avo['content']); $content = strip_tags($contents); echo mb_substr($content,0,100,'UTF-8');?> ……<?php endif; ?>
                        </div>
                        <div class="read-more cl-effect-14">
                            <a href="/article/<?php echo ($avo["id"]); ?>" class="more-link">阅读全文 <span class="meta-nav">→</span></a>
                        </div>
                    </div>
                </article><?php endforeach; endif; else: echo "" ;endif; ?>
            </main>
            <aside class="col-md-4">
                <div class="widget widget-recent-posts">
                    <h3 class="widget-title">最近发表</h3>
                    <?php if(is_array($artres)): $i = 0; $__LIST__ = $artres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$avo): $mod = ($i % 2 );++$i;?><ul>
                        <li>
                            <a href="/article/<?php echo ($avo["id"]); ?>"><?php echo ($avo["title"]); ?></a>&nbsp;&nbsp;&nbsp;<i class="ion-android-time"></i> <i><small><?php echo (substr($avo["ctime"],0,10)); ?></small></i>
                        </li>
                    </ul><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>

                <div class="widget widget-archives">
                    <h3 class="widget-title">栏目</h3>
                    <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- <ul>
                        <li>
                            <a href="/tp_blog/index.php/home/Cate/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a>
                        </li>
                    </ul> -->
                    <span><a href="/cate/<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="widget widget-category">
                    <h3 class="widget-title">友情链接</h3>
                    <?php if(empty($link)): ?><ul>
                            <li>暂无友情链接</li>
                        </ul>
                    <?php else: ?>
                        <?php if(is_array($link)): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><span><a href="<?php echo ($vo["url"]); ?>" title="<?php echo ($vo["url"]); ?>" target="_blank"><?php echo ($vo["name"]); ?></a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </div>
            </aside>
        </div>
    </div>
</div>
<script>
    //html5时钟
    var clock = document.querySelector('#utility-clock');
    utilityClock(clock);

    function utilityClock(container) {
        var dynamic = container.querySelector('.dynamic')
        var hourElement = container.querySelector('.hour')
        var minuteElement = container.querySelector('.minute')
        var secondElement = container.querySelector('.second')
        var minute = function(n) {
            return n % 5 == 0 ? minuteText(n) : minuteLine(n);
        }
        var minuteText = function(n) {
            var element = document.createElement('div');
            element.className = 'minute-text';
            element.innerHTML = (n < 10 ? '0' : '') + n;
            position(element, n / 60, 135);
            dynamic.appendChild(element);
        }
        var minuteLine = function(n) {
            var anchor = document.createElement('div');
            anchor.className = 'anchor';
            var element = document.createElement('div');
            element.className = 'element minute-line';
            rotate(anchor, n);
            anchor.appendChild(element);
            dynamic.appendChild(anchor);
        }
        var hour = function(n) {
            var element = document.createElement('div');
            element.className = 'hour-text hour-' + n;
            element.innerHTML = n;
            position(element, n / 12, 105);
            dynamic.appendChild(element);
        }
        var position = function(element, phase, r) {
            var theta = phase * 2 * Math.PI;
            element.style.top = (-r * Math.cos(theta)).toFixed(1) + 'px';
            element.style.left = (r * Math.sin(theta)).toFixed(1) + 'px';
        }
        var rotate = function(element, second) {
            element.style.transform = element.style.webkitTransform = 'rotate(' + (second * 6) + 'deg)';
        }
        //以服务器时间为准进行计算
        var animate = function() {
            var now  = new Date();
            var time = now.getHours() * 3600 +
                       now.getMinutes() * 60 +
                       now.getSeconds() * 1 +
                       now.getMilliseconds() / 1000;
            rotate(secondElement, time);
            rotate(minuteElement, time / 60);
            rotate(hourElement, time / 60 / 12);
            requestAnimationFrame(animate);
        };
        for (var i = 1; i <= 60; i ++) minute(i);
        for (var i = 1; i <= 12; i ++) hour(i);
        animate();
    }
</script>
		<footer id="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="copyright"><b>&copy;</b> <?php echo ($config[0]["copyright"]); ?>&nbsp;<a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo ($config[0]["records"]); ?></a></p>
					</div>
				</div>
			</div>
		</footer>
        <aside>
            <img id="imgcode" src="/tp_blog/Public/qrcode.png" alt="扫二维码">
            <span id="qrcode"><i class="ion-chatbox"></i></span>
            <p id="back-to-top"><i class="ion-chevron-up"></i></p>
        </aside>
		<!-- Mobile Menu -->
		<div class="overlay overlay-hugeinc">
			<button type="button" class="overlay-close"><span class="ion-ios-close-empty"></span></button>
			<nav>
				<ul>
					<li><a href="/">主页</a></li>
					<li><a href="/articles">文章</a></li>
					<li><a href="/about">关于</a></li>
					<li><a href="/contact">留言</a></li>
				</ul>
			</nav>
		</div>

		<script src="/tp_blog/Public/Home/js/script.js"></script>

	</body>
<script>
$(function(){
    //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
    $(function () {
        $(window).scroll(function(){
            if ($(window).scrollTop()>100){
                $("#back-to-top").fadeIn(1500);
            }
            else
            {
                $("#back-to-top").fadeOut(1500);
            }
        });
        //当点击跳转链接后，回到页面顶部位置
        $("#back-to-top").click(function(){
            $('body,html').animate({scrollTop:0},1000);
            return false;
        });
    });
    $(function() {
        $("#qrcode").click(function() {
            $("#imgcode").toggle(500);
        });
    });
});
</script>
</html>
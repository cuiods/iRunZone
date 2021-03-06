<!doctype html>
<html>
<head>
    <title>iRunZone-首页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="爱跑空间,跑步社交,iRunZone,Running,Zone" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--bootstrap-->
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!--coustom css-->
    <link href='<?=base_url().'css/style.css'?>' rel="stylesheet" type="text/css"/>
    <!--script-->
    <script src="//cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <!-- js -->
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- /js -->
    <!--fonts-->
    <link href='<?=base_url().'plugin/googlecssfamily.css'?>' rel='stylesheet' type='text/css'>
    <!--/fonts-->
    <!--hover-girds-->
    <link rel="stylesheet" type="text/css" href='<?=base_url().'css/default.css'?>' />
    <link rel="stylesheet" type="text/css" href='<?=base_url().'css/component.css'?>' />
    <script src='<?=base_url().'plugin/modernizr.custom.js'?>'></script>
    <!--/hover-grids-->
    <script type="text/javascript" src='<?=base_url().'js/move-top.js'?>'></script>
    <script type="text/javascript" src='<?=base_url().'js/easing.js'?>'></script>
    <!--script-->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>
    <!--/script-->
</head>
<?php
require_once 'component/header.php';
?>
<!-- Top Navigation -->
<div class="banner">
    <div class="container">
        <script src='<?=base_url().'plugin/responsiveslides.min.js'?>'></script>
        <script>
            $(function () {
                $("#slider").responsiveSlides({
                    auto: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true
                });
            });
        </script>
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <li>
                        <h3>查看统计</h3>
                        <p>与志同道合的好友一起坚持、互相鼓励！</p>
                        <div class="readmore">
                            <a href="/sport">去查看<i class="glyphicon glyphicon-menu-right"> </i></a>
                        </div>
                    </li>
                    <li>
                        <h3>参加活动</h3>
                        <p>参加小组PK赛或是个人PK赛，看看谁更有毅力，谁走得更远！</p>
                        <div class="readmore">
                            <a href="/activity/show">去参加<i class="glyphicon glyphicon-menu-right"> </i></a>
                        </div>
                    </li>
                    <li>
                        <h3>发表动态</h3>
                        <p>说说你今天做了什么，有什么好的经验要和大家一起分享吗？快写下来吧！</p>
                        <div class="readmore">
                            <a href="/post">去发布<i class="glyphicon glyphicon-menu-right"> </i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--header-->

<!--specfication-->
<div class="news">
    <div class="container">
        <div class="news-text">
            <h3>热门动态</h3>
            <p>在这里，发现更多...</p>
        </div>
        <div class="news-grids">
            <div class="col-md-3 news-grid">
                <a href="/post/detail/1"><h4>核心打造强劲引擎</h4></a>
                <span>8.00 - 10.00 | Oct 09,2016</span>
                <a href="/post/detail/1" class="mask"><img src='<?=base_url().'images/img1.jpg'?>' alt="image" class="img-responsive zoom-img"></a>
                <div class="news-info">
                    <p>传说中的电动小马达，八块腹肌，马甲线，通过核心改造get起来！</p>
                </div>
            </div>
            <div class="col-md-3 news-grid">
                <a href="/post/detail/1"><h4>信念不死，健身不止</h4></a>
                <span>10.00 - 12.00 | Sep 24,2016</span>
                <a href="/post/detail/1" class="mask"><img src='<?=base_url().'images/img2.jpg'?>' alt="image" class="img-responsive zoom-img"></a>
                <div class="news-info">
                    <p>揣上坚强的信念，开始成长的旅行。</p>
                </div>
            </div>
            <div class="col-md-3 news-grid">
                <a href="/post/detail/1"><h4>跑过自己</h4></a>
                <span>9.00 - 10.00 | Oct 15,2016</span>
                <a href="/post/detail/1" class="mask"><img src='<?=base_url().'images/img3.jpg'?>' class="img-responsive zoom-img"></a>
                <div class="news-info">
                    <p>更新至最新版本，定制跑步课程表，我来教你如何跑步！</p>
                </div>
            </div>
            <div class="col-md-3 news-grid">
                <a href="/post/detail/1"><h4>感谢自己又坚持了一天</h4></a>
                <span>11.00 - 10.00 | OCT 10,2016</span>
                <a href="/post/detail/1" class="mask"><img src='<?=base_url().'images/img4.jpg'?>' alt="image" class="img-responsive zoom-img"></a>
                <div class="news-info">
                    <p>感谢自己又坚持了一天，离马甲线又近了一步。</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--/specfication-->
<!--weelcome-->
<div class="welcome">
    <div class="container">
        <h2>欢迎来到爱跑空间</h2>
        <p>踏上跑道，是一种选择。离开起点，是一种勇气。驰骋赛场，是一种胜利。</p>
    </div>
</div>
<!--/welcome-->
<div class="welcome-grids">
    <div class="container">
        <div class="welcome-gridsinfo">
            <div class="col-md-3 welcome-grid">
                <i class="glyphicon glyphicon-pencil"> </i>
                <h3>步数</h3>
                <p>设定你的目标，每天要走到多少步？</p>
            </div>
            <div class="col-md-3 welcome-grid">
                <i class="glyphicon glyphicon-road"> </i>
                <h3>距离</h3>
                <p>统计步行+跑步距离，今天，你前进了多远？</p>
            </div>
            <div class="col-md-3 welcome-grid">
                <i class="glyphicon glyphicon-blackboard"> </i>
                <h3>统计</h3>
                <p>我走过的每一步都有风景，你走的每一步都有故事。</p>
            </div>
            <div class="col-md-3 welcome-grid">
                <i class="glyphicon glyphicon-time"> </i>
                <h3>跑步时间</h3>
                <p>成功源于坚持。</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<?php
require_once 'component/footer.php';
?>
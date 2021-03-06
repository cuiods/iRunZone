<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <title>iRunZone-运动</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href='<?=base_url().'css/style.css'?>' rel="stylesheet" type="text/css"/>
    <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//cdn.hcharts.cn/highcharts/highcharts.js"></script>
    <script src="//cdn.hcharts.cn/highcharts/highcharts-more.js"></script>
    <script src="//cdn.hcharts.cn/highcharts/modules/exporting.js"></script>
    <script src='<?=base_url().'js/sport-sleep.js'?>'></script>
    <link rel="stylesheet" type="text/css" href='<?=base_url().'css/sidebar.css'?>'>
    <link rel="stylesheet" href='<?=base_url().'css/bootstrap-vertical-menu.css'?>'>
    <!--[if IE]>
    <script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href='<?=base_url().'css/default.css'?>' />
    <link rel="stylesheet" type="text/css" href='<?=base_url().'css/component.css'?>' />
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
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--/script-->
</head>
<?php
require_once(APPPATH.'views/component/header.php');
require_once(APPPATH.'views/component/sidebar_sport.php');
?>
<div class="welcome">
    <div class="container">
        <h2>今日睡眠分析</h2>
    </div>
</div>
<div class="welcome-grids">
    <div class="container">
        <div class="welcome-gridsinfo">
            <div class="col-md-4 welcome-grid">
                <i class="glyphicon glyphicon-ok-sign"> </i>
                <p>睡眠完成度</p>
                <h3 id="sleep-complete">50%</h3>
            </div>
            <div class="col-md-4 welcome-grid">
                <i class="glyphicon glyphicon-time"> </i>
                <p>总睡眠时间</p>
                <h3 id="sleep-total">8小时</h3>
            </div>
            <div class="col-md-4 welcome-grid">
                <i class="glyphicon glyphicon-eye-open"> </i>
                <p>浅睡眠时间</p>
                <h3 id="sleep-light">6小时</h3>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="welcome">
    <div class="container">
        <h2>每20分钟睡眠统计</h2>
    </div>
</div>
<div class="container">
    <div id="sport-sleep-statistic"></div>
</div>
<?php
require_once(APPPATH.'views/component/footer.php');
?>
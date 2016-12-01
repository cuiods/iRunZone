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
    <link rel="stylesheet" type="text/css" href='<?=base_url().'css/sidebar.css'?>'>

    <link rel="stylesheet" href='<?=base_url().'css/bootstrap-vertical-menu.css'?>'/>
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
require_once(APPPATH.'views/component/sidebar_activity.php');
?>
<!-- Top Navigation -->
<div class="banner banner5">
    <div class="container">
        <h2>活动详情</h2>
    </div>
</div>

<div class="my-activity">
    <div class="container">
        <div class="about-info-grids">
            <div class="col-md-3 abt-pic">
                <img src="<?=base_url().'images/img3.jpg'?>" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-9 abt-info-pic">
                <h3><?=$title?></h3>
                <p><?=$description?></p>
                <p>开始时间：<?=$start?> 结束时间：<?=$end?></p>
                <?php
                $isIn = false;
                foreach ($joiners as $joiner) {
                    if (strcmp($joiner->name,$_SESSION['username'])==0) {
                        $isIn = true;
                        break;
                    }
                }
                if ($isIn) {
                    ?>
                    <button onclick="location.href='/activity/leaveActivity/<?=$aid?>'" type="button" class="btn btn-default navbar-btn">退出活动</button>
                    <?php
                } else {
                    ?>
                    <button onclick="location.href='/activity/joinActivity/<?=$aid?>'" type="button" class="btn btn-default navbar-btn">参加活动</button>
                    <?php
                }
                ?>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="team">
            <h3>参赛用户</h3>
            <?php
            $i=1;
            $maxNum = 0;
            foreach ($joiners as $joiner) {
                if ($i==1) $maxNum = $joiner->stepnum;
                ?>
                <div class="activity-detail-grade">
                    <div class="grid-4">
                        <div class="team-grid">
                            <h4><?=$joiner->name?></h4>
                        </div>
                    </div>
                    <div class="grid-4">
                        <div class="team-grid">
                            <h4><?=$joiner->stepnum?></h4>
                        </div>
                    </div>
                    <div class="grid-4">
                        <div class="team-grid">
                            <h4>第<?=$i++?>名</h4>
                        </div>
                    </div>
                    <div class="grid-4">
                        <div class="progress grid-9 activity-progress">
                            <div class="progress-bar " role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: <?=$joiner->stepnum*1.0/$maxNum*100?>%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<?php
require_once(APPPATH.'views/component/footer.php');
?>

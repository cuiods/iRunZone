<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <title>iRunZone-个人信息</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href='<?=base_url().'css/style.css'?>' rel="stylesheet" type="text/css"/>
    <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href='<?=base_url().'css/sidebar.css'?>'>
    <link rel="stylesheet" href='<?=base_url().'css/bootstrap-vertical-menu.css'?>'/>
    <link rel="stylesheet" type="text/css" href='<?=base_url().'css/default.css'?>' />
    <link rel="stylesheet" type="text/css" href='<?=base_url().'css/component.css'?>' />
    <link rel="stylesheet" href='<?=base_url().'css/templatemo-blue.css'?>'/>

    <!--/hover-grids-->
    <script type="text/javascript" src='<?=base_url().'js/move-top.js'?>'></script>
    <script type="text/javascript" src='<?=base_url().'js/easing.js'?>'></script>
    <script type="text/javascript" src='<?=base_url().'plugin/jquery.backstretch.min.js'?>'></script>
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
require_once(APPPATH.'views/component/sidebar_user.php');
?>

<!-- header section -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <img src="<?=base_url()?>images/head.jpeg" class="img-responsive img-circle tm-border" alt="templatemo easy profile">
                <hr>
                <h1 class="tm-title bold shadow">我是<?=$user->uname?></h1>
                <h1 class="white bold shadow"><?=$user->description?></h1>
                <?php
                if ($isFollow==1) {
                    ?>
                    <button onclick="location.href='/user/unfollow/<?=$user->uid?>'" type="button" class="btn btn-default navbar-btn">取消关注</button>
                    <?php
                } else if ($isFollow==-1){
                    ?>
                    <button onclick="location.href='/user/follow/<?=$user->uid?>'" type="button" class="btn btn-default navbar-btn">关注</button>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</header>

<!-- contact and experience -->
<section class="container user-bottom">
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <div class="contact">
                <h2>个人信息</h2>
                <p><i class="fa fa-birthday-cake"></i> 生日：<?=$user->birthday?></p><br/>
                <p><i class="fa fa-map-marker"></i> 地点：<?=$user->location?></p><br/>
                <p><i class="fa fa-flag"></i> 目标体重；<?=$user->ideal_weight?>KG</p>
            </div>
        </div>
        <div class="col-md-8 col-sm-12">
            <div class="experience">
                <h2 class="white">参加的活动</h2>
                <?php
                $i = 0;
                foreach ($activities as $activity) {
                    ?>
                    <div class="experience-content">
                        <h4 class="experience-title accent"><a href="/activity/detail/<?=$activity->aid?>"><?=$activity->title?></a></h4>
                        <h5><?=$activity->start?></h5><span>-</span>
                        <h5><?=$activity->end?></h5>
                    </div>
                    <?php
                    $i++;
                    if ($i>=2) break;
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php
require_once(APPPATH.'views/component/footer.php');
?>

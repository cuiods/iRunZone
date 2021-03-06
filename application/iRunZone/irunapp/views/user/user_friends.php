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

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-sm-offset-3 col-md-9 col-md-offset-2 main">
            <h1 class="page-header" id="my-follwer">我关注的人</h1>
            <?php
            foreach ($following as $item) {
                ?>
                <div class="grid-4">
                    <div class="team-grid">
                        <img src="<?=base_url()?>images/head.jpeg" alt="">
                        <h4><a href="/user/userInfo/<?=$item->uid?>"><?=$item->uname?></a></h4>
                    </div>
                </div>
                <?php
            }
            ?>

            <div class="clearfix"> </div>


            <h1 class="page-header" id="my-followed">关注我的人</h1>
            <?php
            foreach ($follower as $item) {
                ?>
                <div class="grid-4">
                    <div class="team-grid">
                        <img src="<?=base_url()?>images/head.jpeg" alt="">
                        <h4><a href="/user/userInfo/<?=$item->uid?>"><?=$item->uname?></a></h4>
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

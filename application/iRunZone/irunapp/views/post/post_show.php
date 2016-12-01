<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <title>iRunZone-动态</title>
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
require_once(APPPATH.'views/component/sidebar_post.php');
?>

    <div class="my-activity">
        <?php
        foreach ($summary as $item) {
            ?>
            <div class="container">
                <div class="about-info-grids">
                    <div class="col-md-3 abt-pic">
                        <img src="<?=base_url()?>images/img<?=mt_rand(1,4)?>.jpg" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-9 abt-info-pic">
                        <h3><a href="/post/detail/<?=$item->pid?>"><?=$item->title?></a></h3>
                        <p>传说中的电动小马达，八块腹肌，马甲线，通过核心改造get起来！传说中的电动小马达，八块腹肌，马甲线，通过核心改造get起来！
                            传说中的电动小马达，八块腹肌，马甲线，通过核心改造get起来！传说中的电动小马达，八块腹肌，马甲线，通过核心改造get起来！
                            传说中的电动小马达，八块腹肌，马甲线，通过核心改造get起来！传说中的电动小马达，八块腹肌，马甲线，通过核心改造get起来！</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

<?php
require_once(APPPATH.'views/component/footer.php');
?>

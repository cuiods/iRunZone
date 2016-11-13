<!doctype html>
<html>
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="爱跑空间,跑步社交,iRunZone,Running,Zone" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--bootstrap-->
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!--coustom css-->
    <link href='<?=base_url().'css/style.css'?>' rel="stylesheet" type="text/css"/>
    <!--script-->
    <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
    <!-- js -->
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- /js -->
    <!--fonts-->
    <link href='<?=base_url().'plugin/googlecssfamily.css'?>' rel='stylesheet' type='text/css'>
    <!--/fonts-->
    <!--hover-girds-->
    <link rel="stylesheet" type="text/css" href='<?=base_url().'css/default.css'?>' />
    <link rel="stylesheet" type="text/css" href='<?=base_url().'css/component.css'?>' />
    <link href='<?=base_url().'css/styleLogin.css'?>' rel="stylesheet" type="text/css"/>
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
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--/script-->
</head>
<?php
require_once 'header.php';
?>
<div class="main">
    <!-----start-main---->
    <div class="inset">
        <div class="social-icons">
            <div class="span"><a href="#"><img src="images/fb.png" alt=""/><i>Connect with Facebook </i><div class="clear"></div></a></div>
            <div class="span1"><a href="#"><img src="images/t-bird.png" alt=""/><i>Connect with Twitter</i><div class="clear"></div></a></div>
            <div class="clear"></div>
        </div>
    </div>
    <h2>Or sign up with</h2>
    <form>
        <div class="lable">
            <input type="text" class="text" value="用户名" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '用户名';}" id="active">

        </div>
        <div class="clear"> </div>
        <div class="lable-2">
            <input type="password" class="text" value="Password " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password ';}">
            <input type="password" class="text" value="Password " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password ';}">
        </div>
        <div class="clear"> </div>
        <h3>By creating an account, you agree to our <span><a href="#">Terms & Conditions</a> <span></h3>
        <div class="submit">
            <input type="submit" onclick="myFunction()" value="Create account" >
        </div>
        <div class="clear"> </div>
    </form>
    <!-----//end-main---->

</div>
<?php
require_once 'footer.php';
?>

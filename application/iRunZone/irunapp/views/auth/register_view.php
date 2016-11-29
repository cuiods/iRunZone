<!doctype html>
<html>
<head>
    <title>iRunZone-注册新用户</title>
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
require_once(APPPATH.'views/component/header.php');
?>
<div class="main">

    <?php
    $error_msg = validation_errors();
    if (!empty($error_msg)) {
        echo "<div class=\"alert alert-danger\" role=\"alert\">$error_msg</div>";
    }
    ?>

    <!-----start-main---->
    <?php echo form_open('auth/register'); ?>
        <div class="lable">
            <label for="user_register">请输入用户名</label>
            <input id="user_register" type="text" required="" name="username" class="text" value="<?php echo set_value('username'); ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '用户名';}">
        </div>
        <div class="clear"> </div>
        <div class="lable-2">
            <label for="psw_register">请输入密码</label><input id="psw_register" type="password" required="" name="password" class="text" value="<?php echo set_value('password'); ?>"><br><br><br><br>
            <label for="psw_confirm">请再次输入密码</label><input id="psw_confirm" type="password" required="" name="passconfirm" class="text" value="<?php echo set_value('passconfirm'); ?>">
        </div>
        <div class="clear"> </div>
        <h3>已有账号？ <span><a href="/auth/loginview">点击这里登陆</a> <span></h3>
        <div class="submit">
            <input type="submit"  value="注册账号" >
        </div>
        <div class="clear"> </div>
    </form>
    <h2>或使用社交账号登陆</h2>
    <div class="inset">
        <div class="social-icons">
            <div class="span"><a href="#"><img src="/images/fb.png" alt=""/><i>Connect with Facebook </i><div class="clear"></div></a></div>
            <div class="span1"><a href="#"><img src="/images/t-bird.png" alt=""/><i>Connect with Twitter</i><div class="clear"></div></a></div>
            <div class="clear"></div>
        </div>
    </div>
    <!-----//end-main---->

</div>
<?php
require_once(APPPATH.'views/component/footer.php');
?>

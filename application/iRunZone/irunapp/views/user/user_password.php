<!doctype html>
<html>
<head>
    <title>iRunZone-修改密码</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
    <link rel="stylesheet" type="text/css" href='<?=base_url().'css/sidebar.css'?>'>
    <link rel="stylesheet" href='<?=base_url().'css/bootstrap-vertical-menu.css'?>'/>
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
require_once(APPPATH.'views/component/sidebar_user.php');
?>
<div class="main">

    <?php
    $error_msg = validation_errors();
    if (!empty($error_msg)) {
        echo "<div class=\"alert alert-danger\" role=\"alert\">$error_msg</div>";
    }
    ?>
    <!-----start-main---->
    <?php echo form_open('user/changePsw'); ?>
    <div class="lable">
        <label for="user_password">请输入旧密码</label>
        <input id="user_password" type="password" required="" name="oldpsw" class="text" value="">
    </div>
    <div class="clear"> </div>
    <div class="lable-2">
        <label for="psw_register">请输入新密码</label><input id="psw_register" required="" type="password"  name="newpsw1" class="text" value=""><br><br><br><br>
        <label for="psw_confirm">请再次输入新密码</label><input id="psw_confirm" required="" type="password"  name="newpsw2" class="text" value="">
    </div>
    <div class="clear"> </div>
    <div class="submit">
        <input type="submit"  value="确认修改" >
    </div>
    <div class="clear"> </div>
    </form>
    <!-----//end-main---->

</div>
<?php
require_once(APPPATH.'views/component/footer.php');
?>

<!doctype html>
<html>
<head>
    <title>iRunZone-登陆</title>
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
<body>
<!--header-->
<div class="header" id="home">
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"> </span>
                    <span class="icon-bar"> </span>
                    <span class="icon-bar"> </span>
                </button>
                <h1><a class="navbar-brand" href="../index.html">iRunZone<br /><span>爱跑空间</span></a></h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
                    <li><a href="../index.php"><span data-hover="Home">首页</span></a></li>
                    <li><a href=""><span data-hover="Activity">活动</span></a></li>
                    <li><a href=""><span data-hover="Actions">动态</span></a></li>
                    <li><a href=""><span data-hover="Group">小组</span></a></li>
                    <li><a href="/sport"><span data-hover="Statistic">运动</span></a></li>
                </ul>
                <div class="clearfix"> </div>
            </div><!-- /.navbar-collapse -->
            <!-- /.container-fluid -->
        </div>
    </nav>
    <!--/script-->
    <div class="clearfix"> </div>
</div>
<div class="main">

    <?php
    $error_msg = validation_errors();
    if (!empty($error_msg)) {
        echo "<div class=\"alert alert-danger\" role=\"alert\">$error_msg</div>";
    }
    echo form_open('auth/login');
    ?>
    <!-----start-main---->
    <div class="lable">
        <h3>请输入用户名</h3>
        <input type="text" name="username_login" required="" class="text" value="<?php echo set_value('username'); ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '用户名';}" id="active">
    </div>
    <div class="clear"> </div>
    <div class="lable-2">
        <h3>请输入密码</h3><input type="password" required="" name="password_login" class="text" value="<?php echo set_value('password'); ?>"><br><br><br><br>
    </div>
    <div class="clear"> </div>
    <h3>没有账号？ <span><a href="/auth">点击这里注册</a> <span></h3>
    <div class="submit">
        <input type="submit"  value="登陆" >
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

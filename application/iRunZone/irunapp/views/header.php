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
                <h1><a class="navbar-brand" href="index.html">iRunZone<br /><span>爱跑空间</span></a></h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
                    <li><a href=""><span data-hover="Home">首页</span></a></li>
                    <li><a href=""><span data-hover="Activity">活动</span></a></li>
                    <li><a href=""><span data-hover="Actions">动态</span></a></li>
                    <li><a href=""><span data-hover="Group">小组</span></a></li>
                    <li><a href=""><span data-hover="Statistic">运动</span></a></li>
                    <li><a href=""><span data-hover="Statistic">个人主页</span></a></li>
                </ul>
                <div class="clearfix"> </div>
            </div><!-- /.navbar-collapse -->
            <!-- /.container-fluid -->
            <div class="login-pop">
                <div id="loginpop"><a href="#" id="loginButton"><span>登陆</span></a>
                    <div id="loginBox">
                        <form id="loginForm">
                            <fieldset id="body">
                                <fieldset>
                                    <label for="email">邮箱</label>
                                    <input type="text" id="email">
                                </fieldset>
                                <fieldset>
                                    <label for="password">密码</label>
                                    <input type="password" id="password">
                                </fieldset>
                                <input type="submit" id="login" value="登陆">
                                <label for="checkbox"><input type="checkbox" id="checkbox"> <i>记住我</i></label>
                            </fieldset>
                            <span><a href="#">忘记密码?</a></span>
                        </form>
                    </div>
                </div>
            </div><script src='<?=base_url().'js/menu_jquery.js'?>'></script>
        </div>
    </nav>
    <!--/script-->
    <div class="clearfix"> </div>
</div>
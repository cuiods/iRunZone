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
                    <li><a href="/activity/show"><span data-hover="Activity">活动</span></a></li>
                    <li><a href=""><span data-hover="Actions">动态</span></a></li>
                    <li><a href=""><span data-hover="Group">小组</span></a></li>
                    <li><a href="/sport"><span data-hover="Statistic">运动</span></a></li>
                    <?php
                    if (isset($_SESSION['username'])) {
                        ?>
                        <li><a href=""><span data-hover="Statistic"><?=$_SESSION['username']?></span></a></li>
                        <?php
                    }
                    ?>
                </ul>
                <div class="clearfix"> </div>
            </div><!-- /.navbar-collapse -->
            <!-- /.container-fluid -->
            <?php
            if (!isset($_SESSION['username'])) {
                ?>
                <div class="login-pop">
                    <div id="loginpop"><a href="#" id="loginButton"><span>登陆</span></a>
                        <div id="loginBox">
                            <?php
                            $attributes = array( 'id' => 'loginForm');
                            echo form_open('auth/login', $attributes);
                            ?>
                                <fieldset id="body">
                                    <fieldset>
                                        <label for="username_login">用户名</label>
                                        <input type="text" id="username_login" name="username_login">
                                    </fieldset>
                                    <fieldset>
                                        <label for="password_login">密码</label>
                                        <input type="password" id="password_login" name="password_login">
                                    </fieldset>
                                    <input type="submit" id="login" value="登陆">
                                    <label for="checkbox"><input type="checkbox" id="checkbox"> <i>记住我</i></label>
                                </fieldset>
                                <span><a href="#">忘记密码?</a></span>
                                <span><a href="/auth">点击注册</a></span>
                            </form>
                        </div>
                    </div>
                </div><script src='<?=base_url().'js/menu_jquery.js'?>'></script>
            <?php
            }
            ?>
        </div>
    </nav>
    <!--/script-->
    <div class="clearfix"> </div>
</div>
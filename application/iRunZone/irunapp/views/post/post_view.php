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

    <script type="text/javascript" charset="utf-8" src="<?=base_url()?>ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?=base_url()?>ueditor/ueditor.all.min.js"></script>

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
<div class="container post-form">

    <?php
    $error_msg = validation_errors();
    if (!empty($error_msg)) {
        echo "<div class=\"alert alert-danger\" role=\"alert\">$error_msg</div>";
    }
    ?>

    <!-----start-main---->
    <?php echo form_open('post/create'); ?>
    <div class="post-title">
        <label for="post_create_name">请输入标题</label>
        <input id="post_create_name" type="text" required="" name="postName" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '文章名称';}">
        <input type="submit"  value="发布文章" >
    </div>
    <!-- 加载编辑器的容器 -->
        <script id="container" name="content" type="text/plain">
            输入您想分享的故事或经验~
        </script>
    <div class="clear"></div>
    </form>
    <!-- 配置文件 -->
    <script type="text/javascript" src="ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var editor = UE.getEditor('container');
    </script>
    <!-----//end-main---->
</div>

<?php
require_once(APPPATH.'views/component/footer.php');
?>

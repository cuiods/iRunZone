<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <title>iRunZone-运动</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href='<?=base_url().'css/style.css'?>' rel="stylesheet" type="text/css"/>
    <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href='<?=base_url().'css/sidebar.css'?>'>

    <link rel="stylesheet" href='<?=base_url().'css/bootstrap-vertical-menu.css'?>'>
    <link rel="stylesheet" type="text/css" href='<?=base_url().'css/default.css'?>' />
    <link rel="stylesheet" type="text/css" href='<?=base_url().'css/component.css'?>' />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
    <link rel="stylesheet" href='<?=base_url().'plugin/datechooser/css/bootstrap-datetimepicker.min.css'?>'>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src='<?=base_url().'plugin/datechooser/js/bootstrap-datetimepicker.min.js'?>'></script>

    <link href='<?=base_url().'css/styleLogin.css'?>' rel="stylesheet" type="text/css"/>
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
require_once(APPPATH.'views/component/sidebar_activity.php');
?>
<div class="main">

    <?php
    $error_msg = validation_errors();
    if (!empty($error_msg)) {
        echo "<div class=\"alert alert-danger\" role=\"alert\">$error_msg</div>";
    }
    ?>

    <!-----start-main---->
    <?php echo form_open("activity/edit/$aid"); ?>
    <div class="lable">
        <label for="acticity_create_name">请输入活动名称</label>
        <input id="acticity_create_name" type="text" required="" name="activityName" class="text" value="<?=$title?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '活动名称';}">
    </div>
    <br/>
    <div class="lable">
        <label for="activity_type">请选择活动类型</label><br/>
        <div class="activity-select">
            <select id="activity_type" name="activityType" class="selectpicker" data-style="btn-primary">
                <option value="0">单人比赛</option>
                <option value="1">小组比赛</option>
            </select>
        </div>
    </div>
    <div class="lable activity-date">
        <label>请选择活动开始时间</label>
        <input name="startTime" size="16" type="text" value="<?=$start?>" readonly class="form_datetime">
    </div>
    <div class="lable activity-date">
        <label>请选择活动结束时间</label>
        <input name="endTime" size="16" type="text" value="<?=$end?>" readonly class="form_datetime">
    </div>
    <div class="lable">
        <label>请输入活动描述</label>
        <textarea name="description" required="" class="form-control" rows="5"><?=$description?></textarea>
    </div>
    <div class="clear"> </div>
    <div class="submit">
        <input type="submit"  value="确认修改" >
    </div>
    <div class="clear"></div>
    </form>
    <!-----//end-main---->
</div>
<script type="text/javascript">
    $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
</script>
<?php
require_once(APPPATH.'views/component/footer.php');
?>

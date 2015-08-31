<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>玩乐之智商</title>
<link href="__ROOT__/Home/Tpl/Public/css/css.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="__ROOT__/Home/Tpl/Public/js/jquery.min.js"></script>
</head>

<body>
<div class="topbg">
<div class="top">
<div class="tople"><img src="__ROOT__/Home/Tpl/Public/images/logo4.jpg" border="0" alt="玩乐之智商" /></div>
<div class="tuoce">
<?php if($logIn == 'yes'): ?><img src="<?php echo (($userImage)?($userImage):'__PUBLIC__/images/tx.jpg'); ?>" id='user_img' style='max-widht:50px;max-height:50px;display:inline-block;float:left;margin-left:200px'/><span style='display:inline-block;width:50px;height:50px;line-height:60px;padding:0 7px;float:left;' id='user_name' status='on'><?php echo (($useName)?($useName):'默认用户名'); ?></span>
<?php else: ?>
<a href="__ROOT__/index.php/Index/index/na/login.html" id='user_name' status='off'>登录</a>   |    <a href="__ROOT__/index.php/Index/index/na/register.html">注册</a><?php endif; ?>
<!-- 
<a href="__ROOT__/index.php/Index/index/na/login.html">登录</a>   |    <a href="__ROOT__/index.php/Index/index/na/register.html">注册</a>
 -->

</div>
<div class="topri">

<a href="__ROOT__/index.php/Index/index/na/index.html" class="dh">首&nbsp;&nbsp;&nbsp;&nbsp;页</a>      
<a href="__ROOT__/index.php/Index/index/na/gymd.html" class="dh">玩乐解密</a>

<div class="show" onmouseover="showhid('downmenu1')" onmouseout="showhid2('downmenu1')">
                <a  class="add" onclick="showhid('downmenu1');">关注我们</a>
                <div class="hidd" id="downmenu1" style=" display:none;">
               <img src="__ROOT__/Home/Tpl/Public/images/erweima.jpg" width="100" height="100" border="0" />
         </div></div>



<div class="lxwm" onmouseover="lxwmhid('downnab1')" onmouseout="lxwmhid2('downnab1')">
                <a  class="add" onclick="lxwmhid('downnab1');">联系我们</a>
                <div class="hidd" id="downnab1" style=" display:none;">
               QQ:123456654		
         </div></div>
		 

<script>
function showhid(id){
 document.getElementById(id).style.display ='block';
}
function showhid2(id){
 document.getElementById(id).style.display ='none';
}
</script>
<script>
function lxwmhid(id){
 document.getElementById(id).style.display ='block';
}
function lxwmhid2(id){
 document.getElementById(id).style.display ='none';
}
</script>
<script type="text/javascript">
    function getLocalhost(){
        var href=window.location.href;//href.substring(0,strlen-35
        var localhostPos=href.indexOf('index.php');//-26 显示完全是加上index.php的长度
        var localhost=href.substring(0,localhostPos+'index.php'.length);
        return localhost;
    }
</script>


</div>

</div>
</div>

<div class="zsconbg">
<div class="zscon">

<div class="zsle">
<img src="<?php echo (($image)?($image):'__ROOT__/Home/Tpl/Public/images/7-1.jpg'); ?>" class="img" />
</div>

<div class="zsce">
<script type="text/javascript">
    /**
     * 倒计时
     * 
     */
    var specifiedHour=21;
    var specifiedMinute=1;
    var myDate = new Date();
    var interval=self.setInterval(function(){
        var hour=myDate.getHours();
        if (hour==specifiedHour) {
            clearInterval(interval);
            countDown();
            //倒计时停止，筛选中奖用户
            $.getJson();
        }
    },1000);
    function countDown(){
        var i=60;
        var interval=self.setInterval(function(){
            i--;
            if (i<0) {
                clearInterval(interval);
                //倒计时已到选出五个最快的作答人
            }else{
                $("#clock").text(i);
            }
        },1000);
    }
</script>
<div class="djs">倒计时 &nbsp;&nbsp;<span id='clock'><?php echo (($clock)?($clock):'60'); ?></div>

<div class="bt"><?php echo (($topic)?($topic):'有奖竞猜开始了'); ?></div>
<div class="wt"><?php echo ($question); ?></div>
<script type="text/javascript">
    /**
     * 1、控制倒计时
     * 2、控制是否可以提交
     */
    function checkSub(){
        var specifiedHour=21;
        var specifiedMinute=1;
        var logStatus=$('#user_name').attr('status');
        if (logStatus!='off') {
            alert('登录之后才可答题');
            return false;
        }else if (logStatus!='on') {
            var myDate = new Date();
            var hour=myDate.getHours();//获得小时数0-23；
            var minute=myDate.getMinutes();
            var seconds=myDate.getSeconds();
            if (hour==specifiedHour&&minute<specifiedMinute) {
                alert('提交成功');
                //异步处理提交问题
                var userName=$("user_name").text();
                var choices=$(".xk");
                $(".xk").each(function(){
                    if ($(this).attr("checked")=="checked") {
                        subAnser=$(this).val();
                    }
                });
                var localhost=getLocalhost();
                var goHref=localhost+'/Wisdom/saveAnser';
                $.ajax({
                    url:goHref,
                    data:{sub_anser:subAnser}
                });
                return false;
            }else if(hour<specifiedHour){
                alert('未到提交时间');
                return false;
            }else{
                alert('答题时间已过！');
                return false;
            }
        }
        return false;
    }
</script>
<div class="bd">
<form name="input" action="/html/try/form-radio.html" onsubmit="return checkSub();">
<label for="choice1"><input type="radio" class="xk" id='choice1' name="choice" value="A" checked=""/> A) <?php echo ($choice1); ?></label>
<br />
<label for="choice2">
<input type="radio"  class="xk" id='choice2' name="choice" value="B"  /> B) <?php echo ($choice2); ?></label>
<br />
<label for="choice3">
<input type="radio"  class="xk" id='choice3' name="choice" value="C" /> C) <?php echo ($choice3); ?></label>
<br />
<label for="choice4">
<input type="radio"  class="xk" id='choice4' name="choice" value="D" /> D) <?php echo ($choice4); ?></label>
<br /><br />
<input type ="submit" class="button  blue" value ="提交">
</form> 
</div>
<!-- <?php if($logIn != 'yes'): ?><script type="text/javascript">
        alert('登录之后才可答题');

    </script><?php endif; ?> -->
<script type="text/javascript">
/**
 * 控制当选择某个选项的时候相应的选项的checked变为checked
 * 其他的选项删掉checked
 */

    $('.xk').click(function(){
        $('.xk').each(function(){
            if ($(this).attr("checked")=="checked") {
                $(this).removeAttr("checked");
            };
        });
        $(this).attr('checked','checked');
    });
</script>
</div>

<div class="zsri">
<div class="bt"><?php echo ($topic2); ?></div>

<div class="hsmd">
<style type="text/css">
    .hsmd ul li{
        line-height:35px; 
        height:35px;/* float:left;*/
        list-style:none;
        font-family:"microsoft yahei";
        color:#000000; 
        font-size:16px;
        display: block;
        width: 250px;
        margin-left: 0px;
    }
</style>
<!--任何时候都是显示五条最新内容-->
<?php if($hasUser == 'no'): ?><ul>
<!-- <li>用户名：David  21:00:05</li>
<li>用户名：David  21:00:05</li>
<li>用户名：David  21:00:05</li>
<li>用户名：David  21:00:05</li>
<li>用户名：David  21:00:05</li> -->
<li>快来参与吧！</li>
</ul>
<?php else: ?>
<ul style='list-style:none;padding-left:0px;'>
    <!-- <?php if(is_array($luckyUsers)): foreach($luckyUsers as $key=>$luckyUser): ?><li style="display:block"><?php echo ($luckyUser["user_name"]); ?></li><br><?php endforeach; endif; ?> -->
    <li><?php echo ($luckyUsers[0]['user_name']); ?></li>
    <li><?php echo ($luckyUsers[1]['user_name']); ?></li>
    <li><?php echo ($luckyUsers[2]['user_name']); ?></li>
    <li><?php echo ($luckyUsers[3]['user_name']); ?></li>
    <li><?php echo ($luckyUsers[4]['user_name']); ?></li>
    <!-- <li>用户名：David  21:00:05</li>
<li>用户名：David  21:00:05</li>
<li>用户名：David  21:00:05</li>
<li>用户名：David  21:00:05</li>
<li>用户名：David  21:00:05</li> -->
</ul><?php endif; ?>

</div>

</div>


</div>
</div>


</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录</title>
<link href="__ROOT__/Home/Tpl/Public/css/css.css" type="text/css" rel="stylesheet" />

</head>

<body>
<div class="topbg">
<div class="top">
<div class="tople"><a href="/"><img src="images/logo1.jpg" border="0" alt="玩乐之" /></a></div>
<div class="tuoce">

<a href="__ROOT__/index.php/Index/index/na/login.html">登录</a>   |    <a href="__ROOT__/index.php/Index/index/na/register.html">注册</a>


</div>
<div class="topri">

<a href="__ROOT__/index.php/Index/index/na/index.html" class="dh">首&nbsp;&nbsp;&nbsp;&nbsp;页</a>      
<a href="__ROOT__/index.php/Index/index/na/gymd.html" class="dh">玩乐解密</a>

<div class="show" onmouseover="showhid('downmenu1')" onmouseout="showhid2('downmenu1')">
                <a  class="add" onclick="showhid('downmenu1');">关注我们</a>
                <div class="hidd" id="downmenu1" style=" display:none;">
               <img src="images/erweima.jpg" width="100" height="100" border="0" />
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



</div>

</div>
</div>
<div class="mdcon">

<div class="content">

<div class="denglu">

<form name="login" action="__ROOT__/index.php/User/user" method="post" style="color:#6AD9ED;">
用户名 <input style="border:1px solid #6AD9ED;width:250px" type="text" name="username" value="手机号/用户名"/> <br />
密码&nbsp;&nbsp;&nbsp;  <input style="border:1px solid #6AD9ED;width:250px" type="password" name="password" /> <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black" size="2">还没有账号？</font><a href='register.html' style="color:#6AD9ED; font-size:15px;text-decoration:none">立即注册</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='' style="color:#6AD9ED; font-size:15px;text-decoration:none">忘记密码</a><br />
<input style="background-color:#6AD9ED;width:200px;margin-left:65px;" type="submit" name="submit" value="登录" />
</form>
<span style="width:200px;margin-left:50px;color:#6AD9ED"> ————  合作账号登录  ———— </span> <br />
<span style="width:200px;margin-left:80px;"><a href='' style="color:#6AD9ED;margin-left:30px;text-decoration:none">QQ</a> <a href='' style="color:#6AD9ED;margin-left:10px;text-decoration:none">微博</a> <a href='' style="color:#6AD9ED;margin-left:10px;text-decoration:none">微信</a></span>


</div>

<div class="ycwz">

说过抗力 撒娇和打开了就爱上看到了哈斯<br />
萨科技都圣诞快乐哈撒 啥都会看见<br />
谁看见爱就爱上看到哈萨洛克 <br />
看啥都看俺还是看见的话<br />
萨科技活动快结婚<br />
就是快的话<br />

</div>

</div>



</div>



</body>
</html>
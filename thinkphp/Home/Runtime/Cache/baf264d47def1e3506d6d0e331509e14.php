<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>玩乐之摄影</title>
<link href="__ROOT__/Home/Tpl/Public/css/css.css" type="text/css" rel="stylesheet" />
<link type="text/css" href="__ROOT__/Home/Tpl/Public/css/lrtk2.css" rel="stylesheet" />
<script type="text/javascript" src="__ROOT__/Home/Tpl/Public/js/jquery2.js"></script>
<script type="text/javascript">
$(function(){ 
	$('li').hover(function() {
	    $(this).addClass('on');
	    var wl = $(this).find('img').attr('width');
	    if (wl < 190) {
	        $(this).find('.in').css('left', '0')
	    } else {
	        $(this).find('.in').css('left', -wl / 4)
	    }
	},
	function() {
	    $(this).animate({
	        height: "120px"
	    },
	    100).removeClass('on');
	    $(this).find('.in').css('left', '0')
	});
})
</script>
</head>

<body>
<div class="topbg">
<div class="top">
<div class="tople"><img src="__ROOT__/Home/Tpl/Public/images/logo7.jpg" border="0" alt="玩乐之摄影" /></div>
<div class="tuoce">

<a href="__ROOT__/index.php/Index/index/na/login.html">登录</a>   |    <a href="__ROOT__/index.php/Index/index/na/register.html">注册</a>


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



</div>

</div>
</div>

<div class="syconbg">
<div class="sycon">

<div class="zxsy">

<ul class="box01">
	<li>
		<div class="in">
		 <p class="bt"> 用户名：最差的学霸</p>
			<a href="#"><img src="__ROOT__/Home/Tpl/Public/images/img01.png" /></a>
			<p><b class="bsc"><a href="#">觉得美</a></b>已有1000人觉得美</p>
		</div>
	</li>
	<li>
		<div class="in">
		 <p class="bt"> 用户名：最差的学霸</p>
			<a href="#"><img src="__ROOT__/Home/Tpl/Public/images/img02.png" /></a>
			<p><b class="bsc"><a href="#">觉得美</a></b>已有1000人觉得美</p>
		</div>
	</li>
	<li>
	    <div class="in">
		 <p class="bt"> 用户名：最差的学霸</p>
	        <a href="#"><img src="__ROOT__/Home/Tpl/Public/images/img05.png" /></a>
			<p><b class="bsc"><a href="#">觉得美</a></b>已有1000人觉得美</p>
	    </div>
	</li>
	<li>
	    <div class="in">
		 <p class="bt"> 用户名：最差的学霸</p>
	        <a href="#"><img src="__ROOT__/Home/Tpl/Public/images/img01.jpg" /></a>
			<p><b class="bsc"><a href="#">觉得美</a></b>已有1000人觉得美</p>
	    </div>
	</li>
	<li>
	    <div class="in">
		 <p class="bt"> 用户名：最差的学霸</p>
	        <a href="#"><img src="__ROOT__/Home/Tpl/Public/images/img03.png" /></a>
	        <p><b class="bsc"><a href="#">觉得美</a></b>已有1000人觉得美</p>
	    </div>
	</li>
	<li>
	    <div class="in">
		 <p class="bt"> 用户名：最差的学霸</p>
	        <a href="#"><img src="__ROOT__/Home/Tpl/Public/images/img01.png" /></a>
	        <p><b class="bsc"><a href="#">觉得美</a></b>已有1000人觉得美</p>
	    </div>
	</li>
	<li>
	    <div class="in">
		 <p class="bt"> 用户名：最差的学霸</p>
	        <a href="#"><img src="__ROOT__/Home/Tpl/Public/images/img05.png" /></a>
	        <p><b class="bsc"><a href="#">觉得美</a></b>已有1000人觉得美</p>
	    </div>
	</li>
	<li>
	    <div class="in">
		 <p class="bt"> 用户名：最差的学霸</p>
	        <a href="#"><img src="__ROOT__/Home/Tpl/Public/images/img02.png" /></a>
	        <p><b class="bsc"><a href="#">觉得美</a></b>已有1000人觉得美</p>
	    </div>
	</li>
	<li>
	    <div class="in">
		 <p class="bt"> 用户名：最差的学霸</p>
	        <a href="#"><img src="__ROOT__/Home/Tpl/Public/images/ps3.jpg" /></a>
	        <p><b class="bsc"><a href="#">觉得美</a></b>已有1000人觉得美</p>
	    </div>
	</li>
	<li>
	    <div class="in">
		 <p class="bt"> 用户名：最差的学霸</p>
	        <a href="#"><img src="__ROOT__/Home/Tpl/Public/images/img03.png" /></a>
	        <p><b class="bsc"><a href="#">觉得美</a></b>已有1000人觉得美</p>
	    </div>
	</li>
	</ul></div>
<div  class="zxsy">

<ul class="box01">
	<li>
	    <div class="in">
		 <p class="bt"> 用户名：最差的学霸</p>
	        <a href="#"><img src="__ROOT__/Home/Tpl/Public/images/img02.png" /></a>
	        <p><b class="bsc"><a href="#">觉得美</a></b>已有1000人觉得美</p>
	    </div>
	</li>
	<li>
	    <div class="in">
		 <p class="bt"> 用户名：最差的学霸</p>
	        <a href="#"><img src="__ROOT__/Home/Tpl/Public/images/img01.png" /></a>
	        <p><b class="bsc"><a href="#">觉得美</a></b>已有1000人觉得美</p>
	    </div>
	</li>
	<li>
	    <div class="in">
		 <p class="bt"> 用户名：最差的学霸</p>
	        <a href="#"><img src="__ROOT__/Home/Tpl/Public/images/img03.png" /></a>
	        <p><b class="bsc"><a href="#">觉得美</a></b>已有1000人觉得美</p>
	    </div>
	</li>
	<li>
	    <div class="in">
		 <p class="bt"> 用户名：最差的学霸</p>
	        <a href="#"><img src="__ROOT__/Home/Tpl/Public/images/ps1.jpg" /></a>
	        <p><b class="bsc"><a href="#">觉得美</a></b>已有1000人觉得美</p>
	    </div>
	</li>
	<li>
	    <div class="in">
		 <p class="bt"> 用户名：最差的学霸</p>
	        <a href="#"><img src="__ROOT__/Home/Tpl/Public/images/img05.png" /></a>
	        <p><b class="bsc"><a href="#">觉得美</a></b>已有1000人觉得美</p>
	    </div>
	</li>
	
	
	
	<li>
	    <div class="in">
		 <p class="bt"> 用户名：最差的学霸</p>
	        <a href="#"><img src="__ROOT__/Home/Tpl/Public/images/img01.jpg" /></a>
			<p><b class="bsc"><a href="#">觉得美</a></b>已有1000人觉得美</p>
	    </div>
	</li>
	<li>
	    <div class="in">
		 <p class="bt"> 用户名：最差的学霸</p>
	        <a href="#"><img src="__ROOT__/Home/Tpl/Public/images/img03.png" /></a>
	        <p><b class="bsc"><a href="#">觉得美</a></b>已有1000人觉得美</p>
	    </div>
	</li>
	<li>
	    <div class="in">
		 <p class="bt"> 用户名：最差的学霸</p>
	        <a href="#"><img src="__ROOT__/Home/Tpl/Public/images/img01.png" /></a>
	        <p><b class="bsc"><a href="#">觉得美</a></b>已有1000人觉得美</p>
	    </div>
	</li>
	<li>
	    <div class="in">
		 <p class="bt"> 用户名：最差的学霸</p>
	        <a href="#"><img src="__ROOT__/Home/Tpl/Public/images/img05.png" /></a>
	        <p><b class="bsc"><a href="#">觉得美</a></b>已有1000人觉得美</p>
	    </div>
	</li>
	<li>
	    <div class="in">
		 <p class="bt"> 用户名：最差的学霸</p>
	        <a href="#"><img src="__ROOT__/Home/Tpl/Public/images/img02.png" /></a>
	        <p><b class="bsc"><a href="#">觉得美</a></b>已有1000人觉得美</p>
	    </div>
	</li>
</ul>

</div>

<div class="sydb">

<div class="sydble">
<span class="tjtp"><a href="/" style=" padding:10px 23px; background:url(__ROOT__/Home/Tpl/Public/images/xztp.png) center center no-repeat;">添加图片</a></span>
</div>


<div class="sydbcd">
<img src="__ROOT__/Home/Tpl/Public/images/zxsctp_03.jpg" class="img" /></div>

<div class="sydble">
<span class="tjtp"><a href="/" style=" padding:10px 23px; background:url(__ROOT__/Home/Tpl/Public/images/xztp.png) center center no-repeat;">发送</a></span>
</div>


</div>
</div></div>

</body>
</html>
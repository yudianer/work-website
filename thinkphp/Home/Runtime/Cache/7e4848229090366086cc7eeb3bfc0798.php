<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>玩乐策略</title>
<link href="__ROOT__/Home/Tpl/Public/css/css.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="__ROOT__/Home/Tpl/Public/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="__ROOT__/Home/Tpl/Public/css/lrtk.css">
</head>

<body>
<div class="topbg">
<div class="top">
<div class="tople"><a href="/"><img src="__ROOT__/Home/Tpl/Public/images/logo1.jpg" border="0" alt="玩乐之" /></a></div>
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


<!-- 代码 开始 -->
<div class="container-fluid text-center">
    <div class="header">
        <img class="headerImg"
             src="__ROOT__/Home/Tpl/Public/images/1-4.jpg"
             data-slideshow='__ROOT__/Home/Tpl/Public/images/1-1.jpg|__ROOT__/Home/Tpl/Public/images/1-2.jpg|__ROOT__/Home/Tpl/Public/images/1-3.jpg'>
    </div>
</div>
<script src="__ROOT__/Home/Tpl/Public/js/jquery.min.js"></script>
<script src="__ROOT__/Home/Tpl/Public/js/jquery.hammer-full.min.js"></script>
<script src="__ROOT__/Home/Tpl/Public/js/plugin.js"> </script>
<script src="__ROOT__/Home/Tpl/Public/js/lrtk.js"></script>
<script>
var links = ["http://www.lanrentuku.com", "http://www.lanrentuku.com/lanren/", "http://www.lanrentuku.com/js/biaoqian.html", "http://www.lanrentuku.com/js/xiangce.html"];
$(".slide").click(function(){
    var index = $(this).attr('index');
    if(index === undefined) {
        window.open(links[0]);
    } else {
        window.open(links[(parseInt(index)+1)]);
    }

});
</script>
<!-- 代码 结束 -->

<div class="con">

<div class="ymlj">
<a href="__ROOT__/index.php/Index/index/na/miandan.html"><img src="__ROOT__/Home/Tpl/Public/images/mian.png" class="img" alt="玩乐之免单" /></a>
<span class="bt"><a href="__ROOT__/index.php/Index/index/na/miandan.html">玩乐之免单</a></span>
<!--span class="ms">每天十二单本地免费商品<Br />餐厅、咖啡厅、酒店、酒吧、<br />KTV、旅游</span-->
<span class="ms" style='width:200px;display:block'><?php echo ($location1); ?></span>
</div>
<div class="ymlj">
<a href="__ROOT__/index.php/Index/index/na/mengxiang.html"><img src="__ROOT__/Home/Tpl/Public/images/meng.png" class="img" alt="玩乐之梦想" /></a>
<span class="bt"><a href="__ROOT__/index.php/Index/index/na/mengxiang.html">玩乐之梦想</a></span>
<!--span class="ms">你的梦想是什么！！<Br />大声的说出来<br />我来帮你实现</span-->
<span class="ms" style='width:200px;display:block'><?php echo ($location2); ?></span>
</div>

<div class="ymlj">
<a href="__ROOT__/index.php/Index/index/na/zhishang.html"><img src="__ROOT__/Home/Tpl/Public/images/zhi.png" class="img" alt="玩乐之智商" /></a>
<span class="bt"><a href="__ROOT__/index.php/Index/index/na/zhishang.html">玩乐之智商</a></span>
<span class="ms" style='width:200px;display:block'><?php echo ($location3); ?></span>
</div>


<div class="ymlj">
<a href="__ROOT__/index.php/Index/index/na/yuehui.html"><img src="__ROOT__/Home/Tpl/Public/images/yue.png" class="img" alt="玩乐之约会" /></a>
<span class="bt"><a href="__ROOT__/index.php/Index/index/na/yuehui.html">玩乐之约会</a></span>
<span class="ms" style='width:200px;display:block'><?php echo ($location4); ?></span>
</div>

<div class="ymlj">
<a href="__ROOT__/index.php/Index/index/na/sheying.html"><img src="__ROOT__/Home/Tpl/Public/images/ying.png" class="img" alt="玩乐之摄影" /></a>
<span class="bt"><a href="__ROOT__/index.php/Index/index/na/sheying.html">玩乐之摄影</a></span>
<span class="ms" style='width:200px;display:block'><?php echo ($location5); ?></span>
</div>




</div>


</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商家详情页</title>

<link href="__ROOT__/Home/Tpl/Public/css/css.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="__ROOT__/Home/Tpl/Public/js/jquery.min.js"></script>
</head>

<body>

<div class="topbg">
<div class="top">
<div class="tople"><img src="__ROOT__/Home/Tpl/Public/images/logo2.jpg" border="0" alt="玩乐之免单" /></div>
<div class="tuoce">
</*
	|---------------------------------------------------------------------------------------------------------|
	|	NOTE:in order to test this system without logging in stauts, $logIn turns into neq-yes which should   |
	|	 be eq-yes                                                                                            |
	|---------------------------------------------------------------------------------------------------------|	
*/}>
<?php if($logIn == 'yes'): ?><img src="<?php echo (($userImage)?($userImage):'__PUBLIC__/images/tx.jpg'); ?>" id='user_img' style='max-widht:50px;max-height:50px;display:inline-block;float:left;margin-left:200px'/><span style='display:inline-block;width:50px;height:50px;line-height:60px;padding:0 7px;float:left;' id='user_name'><?php echo (($useName)?($useName):'默认用户名'); ?></span>
<?php else: ?>
<a href="__ROOT__/index.php/Index/index/na/login.html">登录</a>   |    <a href="__ROOT__/index.php/Index/index/na/register.html">注册</a><?php endif; ?>
<!-- 
<a href="__ROOT__/index.php/Index/index/na/login.html">登录</a>   |    <a href="__ROOT__/index.php/Index/index/na/register.html">注册</a> -->

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
<div class="xqcon">

<div class="xqle">
<div class="xqtp"><img src="__ROOT__/Uploads/freeLunch/<?php echo ($picture); ?>" class="img" border="0" /></div>
<div class="xqms"><?php echo ($description); ?></div>
</div>
<style type="text/css">
	.comment{
		width:inherit;
		height:505px;
		overflow-y:scroll;
	}
	.comment:last-child{
		display: block;
	}
</style>
<div class="xqri">
<!--$demo:表明这个话题是属于哪一个demo-->
<div class="bt" demo="<?php echo ($demo); ?>" id="topic_demo"><?php echo ($topic); ?></div>

<div class="comment" >
<!--|_________________________________________comment area begin___________________________________________|-->

<?php if(is_array($comments)): foreach($comments as $k=>$comment): ?><div class="pinglun">
		
		<div class="tx"><a href="javascript:"><img src="<?php echo ($comment['user_image']); ?>" class="img"/></a></div>

	<div class="zj">
		
			<span class="wdyhm"><?php echo ($comment['user_name']); ?></span>
			<span class="plnr"><?php echo ($comment['comment']); ?></span>
	</div>
	<div class="yc">
		<a href="javascript:"  >
		
			<img src="__ROOT__/Home/Tpl/Public/images/zan.png" border="0" id='zan_img' zaned="<?php echo ($zanded[$k]); ?>" commentId="<?php echo ($comment['id']); ?>"/>
		</a>
		
		
		<span class="zan" value="<?php echo ($comment['id']); ?>"><?php echo ($comment['approving_num']); ?></span>
	</div>
</div><?php endforeach; endif; ?>
<script type="text/javascript">
	// $(".comment").on("click", "#zan_img", function () {
 //    	console.log(this.tagName.toLowerCase()); // "a"
 //    	var canZan=$(this).attr('zaned');
	// 	if (canZan=='c') {
	// 		var approvingNum=$(this).parent().next().text();
	// 		approvingNum=parseInt(approvingNum)+1;
	// 		$(this).parent().next().text(approvingNum);
	// 		$(this).attr('zaned','n');
	// 		//use ajax to add commentId-user_name into table zaned
	// 		var userName=$('#user_name').text();
	// 		//alert(userName);
	// 		var commentId=$(this).attr('commentId');
	// 		addCommentIdUser("userName",commentId);
	// 		//alert('ffsfs');
	// 	}else{
	// 		alert('您已经赞过了');
	// 	}
 //    	// return false;
	// });
	function getLocalhost(){
		var href=window.location.href;//href.substring(0,strlen-35
    	var localhostPos=href.indexOf('index.php');//-26 显示完全是加上index.php的长度
    	var localhost=href.substring(0,localhostPos+'index.php'.length);
    	return localhost;
	}
	function addCommentIdUser(userName,commentId){
		var href=window.location.href;//href.substring(0,strlen-35
    	var localhostPos=href.indexOf('index.php');//-26 显示完全是加上index.php的长度
    	var indexPage=href.substring(0,localhostPos+'index.php'.length);
    	var goHref=indexPage+"/FreeLunch/addCommentIdUser";
    	var name=userName;
    	var id=commentId;
    	var demo=$("#topic_demo").attr('demo');
		$.ajax({
			type: "GET",
            url: goHref,
            data: {'user_name':name,'comment_id':id,'demo':demo},
            success:function(){
            	//window.location.href=goHref;
            	//alert('ddd');
            }
		});
	}
</script>
</*
	|---------------------------------------------------------------------------------------------------------|
	|	NOTE:in order to test this system without logging in stauts, $logIn turns into neq-yes which should   |
	|	 be eq-yes                                                                                            |
	|---------------------------------------------------------------------------------------------------------|	
*/}>
<?php if($logIn == 'yes'): ?><script type="text/javascript">
	/**
	 * plus the approving_num 
	 * 备用方法：此方法对于动态添加的元素不起作用
	 * // $(".comment .pinglun #zan_img").click(function(){
	// 	var canZan=$(this).attr('zaned');
	// 	if (canZan=='c') {
	// 		var approvingNum=$(this).parent().next().text();
	// 		approvingNum=parseInt(approvingNum)+1;
	// 		$(this).parent().next().text(approvingNum);
	// 		$(this).attr('zaned','n');
	// 		//use ajax to add commentId-user_name into table zaned
	// 		var userName=$('#user_name').text();
	// 		//alert(userName);
	// 		var commentId=$(this).attr('commentId');
	// 		addCommentIdUser("userName",commentId);
	// 		//alert('ffsfs');
	// 	}else{
	// 		alert('您已经赞过了');
	// 	}
		
	// });
	 */
	
	$(".comment").on("click", "#zan_img", function () {
    	console.log(this.tagName.toLowerCase()); // "a"
    	var canZan=$(this).attr('zaned');
		if (canZan=='c') {
			var approvingNum=$(this).parent().next().text();
			approvingNum=parseInt(approvingNum)+1;
			$(this).parent().next().text(approvingNum);
			$(this).attr('zaned','n');
			//use ajax to add commentId-user_name into table zaned
			var userName=$('#user_name').text();
			//alert(userName);
			var commentId=$(this).attr('commentId');
			addCommentIdUser("userName",commentId);
			//alert('ffsfs');
		}else{
			alert('您已经赞过了');
		}
    	// return false;
	});
</script>
<?php else: ?>
<script type="text/javascript">
$(".comment").on("click", "#zan_img", function () {
	alert("登陆之后才可以点赞哦");
});
</script><?php endif; ?>
</div>
<!--mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->
<div class="pinglun" style='display:none' id='com_construct'>
		<div class="tx"><a href="javascript:"><img src="touxiang" class="img"/></a></div>
	<div class="zj">
			<span class="wdyhm">用户名</span>
			<span class="plnr">评论内容</span>
	</div>
	<div class="yc">
		<a href="javascript:"  >
			<img src="__ROOT__/Home/Tpl/Public/images/zan.png" border="0" id='zan_img' zaned="c" commentId=""/>
		</a>
		<span class="zan" value="<?php echo ($comment['id']); ?>">0</span>
	</div>
</div>
<!--|__________________________________________comment area end____________________________________________|-->
<div class="djpl">

<div class="srk">

<style>
#oText{border:1px solid #ccccccc; height:75px; line-height:20px;  width:500px;ryo:expression(onfocus=function light (){with(document.all.oText){style.borderColor=(style.borderColor=="#ffee00"?"#ff0000":"#ffee00");timer=setTimeout(light,500);}},onblur=function(){this.style.borderColor="#ff0000";clearTimeout(timer)})};
</style>
<textarea name="textarea" rows="10" cols="20"  id="oText" wrap="virtual"></textarea>
</div>
<div class="tj">

	<a href="javascript:"><img src="__ROOT__/Home/Tpl/Public/images/fs.png" id='submit_button' border="0" value="submit"/></a>
</div>
</div>
</*
	|---------------------------------------------------------------------------------------------------------|
	|	NOTE:in order to test this system without logging in stauts, $logIn turns into neq-yes which should   |
	|	 be eq-yes                                                                                            |
	|---------------------------------------------------------------------------------------------------------|	
*/}>
<?php if($logIn == 'yes'): ?><script type="text/javascript">
//when submit the comment，judge whether user logged in
	$('.tj #submit_button').click(function(){
		//construct constructure,father element:id=comment
		var com_construct=$('#com_construct');
		var vice_constr=$("<div class='pinglun' id='latedCom'></div>").html(com_construct.html());
		// var comChildren=$(".comment").children('div');
		// var childrenCount=comChildren.length;
		$(".comment").append(vice_constr);
		//用户的头像
		var user_image_src=$("#user_img").attr('src');
		// alert(user_image_src);
		$(".comment #latedCom .tx .img").attr('src',user_image_src);
		//用户名
		var user_name=$('#user_name').text();
		$(".comment #latedCom .wdyhm").text(user_name);
		//评论内容
		var submit_content=$('#oText').val();//comment content
		$(".comment #latedCom .plnr").text(submit_content);
		//评论id
		//利用getjson
		//1、插入评论   2、一个评论的id。
		//1、插入评论（user_image,user_name,content,approving_num=0）
		var localhost=getLocalhost();
		// alert(localhost);
		var goHref=localhost+'/FreeLunch/addComment';
		var demo=$("#topic_demo").attr('demo');
		$.getJSON(goHref,{user_name:user_name,user_image:user_image_src,content:submit_content,demo:demo},function(json){
			var commentId=json['id'];
			$(".comment #latedCom #zan_img").attr('commentId',commentId);
		});
	});
</script>
<?php else: ?>
<script type="text/javascript">
//when submit the comment
	$('.tj #submit_button').click(function(){
		alert("登录之后才可发表评论哦");
	});
</script><?php endif; ?>

</div>
</div>
</div>

</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!--这个页面是用户登录之前的页面-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>玩乐之约会</title>
<link href="__ROOT__/Home/Tpl/Public/css/css.css" type="text/css" rel="stylesheet" />

<link href="__ROOT__/Home/Tpl/Public/css/yuehui.css" type="text/css" rel="stylesheet" />
<script src="__ROOT__/Home/Tpl/Public/js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="__ROOT__/Home/Tpl/Public/js/jquery.form.js"></script>
<script src="__ROOT__/Home/Tpl/Public/js/zzsc.js" type="text/javascript"></script>

<script type="text/javascript">
// jQuery(document).ready(function(){
								
// 	  //download script
// 	  jQuery('.s_download').on("click", function(e) {
// 			var semail = jQuery("#itzurkarthi_email").val();
// 			if(semail == '')
// 			{
// 				alert('Enter Email');
// 				return false;
// 			}
// 			var str = "sub_email="+semail
// 			jQuery.ajax({
// 				type: "POST",
// 				url: "download.php",
// 				data: str,
// 				cache: false,
// 				success: function(htmld){
// 						jQuery('#down_update').html(htmld);
// 				}
// 			});
// 	  });
// });
</script>

<style>
	#searchform { float:left; margin-left:20px; margin:9px 0px 0px; padding:0px; }
	#searchform fieldset { padding:0px; border:none; margin:0px; }
	#searchform input[type="text"] { 
		background:#e8e8e8;
		border:none;
		float:left;		
		padding:0px 10px 0px 15px;
		margin:0px;
		width:150px; 
		height:38px;
		line-height:38px;
		transition:all 300ms cubic-bezier(0.215, 0.61, 0.355, 1) 0s;
		-moz-transition:all 300ms cubic-bezier(0.215, 0.61, 0.355, 1) 0s; 
		-webkit-transition:all 300ms cubic-bezier(0.215, 0.61, 0.355, 1) 0s; 
		-o-transition:all 300ms cubic-bezier(0.215, 0.61, 0.355, 1) 0s;
		color:#585858; 
	}
	#searchform input[type="text"]:hover, #searchform input[type="text"]:focus { width:200px; }
	#searchform input[type="submit"] { background:url(icon-search.png) center 11px no-repeat; cursor:pointer; margin:0px; padding:0px; width:37px; height:38px; line-height:38px; }
	
	input[type="submit"] { padding:4px 17px; color:#ffffcolor:#585858; ff; text-transform:uppercase; border:none; font-size:20px; background:url(gradient.png) bottom repeat-x; cursor:pointer; margin-top:10px; float:left; overflow:visible; transition: all .3s linear; -moz-transition: all .3s linear; -o-transition: all .3s linear; -webkit-transition: all .3s linear; }
	
	#searchform input[type="submit"]:hover { background-color:#333232; }
	.style_1 #searchform input[type='submit'] { background-color:#25ade4; }
	.style_1{ margin:10px; display:block; clear:both }
</style>

</head>

<body>

<div class="topbg">
<div class="top">
<div class="tople"><img src="__ROOT__/Home/Tpl/Public/images/logo5.jpg" border="0" alt="玩乐之约会" /></div>
<div class="tuoce">
<?php if($logIn == 'yes'): ?><img src="<?php echo (($userImage)?($userImage):'__PUBLIC__/images/tx.jpg'); ?>" id='user_img' style='max-widht:50px;max-height:50px;display:inline-block;float:left;margin-left:200px'/><span style='display:inline-block;width:50px;height:50px;line-height:60px;padding:0 7px;float:left;' id='user_name'><?php echo (($useName)?($useName):'默认用户名'); ?></span>
<?php else: ?>
<a href="__ROOT__/index.php/Index/index/na/login.html">登录</a>   |    <a href="__ROOT__/index.php/Index/index/na/register.html">注册</a><?php endif; ?>
<!-- <a href="__ROOT__/index.php/Index/index/na/login.html">登录</a>   |    <a href="__ROOT__/index.php/Index/index/na/register.html">注册</a>
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



</div>

</div>
</div>

<div class="clear"></div>


<div class="yhconbg">
<div class="yhcon">
<div class="yhle">


<div class="yhan" onmouseover="yhanhid('downzlmds1')" onmouseout="yhanhid2('downzlmds1')">
                <a  class="add" onclick="yhanhid('downzlmds1');">最浪漫的事</a>
                <div class="hix" id="downzlmds1" style=" display:none;">
                <?php echo ($content); ?>
               <!-- 我能想到最浪漫的事儿<br />就是和你一起慢慢变老<br />等到我们老的哪儿也去不了<br />你还依然，把我当成<br />手心里的宝！！！		 -->
         </div></div>
		 


<script>
function yhanhid(id){
 document.getElementById(id).style.display ='block';
}
function yhanhid2(id){
 document.getElementById(id).style.display ='none';
}
</script>




</div>


<div class="yhce">
<div class="one">
<div class="wd"><a href="__ROOT__/index.php/Index/index/na/yuehui.html"><img src="__ROOT__/Home/Tpl/Public/images/wd.png" border="0" /></a></div>
<?php if($logIn != 'yes'): ?><div class="cen">用户名：<?php echo (($useName)?($useName):'默认用户名'); ?> &nbsp;&nbsp;&nbsp;  浪漫<span id
='sweetDay'> <?php echo (($signCount)?($signCount):'200'); ?> 天<span></span></div><?php endif; ?>
<style type="text/css">
</style>
<script type="text/javascript">
    function getLocalhost(){
        var href=window.location.href;//href.substring(0,strlen-35
        var localhostPos=href.indexOf('index.php');//-26 显示完全是加上index.php的长度
        var localhost=href.substring(0,localhostPos+'index.php'.length);
        return localhost;
    }
    function signIn(){
        if ($('#user_name').text()) {
            alert('请登录');
        }else{
            var userName=$('#user_name').text();
            var localhost=getLocalhost();
            var goHref=localhost+'/Dating/signIn';//实现签到功能
            var sweetDay=$("#sweetDay").text();
            var signCount=parseInt(sweetDay)+1;
            $("#sweetDay").text(signCount);
            $.ajax({
                url:goHref,
                data:{user_name:userName,sign_count:signCount},
                success:function(){
                    // alert('yes');
                }
            });
            //增加浪漫天数
            
        }
    }
</script>
<div class="rig"><a href="javascript:signIn();" class="yhqd">签到</a></div>

</div>

<div id="zzsc">
<a class="pre"></a>
<div id="wai_box">
<div class="zzsc_box">

<ul class="bigImg">
    <li>
    <a href="javascript:" class="images">
    <img src="__ROOT__/Uploads/sweet_images/<?php echo (($sweetImageInfo[0]['path'])?($sweetImageInfo[0]['path']):'yuhui.jpg'); ?>" class='user_image' imageId="<?php echo ($sweetImageInfo[0]['id']); ?>"/>
    </a>
    <span class="title">已有<span class='bless_num'><?php echo (($sweetImageInfo[0]['approving_num'])?($sweetImageInfo[0]['approving_num']):'100'); ?></span>人祝福<span class="zf"><a href="/"><img src="__ROOT__/Home/Tpl/Public/images/zf.png" border="0" /></a></span></span>
    <div class="bt"><span class='sweet_words'><?php echo ($sweetImageInfo[0]['words']); ?></span></div>
    </li>
</ul>

<ul class="bigImg">
    <li>
    <a href="javascript:" class="images">
    <img src="__ROOT__/Uploads/sweet_images/<?php echo (($sweetImageInfo[1]['path'])?($sweetImageInfo[1]['path']):'yuhui.jpg'); ?>" class='user_image' imageId="<?php echo ($sweetImageInfo[1]['id']); ?>"/>
    </a>
    <span class="title">已有<span class='bless_num'><?php echo (($sweetImageInfo[1]['approving_num'])?($sweetImageInfo[1]['approving_num']):'100'); ?></span>人祝福<span class="zf"><a href="/"><img src="__ROOT__/Home/Tpl/Public/images/zf.png" border="0" /></a></span></span>
    <div class="bt"><span class='sweet_words'><?php echo ($sweetImageInfo[1]['words']); ?></span></div>
    </li>
</ul>
<ul class="bigImg">
    <li>
    <a href="javascript:" class="images">
    <img src="__ROOT__/Uploads/sweet_images/<?php echo (($sweetImageInfo[2]['path'])?($sweetImageInfo[2]['path']):'yuhui.jpg'); ?>" class='user_image' imageId="<?php echo ($sweetImageInfo[2]['id']); ?>"/>
    </a>
    <span class="title">已有<span class='bless_num'><?php echo (($sweetImageInfo[2]['approving_num'])?($sweetImageInfo[2]['approving_num']):'100'); ?></span>人祝福<span class="zf"><a href="/"><img src="__ROOT__/Home/Tpl/Public/images/zf.png" border="0" /></a></span></span>
    <div class="bt"><span class='sweet_words'><?php echo ($sweetImageInfo[2]['words']); ?></span></div>
    </li>
</ul>
<ul class="bigImg">
    <li>
    <a href="javascript:" class="images">
    <img src="__ROOT__/Uploads/sweet_images/<?php echo (($sweetImageInfo[3]['path'])?($sweetImageInfo[3]['path']):'yuhui.jpg'); ?>" class='user_image' imageId="<?php echo ($sweetImageInfo[3]['id']); ?>"/>
    </a>
    <span class="title">已有<span class='bless_num'><?php echo (($sweetImageInfo[3]['approving_num'])?($sweetImageInfo[3]['approving_num']):'100'); ?></span>人祝福<span class="zf"><a href="/"><img src="__ROOT__/Home/Tpl/Public/images/zf.png" border="0" /></a></span></span>
    <div class="bt"><span class='sweet_words'><?php echo ($sweetImageInfo[3]['words']); ?></span></div>
    </li>
</ul>


</div>
</div>
<a class="next"></a>
	
</div>
<script type="text/javascript">
function searchImages(){
    //根据用户名异步搜索,返回搜索结果（照片连接）
    var nameSearch=$('#s').val();
    if (nameSearch!='用户名搜索') {
        $("#searchform").ajaxSubmit({
            dataType:'json',
            // data:{name:nameSearch}
            success:function(data){
                var pathPre="__ROOT__/Uploads/sweet_images/";
                var dataLength=data.length;
                if (data.length) {
                    for (var i = 0; i < data.length; i++) {
                        /**
                         * 对相应的图片进行替换
                         */
                        $('.bigImg .user_image').eq(i).attr('src',pathPre+data[i]['path']);
                        $('.bigImg .bless_num').eq(i).text(data[i]['approving_num']);
                        $('.bigImg .sweet_words').eq(i).text(data[i]['words']);
                        $('.bigImg .user_image').eq(i).attr('imageId',data[i]['id']);
                        $('.bigImg').eq(i).attr('display','block');
                    };
                    for (var i = dataLength; i < 4; i++) {
                        $('.bigImg').eq(i).attr('display','none');
                    };
                    // document.getElementsByClassName()
                    // $('.bigImg1 .user_image').attr('src',pathPre+data[0]['path']);
                    // $('.bigImg1 .bless_num').text(data[0]['approving_num']);
                    // $('.bigImg1 .sweet_words').text(data[0]['words']);
                    // $('.')
                    // alert(data[0]['path']);
                }else{
                    alert('您搜索的用户不存在');
                }
                // alert(data);
            }
        });
    }else{
        alert('请输入要查找的用户');
    }
    return false;
}
</script>
<div style="margin:10px auto  20px; width:300px; height:50px;">
	
	<div class="style_1">
		<form method="get" id="searchform" action="<?php echo U('Dating/searchImage');?>" onsubmit='return searchImages();'>
			<fieldset>
			<input id="s" name="user_name" type="text" value="用户名搜索" class="text_input" onblur="if(this.value==''){this.value='用户名搜索';}" onfocus="if(this.value =='用户名搜索') {this.value=''; }" />
			<input name="submit" type="submit" value="GO" /> </fieldset>
		</form>
	</div>
	
</div>

<div class="zxsc">

<!-- <a href="/">  --><!-- <img src="__ROOT__/Home/Tpl/Public/images/zxsctp_03.jpg" class="img" /> --><!-- </a> -->
<!-- <a href="/">  --><!-- <img src="__ROOT__/Home/Tpl/Public/images/zxsctp_03.jpg" class="img" /> --><!-- </a> -->
<!-- <a href="/">  --><!-- <img src="__ROOT__/Home/Tpl/Public/images/zxsctp_03.jpg" class="img" /> --><!-- </a> -->
<!-- <a href="/">  --><!-- <img src="__ROOT__/Home/Tpl/Public/images/zxsctp_03.jpg" class="img" /> --><!-- </a> -->
<!-- <a href="/"> <img src="__ROOT__/Home/Tpl/Public/images/zxsctp_03.jpg" class="img" /></a>
<a href="/"> <img src="__ROOT__/Home/Tpl/Public/images/zxsctp_03.jpg" class="img" /></a> -->
</div>

<div class="fbxq">

<div class="srk">

<style>
.username { width:600px; height:50px; line-height:40px; background:#FFFFFF url("/article/upimages/ico_username.gif") 2px 2px no-repeat; padding-left:18px;BORDER-RIGHT: #E7AD01 1px solid; BORDER-TOP: #E7AD01 1px solid; FONT-SIZE: 13px; BORDER-LEFT: #E7AD01 1px solid; COLOR: #000000; BORDER-BOTTOM: #E7AD01 1px solid;  }  
.input{color:red}
.textarea{border:1px solid #333}
</style>

<input class="username" onmouseover="this.style.borderColor='#99E300'" onmouseout="this.style.borderColor='#A1BCA3'" maxLength="12" value="想说的话，限制在16个字内" name="UserName" id="words"></div>

<div class="srk">
<script type="text/javascript">
    /**
     * 实现文件上传时生成预览图
     */
    $(function() {
            $('[type=file]').change(function(e) {
                var file = e.target.files[0];
                // preview(file);
                var url= URL.createObjectURL(file);
                $("#previewImage").attr('src',url);
                $("#previewImage").attr('init','false');
            });
    })
    /**
     * 确认上传文件
     */
    function ajaxImageUpload(){
        //上传图片和图配文字
        $("#saveReportForm").ajaxSubmit({
            data:{words:$("#words").val()},
            success:function(data){
                if (data) {};
            }
        });
       return false;
       }
       function submit(){
        var imgNum=$('.zxsc .img').length;
        if ($("#previewImage").attr('init')!='true') {
            if (imgNum<4) {
                // var img = new Image(), url = img.src =$('#previewImage').attr('src');
                // img.css('width','100px');
                // img.css('height','80px');
                // var $img = $(img);
                // img.onload = function() {
                //     URL.revokeObjectURL(url);
                //     $('.zxsc').append($img);
                // }
                var appendImg=$("<img src='' class='img' style='margin-right:10px'/>");
                appendImg.attr('src',$('#previewImage').attr('src'));
                $('.zxsc').append(appendImg);
                document.getElementById('submit').click();
            }else{
                alert('照片数已经达到上限');
            }
        }else{
            alert('请选择图片');
        }
            //点击发送之后判断是否照片的个数小于等于4，上面出现应有照片
       }
       function chooseImage(){
        //验证用户是否登录了
            if (!$('user_name').text()) {
                alert('请登录');
            }else{
                 document.getElementById('file_upload').click();
            }
           
       }
</script>
<div class="xztp">
    <a href="javascript:chooseImage();">选择图片</a></div>
<div class="xztp">
<form enctype="multipart/form-data" id="saveReportForm" action="<?php echo U('Dating/uploadImage');?>" method="post" onsubmit="return ajaxImageUpload();" >
  <input type="file" id="file_upload" style="display:none" name="file_upload">
  <img src="__ROOT__/Home/Tpl/Public/images/zxsctp_03.jpg" class="img" id="previewImage" init='true'/></div><!--预览图-->
    <div class="fs">
        <a href="javascript:submit();" class="label label-success">发送</a>
        <input type="submit" style="display:none" id="submit">
    </div>
 </from>
</div>

</div>


</div>


<div class="yhri">


<div class="yhql" onmouseover="yhqlhid('downzlmql1')" onmouseout="yhqlhid2('downzlmql1')">
                <a  class="add" onclick="yhqlhid('downzlmql1');">最浪漫的情侣</a>
                <div class="hix" id="downzlmql1" style=" display:none;">
                <!--$sweetSignContent:-->
                <?php if(is_array($sweetSignInfo)): foreach($sweetSignInfo as $key=>$oneSweet): ?>用户名：<?php echo ($oneSweet['user_name']); ?><br />浪漫<?php echo ($oneSweet['sign_count']); ?>天，<?php echo ($oneSweet['approving_num']); ?>人祝福<br />
			   <!-- 用户名：Kate<br />浪漫222天，444人祝福<br />
			   用户名：Kate<br />浪漫222天，444人祝福<br />
			   用户名：Kate<br />浪漫222天，444人祝福<br />
			   用户名：Kate<br />浪漫222天，444人祝福<br />	 --><?php endforeach; endif; ?>
         </div></div>
		 


<script>
function yhqlhid(id){
 document.getElementById(id).style.display ='block';
}
function yhqlhid2(id){
 document.getElementById(id).style.display ='none';
}
</script>




</div>

</div>
<style type="text/css">
  .bottom{
    font-family: "microsoft yahei";
    font-size: 14px;
    height: 10px;
    margin:  auto 0;
    text-align: center;
    widows: 1200px;
    line-height: 0px;
  }
</style>
<div class="bottom">版权所有：玩乐之  &nbsp;&nbsp;&nbsp;&nbsp; 冀ICP15018589号-1</div>
</div>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<script type="text/javascript" src="js/jquery.min.js"></script>

<style type="text/css">
	table #top{
		display: inline-block;
		width:300px;
		margin-left: 30px;
	}
	table #del{
		width:0px;
	}
	table{
		font-family:微软雅黑;
		font-size: 12px;
		border-collapse: collapse;
		margin-top: 10px;
		margin-left: 50px;
	}
	table textarea{
		display: block;
		/*margin-left: 30px;*/
	}
	table label {
		/*margin-left: 20px;*/
	}
	table span{
		font-size: 18px;
		color:#2B2B2B;
		border:1px #2B2B2B solid;
		display: block;
		width:100px;
		margin-left: 150px;
		text-align: center;
		border-top:0px;
		background: #EB8F56;
	}
	table td{
		margin-left: 10px;
		padding: 0 10px;
		padding-bottom: 10px;
		border:1px #2B2B2B solid;
	}
	#submit{
		display: block;
		margin:0 auto;
		background: #EB8F56;
		cursor: pointer;
		border:0px;
		height: 30px;
		line-height: 30px;
		margin-top: 10px;
	}
</style>
<script type="text/javascript">
	function checkInput(x){
		var area=x.area.value;
		var demo=x.demo.value;
		var picture=x.picture.value;//name of the picture
		var topic=x.topic.value;
		var description=x.description.value;
		var del=x.del.value;
		if (!picture&&!topic&&!description) {
			alert('图片、话题、描述三者至少选择一个');
			return false;
		}
		var dot_index=picture.indexOf('.');
		var file_type=picture.substring(dot_index+1);
		if (file_type!='jpg'&&file_type!='png'&&file_type!='jif'&&file_type!='jpeg') {
			alert("您上传的图片格式为"+file_type+'\n请上传jpg、gif、png、jpeg格式的图片');
			return false;
		};
		var area_string="1. 板块：第"+area+'组，第'+demo+'个\n';
		var pic_string=picture?'2. 图片:'+picture+'\n':'2. 图片：未选择\n';
		var topic_string=topic?'3. 主题更改为：'+topic+'\n':'3. 主题：未更改\n';
		var desc_string=description?'4. 主题描述为：'+description.substring(0,20)+'...'+'\n':'4. 主题描述：为更改\n';
		var del_string=del?'5. 不更换主题，评论依然会保留\n':'5. 您选择了更换主题，评论将不会保留\n';
		var confirm_string='请确认以下信息：\n'+area_string+pic_string+topic_string+desc_string+del_string+'确认提交？';//+topic_string
		return confirm(confirm_string);
		// return false;
	}
</script>
</head>
<body>
<form action="__ROOT__/admin.php/FreeLunch/saveDemo" method="post" enctype="multipart/form-data" name='freeLunch' onsubmit="return checkInput(this);">
	<table border="1px solie black">
	        <tr>
	        	<td>请选择第几组：</td><td>
					<label><input type="radio" name="area" value="1" checked="checked" />1 </label>
					<label><input type="radio" name="area" value="2"/>2 </label>
					<label><input type="radio" name="area" value="3"/>3 </label>
				</td>
			<tr>
			<tr>
				<td>请选择第几块区域：</td><td>
					<label><input type="radio" name="demo" value="1" checked="checked"/>1 </label>
					<label><input type="radio" name="demo" value="2"/>2 </label> 
					<label><input type="radio" name="demo" value="3"/>3 </label> 
					<label><input type="radio" name="demo" value="4"/>4 </label> 
					<label><input type="radio" name="demo" value="5"/>5 </label> 
					<label><input type="radio" name="demo" value="6"/>6 </label> 
					<label><input type="radio" name="demo" value="7"/>7 </label>
					<label><input type="radio" name="demo" value="8"/>8 </label> 
					<label><input type="radio" name="demo" value="9"/>9 </label> 
					<label><input type="radio" name="demo" value="10"/>10 </label>

				</td>
			</tr>
			<tr><td>选择图片：</td><td><input type="file" name="picture" id="file"><font style='color:red'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注：图片支持格式&nbsp;jpg、gif、png、jpeg</font></td></tr>
			<tr><td>话题：</td><td><input type="text" name="topic" value="" id='top'></td></tr>
			<tr><td>是否是新话题：</td>
				<td>
				<label for="del1"><input type="radio" name="del" id="del1" value="1">是</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label for="del0"><input type="radio" name="del" id="del0" value="0" checked="checked">否</label><font style='color:red'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注：如选择新话题则会删除前一个话题对应的评论</font></td></tr>
			<tr>
				<td>描述</td>
				<td>
					<textarea name="description"  cols="50" rows="4" id="desc"></textarea>
					<script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
					<script type="text/javascript">
						CKEDITOR.replace('description');
					</script>
				</td>
			</tr>
			<tr><td colspan="2"><input type="submit" value="提交" style='width:300px' id='submit'></td></tr>
			<tr><td colspan="2">注：1.当选择了替换新主题，相应的板块将被替换，相对于前一个主题的评论将被删除<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.若未选择替换主题，相应的板块内容只是被替换，相关评论将会继续保留下来</td></tr>
	</table>
	
</form>
</body>
</html>
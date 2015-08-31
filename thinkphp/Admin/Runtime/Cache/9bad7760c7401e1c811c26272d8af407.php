<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<style type="text/css">
	table{
		border-collapse: collapse;
	}
	th,td{
		border:1px #25A1EB solid;
		padding: 5px 10px;
	}
</style>
</head>
<body>
<form action="__ROOT__/admin.php/Dream/saveDream" method="post" enctype="multipart/form-data">
<table border="1px solie black">
    <th colspan="3" align="center">一张图片、一组文字</th>
    <tr>
    	<td>请上传图片</td>
    	<td style="color:red;font-size:12px"><input type="file" name="image" id="file" required/>注：图片支持格式：jpg、gif、png、jpeg格式</td>
    </tr>
    <tr>
    <td>请填写主题</td>
    	<td><input type="text" name="topic" required style="width:500px" />
        </td>
    </tr>
    <tr><td colspan="3" align="center"><input type="submit" name="submit" value="提交" style="width:200px"></td></tr>
</table>
</form>
</body>
</html>
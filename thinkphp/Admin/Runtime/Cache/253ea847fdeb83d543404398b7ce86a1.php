<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title>玩乐之首页编辑</title>
</head>
<body>
<form action="__ROOT__/admin.php/Redirect/imedit1" method="post" enctype="multipart/form-data" onsubmit="return check(this)">
<table border="1px solie black">

	<th colspan="3" align="center">五张轮播图和五组文字的替换</th>
	<tr>
		<td >
			<input type="file" name="file[]" id="file" />
		</td>
		<td><input type="text" name="name1" value="免" /></td>
		<td><input type='text' name='words1'</td>
	</tr>	
	<tr>	
		<td>
			<input type="file" name="file[]" id="file" />
		</td>
		<td><input type="text" name="name2" value="梦" /></td>
		<td><input type='text' name='words2'</td>
	</tr>	
	<tr>	
		<td>
			<input type="file" name="file[]" id="file" />
		</td>
		<td><input type="text" name="name3" value="智" /></td>
		<td><input type='text' name='words3'</td>
	</tr>	
	<tr>	
		<td>
			<input type="file" name="file[]" id="file" />
		</td>
		<td><input type="text" name="name4" value="约" /></td>
		<td><input type='text' name='words4'</td>
	</tr>
	<tr>
		<td >
			<input type="file" name="file[]" id="file" />
		</td>
		<td><input type="text" name="name5" value="影" /></td>
		<td><input type='text' name='words5'</td>
	</tr>
	<tr><td colspan="3" align="center"><input type="submit" name="submit" value="提交"></td></tr>
</table>
</form>
</body>
</html>
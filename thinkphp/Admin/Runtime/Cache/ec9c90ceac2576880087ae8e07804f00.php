<?php if (!defined('THINK_PATH')) exit();?><html>

<head>

<title></title>

<head>

<body>

<form action="policlinic.php" method="post" enctype="multipart/form-data" onsubmit="return check(this)">

第几个模块？<br /><br /> 

<label><input type="radio" name="area" value="qxq" checked/>关于免单 </label>

<label><input type="radio" name="area" value="xhq"/>关于梦想 </label> 

<label><input type="radio" name="area" value="yhq"/>关于约会 </label> 

<label><input type="radio" name="area" value="caq"/>关于智商 </label> 

<label><input type="radio" name="area" value="kfq"/>关于摄影</label> 

<table>

	<th colspan="3" align="center">每个模块中的内容</th>

	<tr>
		<td><input type="text" name="name1" value="1-1" /></td>
		<td><input type="text" name="name2" value="1-2" /></td>
		<td><input type="text" name="name3" value="1-3" /></td>
		<td><input type="text" name="name4" value="1-4" /></td>
		<td><input type="text" name="name5" value="1-5" /></td>
	</tr>	
	<tr>
		<td><input type="text" name="name1" value="2-1" /></td>
		<td><input type="text" name="name2" value="2-2" /></td>
		<td><input type="text" name="name3" value="2-3" /></td>
		<td><input type="text" name="name4" value="2-4" /></td>
		<td><input type="text" name="name5" value="2-5" /></td>
	</tr>	
	<tr>
		<td><input type="text" name="name1" value="3-1" /></td>
		<td><input type="text" name="name2" value="3-2" /></td>
		<td><input type="text" name="name3" value="3-3" /></td>
		<td><input type="text" name="name4" value="3-4" /></td>
		<td><input type="text" name="name5" value="3-5" /></td>
	</tr>	
	<tr>
		<td><input type="text" name="name1" value="4-1" /></td>
		<td><input type="text" name="name2" value="4-2" /></td>
		<td><input type="text" name="name3" value="4-3" /></td>
		<td><input type="text" name="name4" value="4-4" /></td>
		<td><input type="text" name="name5" value="4-5" /></td>
	</tr>	
	<tr>
		<td><input type="text" name="name1" value="5-1" /></td>
		<td><input type="text" name="name2" value="5-2" /></td>
		<td><input type="text" name="name3" value="5-3" /></td>
		<td><input type="text" name="name4" value="5-4" /></td>
		<td><input type="text" name="name5" value="5-5" /></td>
	</tr>	

	<tr><td colspan="3" align="center"><input type="submit" name="submit" value="提交"></td></tr>

</table>

</form>



</body>

</html>
<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
</head>
<body>
<form action="__ROOT__/admin.php/Redirect/imedit2" method="post" enctype="multipart/form-data" onsubmit="return check(this)">
第几组轮播？<br /><br /> 

<label><input type="radio" name="area" value="first" checked/>第一组 </label>

<label><input type="radio" name="area" value="second"/>第二组 </label> 

<label><input type="radio" name="area" value="third"/>第三组 </label> 
<table border="1px solid black">
    <th colspan="3" align="center">三十张图片的替换</th>
    <tr>
        <td >
            <input type="file" name="file[]" id="file" />
        </td>
        <td >
            <input type="file" name="file[]" id="file" />
        </td>
    </tr>   
    <tr>    
        <td>
            <input type="file" name="file[]" id="file" />
        </td>
        <td >
            <input type="file" name="file[]" id="file" />
        </td>
    </tr>   
    <tr>    
        <td>
            <input type="file" name="file[]" id="file" />
        </td>
        <td >
            <input type="file" name="file[]" id="file" />
        </td>
    </tr>   
    <tr>    
        <td>
            <input type="file" name="file[]" id="file" />
        </td>
        <td >
            <input type="file" name="file[]" id="file" />
        </td>
    </tr>
    <tr>
        <td >
            <input type="file" name="file[]" id="file" />
        </td>
        <td >
            <input type="file" name="file[]" id="file" />
        </td>
    </tr>
   
    <tr><td colspan="3" align="center"><input type="submit" name="submit" value="提交"></td></tr>
</table>
</form>
</body>
</html>
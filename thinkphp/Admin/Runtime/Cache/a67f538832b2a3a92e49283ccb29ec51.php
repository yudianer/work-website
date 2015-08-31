<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
</head>
<body>
<form action="__ROOT__/admin.php/Wisdom/saveData" method="post" enctype="multipart/form-data">
<style type="text/css">
    table{
        border-collapse: collapse;
    }
    th,td{
        border:1px #25A1EB solid;
        padding: 5px 10px;
    }
</style>
<table border="1px solie black">
    <tr><td>请选择上传的图片</td>
        <td style="color:red;font-size:12px">
        <input type="file" name="image" id="file"/>注：图片支持格式：jpg、gif、png、jpeg格式</td>
        </tr>
        <tr><td>第一个主题</td> <td><input type="text" name="topic1"required/></td></tr>
        <tr><td>第二个主题</td> <td><input type="text" name="topic2"required/></td></tr>
        <tr><td>请设置题目</td> <td><input type="text" name="question"required/></td></tr>
        <tr><td>选项</td>
            <td><input type="text" name="choice[]"  required/>
            <input type="text" name="choice[]"required/>
            <input type="text" name="choice[]" required/>
            <input type="text" name="choice[]" required/></td></tr>
        <tr><td>正确选项</td>
        <td>
            <label for="anserA"><input type="radio" name="anser" id="anserA" value="0" checked="">A</label>
            <label for="anserB"><input type="radio" name="anser" id="anserB" value="1">B</label>
            <label for="anserC"><input type="radio" name="anser" id="anserC" value="2">C</label>
            <label for="anserD"><input type="radio" name="anser" id="anserD" value="3">D</label>
        </td></tr>
    <tr><td colspan="3" align="center"><input type="submit" name="submit" value="提交" style="width:300px"></td></tr>
</table>
</form>
</body>
</html>
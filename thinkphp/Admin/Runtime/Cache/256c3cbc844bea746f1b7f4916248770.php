<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>约会版块</title>
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
    <!--可以添加左侧：最浪漫的事-->
    <form action="__ROOT__/admin.php/Romantic/saveData" method="post">
        <table>
            <tr><td>最浪漫的事：</td>
            <td><textarea name="romantic" cols="80" rows="5"></textarea></td></tr>
            <tr><td colspan="2"><input type="submit" value="提交" style="width:200px"></td></tr>
        </table>
    </form>
    
</body>
</html>
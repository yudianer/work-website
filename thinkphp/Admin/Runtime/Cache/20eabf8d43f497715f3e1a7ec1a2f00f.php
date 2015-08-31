<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>点赞网站</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="__TMPL__Public/css/style.css" rel="stylesheet" type="text/css">
<script src="__TMPL__Public/js/main.js" type="text/javascript"></script>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" scroll="no">
<form action="__APP__/Confirm/login"> 
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="100%" align="center" bgcolor="#e3efff">
    <table width="762" height="435" border="0" cellpadding="0" cellspacing="0" background="__TMPL__Public/images/loginBg.png">
      <tr>
        <td><table border="0" align="center" cellpadding="0" cellspacing="7">
          <tr>
            <td>用户名：</td>
            <td><input name="name" type="text" class="inputbox" style="width:160px;hight:20px"><font color="red">&nbsp;<?php echo ($name_wrong); ?></font></td>
            </tr>
          <tr>
            <td>密码：</td>
            <td><input name="pwd" type="password" class="inputbox" style="width:160px;hight:20px"><font color="red">&nbsp;<?php echo ($pwd_wrong); ?></font></td>
            </tr>
          <tr>
            <td height="100" colspan="2" valign="top"><table border="0" align="center" cellpadding="0" cellspacing="5">
              <tr>
                <td align="center"><BUTTON style="HEIGHT:25px"> 登录</BUTTON></td>
                <td align="center"><input type="reset" value="重置" style="HEIGHT:25px"></td>
                </tr>
            </table></td>
            </tr>
          </table></td>
        </tr>
    </table></td>
  </tr>
</table>
</form>
</body>
</html>
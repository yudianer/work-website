<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING'  =>array(
     '__PUBLIC__' => 'thinkphp/Admin/Tpl/Public/', 
     '__JS__' => 'thinkphp/Admin/Tpl/Public/JS/',
     '__UPLOAD__' => '/Uploads',
),
	'TMPL_L_DELIM'=>'<{', //修改左定界符
	'TMPL_R_DELIM'=>'}>', //修改右定界符
	'DB_TYPE' => 'mysql', //设置数据库类型
	'DB_HOST' => 'localhost', //设置主机
	'DB_NAME' => 'thinkphp', //设置数据库名
	'DB_USER' => 'root', //设置用户名
	'DB_PWD' => 'root', //设置密码
	'DB_PORT' => '3306', //设置端口号
	'DB_PREFIX' => '', //设置表前缀 
	'SHOW_PAGE_TRACE' => 'true',

);
?>
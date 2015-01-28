<?php
return array(
	//数据库连接
	'DB_HOST' => '127.0.0.1',
	'DB_USER' => 'root',
	'DB_PWD' => '',
	'DB_NAME' => 'thinkphp',
	'DB_PREFIX' => 'hd_',
	//'配置项'=>'配置值'
	'TMPL_TEMPLATE_SUFFIX' => '.htm',//更改默认模板后缀为.htm
	'URL_HTML_SUFFIX' => '.html',//指定默认网页后缀
	'URL_MODEL' => 1,//设置url模式为PATHINFO,也是默认模式
	'DEFAULT_FILTER' => 'htmlspecialchars'//设置过滤html字符
);
?>
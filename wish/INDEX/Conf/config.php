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
		//点语法默认解析
	'TMPL_VAR_IDENTIFY' => 'array',
	//模板路径
	'TEMP_FILE_DEPR' =>'_',
	//'DEFAULT_FILTER' => 'htmlspecialchars',//设置过滤html字符。此版本和后续版本已经默认为此设置了
	'TMPL_EXCEPTION_FILE' => './Public/Tpl/error.html'//自定义错误页，放在Index文件夹下没有用
	);
?>

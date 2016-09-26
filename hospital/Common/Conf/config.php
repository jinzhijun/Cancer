<?php
return array(
	//'配置项'=>'配置值'
	
	 //页面底部追踪信息显示
	'SHOW_PAGE_TRACE' =>  TRUE, 

	//默认分组信息
	'DEFAULT_MODULE'        =>  'Home',  // 默认模块
	'MOUDLE_ALLOW_LIST'     =>array('HOME','Admin'), //定义可供访问的分组列表
		
	//Smarty模板引擎切换
	'TMPL_ENGINE_TYPE'      =>  'Smarty', //默认模板引擎   
	
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'cancer',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'dxzs1991220',          // 密码
    'DB_PORT'               =>  '',        // 端口  默认3306
    'DB_PREFIX'             =>  'sw_',    // 数据库表前缀
    'DB_FIELDTYPE_CHECK'    =>  false,       // 是否进行字段类型检查
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
);
<?php
return array(
	//'配置项'=>'配置值'
    // 'URL_MODEL' => 2,
    //配置全局调试页面
    // 'SHOW_PAGE_TRACE' =>true,
    'MODULE_ALLOW_LIST' => array('Home','Admin'),//设置可访问模块
    'DEFAULT_MODULE' => 'Home', // 默认模块，可以省去模块名输入

    //数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'thinkphp_blog', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '', // 密码
    'DB_PORT'   => 3306, // 端口
);

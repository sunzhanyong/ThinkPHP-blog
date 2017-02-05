<?php
return array(
    //配置全局模板定义
    'LAYOUT_ON'=>true,
    'LAYOUT_NAME'=>'layout',

    'URL_ROUTER_ON'         =>  true,                           // 开启路由
    'URL_ROUTE_RULES'       =>  array(
        'articles' =>'Index/article', //首页文章路由
        'about' =>'Index/about', //首页关于路由
        'contact' =>'Index/contact', //首页留言路由
        'article/:id\d' =>'Article/index', //文章路由
        'cate/:id\d' => 'Cate/index' //分类路由
        ),
);
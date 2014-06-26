<?php
if (!defined('THINK_PATH'))	exit();

$conifg_file = "config.inc.php" ;
$config = file_exists($conifg_file) ? include($conifg_file) : array() ;

$sysConfig =  array(
     // [SYSTEM CONFIG]
    'VAR_MODULE'            =>  'app',    // 默认模块获取变量
    'VAR_CONTROLLER'        =>  'mod',    // 默认控制器获取变量
    'VAR_ACTION'            =>  'act',    // 默认操作获取变量
    'SHOW_PAGE_TRACE'       => true,      /* 调试配置 */
    'DATA_AUTH_KEY'         => 'think',   //默认数据加密KEY
    
     // [COOKIES CONFIG]
    'COOKIE_EXPIRE'         =>  0,       // Cookie有效期
    'COOKIE_DOMAIN'         =>  '',      // Cookie有效域名
    'COOKIE_PATH'           =>  '/',     // Cookie路径
    'COOKIE_PREFIX'         =>  'askcms_',      // Cookie前缀 避免冲突
    
    
    // [TPL CONFIG]
    'TMPL_DENY_FUNC_LIST'   => 'exit' ,   // 模板引擎禁用函数'echo,exit',  
    'TMPL_STRIP_SPACE'      =>  false,    // 是否去除模板文件里面的html空格与换行
    
    // [URL CONFIG]
    'URL_CASE_INSENSITIVE'  =>  true,    // 默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_MODEL'             =>  0,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式： 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
    'URL_404_REDIRECT'      =>  '404.html', // 404 跳转页面 部署模式有效
    'URL_ROUTER_ON'         =>  false,   // 是否开启URL路由
    'URL_ROUTE_RULES'       =>  array(), // 默认路由规则 针对模块
    'URL_MAP_RULES'         =>  array(), // URL映射定义规则
    
    // [ Lang ]
    'LANG_SWITCH_ON'   => true,         // 开启语言包功能
    'LANG_AUTO_DETECT' => true,         // 自动侦测语言 开启多语言功能后有效
    'LANG_LIST'        => 'zh-cn,en',   // 允许切换的语言列表 用逗号分隔 en,zh-cn,zh-tw
    'VAR_LANGUAGE'     => 'l',          // 默认语言切换变量
    
    // [ Tpl ]
    'EXT_TMPL_ON'         => true ,     //开启自定义模板配置
    'EXT_TMPL_PATH'         => 'Template' , //配置自定义模板目录
    
    'TMPL_DETECT_THEME'=>true,          //开启自动侦测模板
    'DEFAULT_THEME' => 'default',       //默认模板文件夹
    'THEME_LIST' =>'default,red,blue',  //模板列表
    
    // []
//    'AUTOLOAD_NAMESPACE' => array(    
//        'Extend'     => THINK_PATH.'Extend',   
//        
//      ),
    
);

return array_merge($sysConfig,$config);
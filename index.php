<?php
// +----------------------------------------------------------------------
// | AskCms 
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.askcms.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 百变的石头 tj.youxiang.2008@163.com
// +----------------------------------------------------------------------

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

/**
 * 定义应用目录
 * 此目录为应用目录，不可删除
 */
define('APP_PATH','./Apps/');


/**
 * 缓存目录设置
 * 此目录必须可写，建议移动到非WEB目录
 */
define ( 'RUNTIME_PATH', './_RunCache/' );


// 引入ThinkPHP入口文件
require './Core/ThinkPHP/ThinkPHP.php';

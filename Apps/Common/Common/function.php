<?php
// +----------------------------------------------------------------------
// | AskCms 
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.askcms.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 百变的石头 tj.youxiang.2008@163.com
// +----------------------------------------------------------------------






/**
 +----------------------------------------------------------
 * 实例化一个扩展 服务
 +----------------------------------------------------------
 * @param string name 服务名称
 * @param array  params 实例化需要的参数
 * @param bool  Path 是否调用APP目录服务
 +----------------------------------------------------------
 * @return Object
 +----------------------------------------------------------
 */
function service($name,$Path = '',$params=array()) {
    if(empty($name)) throw_exception(L('_CLASS_NOT_EXIST_') );
   
    static $_service  =   array();
    $layer          =  empty($Path) ? 'Service' : 'Service\\'.$Path;
    
    if(isset($_service[$name.$layer]))
        return $_service[$name.$layer];
    $class          =   ext_parse_name($name,$layer);
    
    if(count(explode('\\',$layer)) > 1  ){
        list($layer,$subPath) = explode('\\',$layer) ;
        $subPath .= '\\';
    }
    
    if(class_exists($class)) {
        $model      =   new $class(basename($name));
    }elseif(false === strpos($name,'/')){
        // 自动加载公共模块下面的模型
        if(!C('APP_USE_NAMESPACE')){
            import('Common/'.$layer.'/'.$class);
        }else{
            $class      =   '\\Common\\'.$layer.'\\'.$name.$layer;
        }
        
        $model      =   class_exists($class)? new $class($name) : throw_exception(L('_CLASS_NOT_EXIST_').':'.$class) ;
    }else {
        Think\Log::record('Service方法实例化没找到模型类'.$class,Think\Log::NOTICE);
        $model      =   new Think\Model(basename($name));
        
    }
    $_service[$name.$layer]  =  $model;
    return $model;
}

/**
 * 解析资源地址并导入类库文件
 * 例如 module/controller addon://module/behavior
 * @param string $name 资源地址 格式：[扩展://][模块/]资源名
 * @param string $layer 分层名称
 * @return string
 */
function ext_parse_name($name,$layer,$level=1){
   
    if(strpos($name,'/') && substr_count($name, '/')>=$level){ // 指定模块
        list($module,$name) =  explode('/',$name,2);
    }else{
        $module =   MODULE_NAME;
    }
    
    $subPath = '';
    if(count(explode('\\',$layer)) > 1  ){
        list($layer,$subPath) = explode('\\',$layer) ;
        $subPath .= '\\';
    }
   
    
    $array  =   explode('/',$name);
    if(!C('APP_USE_NAMESPACE')){
        $class  =   parse_name($name, 1);
        $subPath = str_replace('\\', '/', $subPath);
        import($module.'/'.$layer.'/'.$subPath.$class.$layer);
    }else{
        $class  =   $module.'\\'.$layer. '\\'.$subPath ;
        foreach($array as $name){
            $class  .=   parse_name($name, 1);
        }
        
    }
    return $class.$layer;
}

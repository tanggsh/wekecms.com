<?php
// +----------------------------------------------------------------------
// | AskCms 
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.askcms.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 百变的石头 tj.youxiang.2008@163.com
// +----------------------------------------------------------------------
namespace Common\Service;
use Think\Think;

abstract class Services extends Think{
    
    
    
    abstract public function run($params);


}


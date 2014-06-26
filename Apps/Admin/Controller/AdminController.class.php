<?php
// +----------------------------------------------------------------------
// | AskCms 
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.askcms.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 百变的石头 tj.youxiang.2008@163.com
// +----------------------------------------------------------------------

namespace Admin\Controller;
use Think\Controller;
use Think\Services;

class AdminController extends Controller {
    public $mid = 0 ;
    protected $isAdmin = false ;
    protected $adminGroup = array();
    
    /**
     * 后台权限初始化
     * 检测登陆用户，并判断用户权限；
     */
    protected function _initialize(){
        service('Common/Login','Base');
    }
    
    public function  index(){
        $this->display();
    }

    



    protected function checkLogin(){
//        service($name);
        B('CheckLogin');
    }
    
    
    
    
    
}
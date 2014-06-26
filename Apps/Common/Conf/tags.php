<?php
return array(
	// 添加下面一行定义即可     
        'app_begin' => array(
            'Behavior\CheckLangBehavior' , //检测多语言，需要config
        ),
        'view_begin'      =>  array(
            'Common\Behavior\InitThemeBehavior', //初始化模板，需要config
        ),
//        'view_end'      =>  array(
//            
//        ),
);
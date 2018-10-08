<?php
/**
 * Created by PhpStorm.
 * User: by mengjuncheng
 * Date: 2018/10/8
 * Time: 14:45
 */
class IndexController extends _BaseController {
    public function indexAction() {
        //读取配置文件
        $config = Yaf_Application::app()->getConfig();
        //打印配置信息
        echo '<pre>';
        print_r($config);
        echo '</pre>';
    }
}
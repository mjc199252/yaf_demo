<?php
/**
 * Created by PhpStorm.
 * User: by mengjuncheng
 * Date: 2018/10/8
 * Time: 16:21
 */

class Bootstrap extends Yaf_Bootstrap_Abstract {
    private $_config;

//    public function _initPlugin(Yaf_Dispatcher $dispatcher) {
//        //加载plugin下面的User.php插件
//        $user = new UserPlugin();
//        $dispatcher->registerPlugin($user);
//    }
//
    public function _initConfig() {
        $config = Yaf_Application::app()->getConfig();
        Yaf_Registry::set("config", $config);
    }

    public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        echo "在路由出发之前";
    }
}
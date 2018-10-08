<?php
/**
 * Created by PhpStorm.
 * User: by mengjuncheng
 * Date: 2018/10/8
 * Time: 14:14
 */

define("APP_PATH",  realpath(dirname(__FILE__) . '/../'));
$app  = new Yaf_Application(APP_PATH . "/conf/app.ini");
$app->bootstrap()->run();

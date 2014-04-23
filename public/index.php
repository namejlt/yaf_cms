<?php
/**
 * @file index.php
 * in point
 * @author: dalong.jia
 * @date: 14-3-31
 * @time: 下午5:51
 */

define('APP_PATH', realpath(dirname(__FILE__) . '/../'));
define('LIB_PATH', APP_PATH . '/library');
$app = new Yaf_Application(APP_PATH . '/conf/application.ini', 'develop');
$app->bootstrap()
    ->run();
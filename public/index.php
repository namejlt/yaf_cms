<?php
/**
 * 入口页
 */
ob_start();
session_start();
require getenv('ENV_PATH');
date_default_timezone_set('Asia/Shanghai');

define('ROOT_PATH', realpath(dirname(__FILE__) . '/../'));
define('APP_PATH', ROOT_PATH . '/application');
define('LIB_PATH', ROOT_PATH . '/library');
define('DXL_LIB_PATH', realpath(ROOT_PATH . '/../library'));
define('CONFIG_PATH', ROOT_PATH . '/configs');
define('LIB_CONFIG_PATH', DXL_LIB_PATH . '/Configs');
ini_set('yaf.library', DXL_LIB_PATH);

set_include_path(implode(PATH_SEPARATOR, array(
    LIB_PATH,
    DXL_LIB_PATH,
    get_include_path(),
)));

$app = new Yaf_Application(CONFIG_PATH . '/application.ini');
$app->bootstrap()
    ->run();
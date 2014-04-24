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
define('DXL_LIB_PATH', realpath(APP_PATH . '/../library'));
ini_set('yaf.library', DXL_LIB_PATH);

set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, array(
        LIB_PATH, DXL_LIB_PATH
    )));

$app = new Yaf_Application(APP_PATH . '/conf/application.ini', 'develop');
$app->bootstrap()
    ->run();
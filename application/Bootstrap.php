<?php
/**
 * @file Bootstrap.php
 * 此脚本页面的用途
 * @author: dalong.jia
 * @date: 14-4-1
 * @time: 上午11:27
 */
/**
 * 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends Yaf_Bootstrap_Abstract{

    private $_config;

    public function _initConfig() {
        $config = Yaf_Application::app()->getConfig();
        $this->_config = $config;
    }

    public function _initIncludePath(){
        set_include_path(get_include_path() . PATH_SEPARATOR . $this->_config->application->library);
    }

    public function _initErrors(){
        if($this->_config->application->showErrors){
            error_reporting (-1);
            ini_set('display_errors','On');
        }
    }

    public function _initNamespaces(){
        Yaf_Loader::getInstance()->registerLocalNameSpace($this->_config->library->namespace->toArray());
    }

    public function _initPlugin(Yaf_Dispatcher $dispatcher){
        //$plugin = new TestPlugin();

        //$dispatcher->registerPlugin($plugin);
    }

    public function _initDefaultDbAdapter() {
        $db_config = $this->_config->database->toArray();
        $params = array (
            'host'     => $db_config['params']['host'],
            'username' => $db_config['params']['username'],
            'password' => $db_config['params']['password'],
            'dbname'   => $db_config['params']['dbname']
        );
        $db = Zend_Db::factory($db_config['adapter'], $params);
        Zend_Db_Table::setDefaultAdapter($db);
    }


}
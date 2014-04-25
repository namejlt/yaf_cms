<?php
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

    public function _initErrors(){
        if($this->_config->application->showErrors){
            error_reporting (-1);
            ini_set('display_errors','On');
        } else {
            error_reporting (0);
            ini_set('display_errors','Off');
        }
    }

    public function _initNamespaces(){
        Yaf_Loader::getInstance()->registerLocalNameSpace($this->_config->local_lib->namespace->toArray());
    }

    public function _initPlugin(Yaf_Dispatcher $dispatcher){
        $viewPlugin = new ViewPlugin();
        $dispatcher->registerPlugin($viewPlugin);
    }

    public function _initView(Yaf_Dispatcher $dispatcher) {
        $smarty = new Smarty_Adapter(null, $this->_config->smarty);
        $smarty->registerFunction('function', 'truncate', array('common_string', 'truncate'));
        $dispatcher->setView($smarty);
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
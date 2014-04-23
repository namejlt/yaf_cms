<?php
class TestPlugin extends Yaf_Plugin_Abstract {
    private $_data;

    public function __construct() {
        $this->_data = ' this is a test plugin ';
    }

    public function dispatchLoopShutdown ( Yaf_Request_Abstract $request , Yaf_Response_Abstract $response ){
        echo $this->_data . ' dispatchLoopShutdown ' . '<br/>';
    }

    public function dispatchLoopStartup ( Yaf_Request_Abstract $request , Yaf_Response_Abstract $response ){
        echo $this->_data . ' dispatchLoopStartup ' . '<br/>';
    }

    public function postDispatch ( Yaf_Request_Abstract $request , Yaf_Response_Abstract $response ){
        echo $this->_data . ' postDispatch ' . '<br/>';
    }

    public function preDispatch ( Yaf_Request_Abstract $request , Yaf_Response_Abstract $response ){
        echo $this->_data . ' preDispatch ' . '<br/>';
    }

    public function preResponse ( Yaf_Request_Abstract $request , Yaf_Response_Abstract $response ){
        echo $this->_data . ' preResponse ' . '<br/>';
    }

    public function routerShutdown ( Yaf_Request_Abstract $request , Yaf_Response_Abstract $response ){
        echo $this->_data . ' routerShutdown ' . '<br/>';
    }

    public function routerStartup ( Yaf_Request_Abstract $request , Yaf_Response_Abstract $response ){
        echo $this->_data . ' routerStartup ' . '<br/>';
    }
}
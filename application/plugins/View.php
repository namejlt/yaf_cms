<?php
/**
 * Class ViewPlugin
 * 设置模板引擎变量
 */
class ViewPlugin extends Yaf_Plugin_Abstract {

    public function preDispatch ( Yaf_Request_Abstract $request , Yaf_Response_Abstract $response ){
        $module = $request->getModuleName();
        if ($module === 'Index') {
            Yaf_Application::app()->getDispatcher()->initView('')->setScriptPath(APP_PATH . '/views');
        } else {
            Yaf_Application::app()->getDispatcher()->initView('')->setScriptPath(APP_PATH . '/modules/' . $module . '/views');
        }
    }
}
<?php
class ErrorController extends Yaf_Controller_Abstract {

    private $_config;

    public function init(){
        $this->_config = Yaf_Application::app()->getConfig();
    }

    public function errorAction() {
        $exception = $this->getRequest()->getException();
        $showErrors = $this->_config->application->showErrors;
        if ($showErrors) {
            return $this->_showError($exception);
        }
    
        switch(true):
            case ($exception instanceof Yaf_Exception_LoadFailed):
                return $this->_pageNotFound();
            default:
                return $this->_unknownError();
        endswitch;
    }

    private function _pageNotFound(){
        $this->_view->error = '404 Page was not found';
    }

    private function _unknownError(){
        $this->_view->error = '500 Application Error';
    }

    private function _showError($exception) {
        var_dump($exception);
    }
    
}

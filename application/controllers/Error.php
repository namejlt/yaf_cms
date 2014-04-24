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
        $this->getResponse()->setHeader(404, 'HTTP/1.0 404 Not Found');
        $this->_view->error = 'Page was not found';
    }

    private function _unknownError(){
        $this->getResponse()->setHeader(500, 'HTTP/1.0 500 Internal Server Error');
        $this->_view->error = 'Application Error';
    }

    private function _showError($exception) {
        var_dump($exception);
    }
    
}

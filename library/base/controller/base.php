<?php

/**
 * Controller 基类
 * @author dalong.jia
 *
 */
class base_controller_base extends Yaf_Controller_Abstract {

    protected $_module_info;

    public function init () {
    	header("content-type:text/html; charset=utf-8");
	    //防止SQL注入
        common_util::sqlProtect();

//        $this->_module_info = $this->getRequest()->getParams();
//        $this->getView()->assign('module_info', $this->_module_info);
//        $this->getView()->assign('main_url', file_config::siteConfig('main_url'));
//        $this->getView()->assign('script_url', file_config::siteConfig('script_url'));
//        $this->getView()->assign('js_version', file_config::siteConfig('js_version'));
//        $this->getView()->assign("css_version", file_config::siteConfig('css_version'));
//		$this->getView()->assign('image_url',file_config::siteConfig('image_url'));
//		$this->getView()->assign('image_url2',file_config::siteConfig('image_url2'));
//		$this->getView()->assign('event_url',file_config::siteConfig('event_url'));
//		//增加android手机客户端判读。如果有cookie 不显示安卓下载~
//		$this->getView()->assign('device_name', $this->checkDeviceName());
//		//echo common_cookie::getCookie("android_download");
//		$this->getView()->assign('android_download', common_cookie::getCookie("android_download"));
//		common_cookie::setCookie("android_download","is_download");
    }

//	//by liqing 设置浏览记录
//	function setReferCookie() {
//		$refer = array();
//		if (!empty($_GET['refer_type']) && !empty($_GET['refer_id'])) {
//			$refer['type_id'] = urldecode($_GET['refer_id']);
//			$refer['type'] = $_GET['refer_type'];
//		}
//		if (!empty($_GET['utm_source']) && !empty($_GET['utm_medium'])) {
//			$refer['utm_source'] = urldecode($_GET['utm_source']);
//			$refer['utm_medium'] = urldecode($_GET['utm_medium']);
//			if (!empty($_GET['utm_campaign'])) {
//				$refer['utm_campaign'] = urldecode($_GET['utm_campaign']);
//			}
//			if (!empty($_GET['utm_term'])) {
//				$refer['utm_term'] = urldecode($_GET['utm_term']);
//			}
//			if (!empty($_GET['utm_content'])) {
//				$refer['utm_content'] = urldecode($_GET['utm_content']);
//			}
//		}
//		common_cookie::setCookieArrayGlobal('refer', $refer, 'M');
//	}
//
//    /**
//     * 是否为Post请求
//     * Author luck.wang 2012.12.13
//     */
//    function isPost(){
//    	$http = new Zend_Controller_Request_Http();
//    	return $http->isPost();
//    }
//    /**
//     * 是否为Get请求
//     * Author luck.wang 2012.12.13
//     */
//    function isGet(){
//    	$http = new Zend_Controller_Request_Http();
//    	return $http->isGet();
//    }
//    /**
//     * 是否为Ajax请求
//     * Author luck.wang 2012.12.13
//     */
//    function isAjax(){
//    	$http = new Zend_Controller_Request_Http();
//    	return $http->isXmlHttpRequest();
//    }
//    /**
//     * 分配变量
//     * @param string $name
//     * @param string|array|int $value
//     */
//    function assign ($name, $value = NULL)
//    {
//        $this->view->assign($name, $value);
//    }
//    /**
//     * 跳转至错误页面
//     * @param string $msg
//     * @param string $url
//     */
//    function error($msg, $url = NULL){
//    	if(empty($url)){
//    		$url = 'javascript:window.history.back(-1);';
//    	}
//    	echo "<meta http-equiv='refresh' content='3; URL='.$url.'' charset='utf-8'/>";
//		echo "<br/><h3 align='center'><a href=''.$url.'>".$msg."，系统将自动在3秒后跳转，如果没跳请点击返回</a></h3>";
//    	exit;
//    }
//
//	 /**
//     * 检查客户端类型
//     *
//     *
//     */
//
	

}




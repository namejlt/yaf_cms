<?php
/**
 * Author: Tynam
 * Date: 14-4-23
 * Time: 下午9:17
 * File: Index.php
 * Des: 
 */

class IndexController extends base_controller_base {

    public function indexAction() {
        $this->_view->assign('name', 'administrator');
    }

    public function testAction() {
        echo 'admin test';
        die;
    }

}
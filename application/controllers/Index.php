<?php
/**
 * @file Index.php
 * 此脚本页面的用途
 * @author: dalong.jia
 * @date: 14-4-1
 * @time: 上午9:18
 */
class IndexController extends base_controller_base {

    public function indexAction() {
        $db = new DataModel();
        $content = $db->fetchAll()->toArray();
        $this->_view->assign('content', $content);
        $this->_view->assign('name', 'this is a name');
    }

    public function testAction() {
        echo ' index testss 1';
        die;
    }

    public function test2Action() {
        echo ' index testss 2';
        die;
    }
}
<?php
/**
 * @file Index.php
 * 此脚本页面的用途
 * @author: dalong.jia
 * @date: 14-4-1
 * @time: 上午9:18
 */
class IndexController extends Yaf_Controller_Abstract {

    public function indexAction() {
        $db = new DataModel();
        $this->getView()->assign("content", $db->fetchAll());
    }

    public function testAction() {
        $test = new Test_Foo_Demo();
        die;
    }
}
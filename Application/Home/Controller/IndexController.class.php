<?php
namespace Home\Controller;
use Think\Controller;
use Think\Hook;
class IndexController extends Controller {
    public function index(){
        Hook::add('ad','Behavior\\AdBehavior');
        $this->display();
    }
}
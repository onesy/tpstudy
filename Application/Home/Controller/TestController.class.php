<?php
namespace Home\Controller;
use Think\Controller;

class TestController extends Controller {
    
    public function play() {
        $this->name = 'wangsunyu';
        $this->display();
    }
}
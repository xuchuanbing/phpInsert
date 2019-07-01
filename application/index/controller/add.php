<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/1 0001
 * Time: 上午 11:31
 */

namespace app\index\controller;


use think\Request;

class Add extends Base
{
    public function index(){
        return $this->fetch();
    }
    public function center(){
        return $this->fetch();
    }
    public function middel(){
        $controller = Request::instance()->controller();
        $this->assign([
            'controller'=>$controller
        ]);
        return $this->fetch();
    }
    public function tab(){
        return $this->fetch();
    }
}
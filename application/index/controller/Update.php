<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/2 0002
 * Time: 下午 01:55
 */

namespace app\index\controller;


use think\Request;

class Update extends Base
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
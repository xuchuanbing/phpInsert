<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/2 0002
 * Time: 上午 11:04
 */

namespace app\index\controller;

use think\Request;
class User extends Base
{
    public function index(){
        return $this->fetch();
    }
    public function update(){
        return $this->fetch();
    }
    public function center(){
        return $this->fetch();
    }
    public function middel(){
        $controller = Request::instance()->controller();
        $action = Request::instance()->action();
        $this->assign([
            'action'=>$action,
            'controller'=>$controller
        ]);
        return $this->fetch();
    }
    public function tab(){
        return $this->fetch();
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/27 0027
 * Time: 上午 11:14
 */

namespace app\index\controller;


use think\Controller;

class Base extends Controller
{
    public function __construct(){
        parent::__construct();
        //session('userinfo',null);
        if(!session('userinfo')){
            $this->redirect("index/login/login");
        }
    }
}
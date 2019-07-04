<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/3 0003
 * Time: 上午 11:33
 */

namespace app\index\controller;


use think\Controller;

class Register extends Controller
{
    public function index(){
        return $this->fetch();
    }
}
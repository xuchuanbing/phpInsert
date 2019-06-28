<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/27 0027
 * Time: 上午 11:15
 */

namespace app\index\controller;


class Login extends Base
{
    public function login(){
        return $this->fetch();
    }
}
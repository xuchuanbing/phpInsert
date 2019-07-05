<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/4 0004
 * Time: 下午 02:36
 */

namespace app\index\controller;


use think\Controller;

class Bases extends Controller
{
    public function xcvf(){
        $loginID = config("setting.login_ID");
        $randNum = randNum(6);
        $time = time();
        $randData = $loginID.$randNum.$time;
        return $randData;
    }
    /***
     * 验证码验证
     */
    public function checkCode($phone,$code){
        $codes = session($phone);
        if ($code == $codes){
            return true;
        }else{
            return false;
        }
    }
}
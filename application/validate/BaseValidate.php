<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/4 0004
 * Time: 上午 09:31
 */

namespace app\validate;


use app\lib\exception\ParamException;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck(){
        $result = Request::instance();
        $params = $result->param();
        if(!$this->check($params)){
            throw new ParamException([
               "msg" => $this->error
            ]);
        }
        return true;
    }

    //没有使用TP的正则验证，集中在一处方便以后修改
    //不推荐使用正则，因为复用性太差
    //手机号的验证规则
    protected function isMobile($value)
    {
        $rule = '^1(3|4|5|7|8)[0-9]\d{8}$^';
        $result = preg_match($rule, $value);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    protected function checkXvcf($value){

        $result = md5(md5(session("login")));
        if($result == $value){
            return true;
        }else{
            return false;
        }
    }

    protected function checkCode($value){
        $rule = '/^\w{6}$/';
        $result = preg_match($rule,$value);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
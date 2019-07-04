<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/4 0004
 * Time: 上午 09:38
 */

namespace app\index\service;


use app\lib\smscode\Ucpaas;

class SmsGetcode extends BaseService
{
    public function index(){
        $option = [
            "accountsid"=>config("smsyzm.smsAccountSid"),
            "token"=>config("smsyzm.token")
        ];
        $ucpass = new Ucpaas($option);
        return $ucpass;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/27 0027
 * Time: 上午 11:15
 */

namespace app\index\controller;


use app\index\model\Peregister;
use app\index\service\SmsGetcode;
use app\lib\exception\BaseException;
use app\lib\exception\DologinException;
use app\validate\DoLoginPost;
use app\validate\PhoneGet;

class Login extends Bases
{
    public function xcvf(){
        $loginID = config("setting.login_ID");
        $randNum = randNum(6);
        $time = time();
        $randData = $loginID.$randNum.$time;
        return $randData;
    }

    public function login(){
        session("login",$this->xcvf());
        $xcvf = md5(md5(session("login")));
        $this->assign(["xcvf"=>$xcvf]);
        return $this->fetch();
    }

    public function doLogin(){
        (new DoLoginPost())->goCheck();
        //手机号和验证码的验证登陆
        //手机号从数据库获取，如果存在，验证验证码，如果不存在抛异常，跳转注册页面
        $data = Peregister::getPhoneData($_POST['phone']);
        if($data){
            //判断验证码
            if($this->checkCode($_POST['phone'],$_POST['code'])){
                session("userinfo",$data);
            }else{
                throw new BaseException([
                    "msg" => "验证码错误！",
                    "code" => 200,
                    "errorCode" => 40000
                ]);
            }
        }else{
            throw new DologinException();
        }
    }

    /***
     * 发送验证码
     * @throws BaseException
     * @throws \app\lib\smscode\Exception
     */
    public function smsCode(){
        (new PhoneGet())->goCheck();
        $appid = config("smsyzm.smsAppid");
        $templateid = config("smsyzm.smsTemplateId");
        $param = randNum(6).",60";
        $mobile = $_POST['phone'];
        $uid = 1;
        $ucpass = (new SmsGetcode())->index();
        $data = json_decode($ucpass->SendSms($appid, $templateid, $param, $mobile, $uid), true);
        if($data["code"] == "000000"){
            session($mobile,explode(",",$param)[0]);
            echo json_encode([
                "msg" => "发送成功",
                "code"=> 200,
                "errorCode"=>$data['code']
            ]);
        }else{
            throw new BaseException([
                "msg" => $data['msg'],
                "code" => 200,
                "errorCode" => $data['code']
            ]);
        }
    }

}
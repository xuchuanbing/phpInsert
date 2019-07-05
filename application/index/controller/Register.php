<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/3 0003
 * Time: 上午 11:33
 */

namespace app\index\controller;


use app\index\model\Peregister;
use app\lib\exception\BaseException;
use app\lib\exception\DologinException;
use app\lib\SuccessMessage;
use app\validate\DoRegisterPost;

class Register extends Bases
{
    public function index(){
        session("register",$this->xcvf());
        $xcvf = md5(md5(session("register")));
        $this->assign(["xcvf"=>$xcvf]);
        return $this->fetch();
    }
    public function doRegister(){

        (new DoRegisterPost())->goCheck();

        //验证手机号，如果手机号存在，该手机号已经被注册
        //如果手机号不存在，做验证码验证，存数据库，添加成功，添加失败
        $data = Peregister::getPhoneData($_POST['phone']);
        if($data){
            throw new DologinException([
                'msg'   =>   "该手机号已经被注册！",
                'errorCode'=>40000
            ]);
        }else{
            if($this->checkCode($_POST['phone'],$_POST['code'])){
                //验证码验证成功，写数据库
                $user = new Peregister();
                $data = $user->save([
                    "phone"  =>  $_POST['phone'],
                    "name"   =>  $_POST['name'],
                    "status" =>  1,
                ]);
                if(!$data){
                    throw new BaseException([
                        "msg"   =>  "添加失败",
                        "errorCode" =>  40000
                    ]);
                }else{
                    throw new SuccessMessage([
                        "msg"   =>  "注册成功！"
                    ]);
                }
            }else{
                throw new BaseException([
                    "msg" => "验证码错误！",
                    "errorCode" => 40000
                ]);
            }
        }
    }
}
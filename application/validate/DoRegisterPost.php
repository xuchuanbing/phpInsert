<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/5 0005
 * Time: 上午 09:50
 */

namespace app\validate;


class DoRegisterPost extends BaseValidate
{
    protected $rule = [
        "_xcvf" =>  "require|checkXcvfr|isNotEmpty",
        "phone" =>  "require|isMobile|isNotEmpty",
        "code"  =>  "require|checkCode|isNotEmpty",
        "name"  =>  "require|isNotEmpty"
    ];

    protected $message = [
        "_xcvf" =>  "非法操作2",
        "phone" =>  "请输入正确的手机号",
        "code"  =>  "请输入正确的验证码",
        "name"  =>  "请输入正确格式的姓名"
    ];
}
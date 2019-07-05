<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/4 0004
 * Time: 上午 11:11
 */

namespace app\validate;


class DoLoginPost extends BaseValidate
{
    protected $rule = [
        "_xcvf" =>  "require|checkXcvfl|isNotEmpty",
        "phone" =>  "require|isMobile|isNotEmpty",
        "code"  =>  "require|checkCode|isNotEmpty"
    ];

    protected $message = [
        "_xcvf" =>  "非法操作1",
        "phone" =>  "请输入正确的手机号",
        "code"  =>  "请输入正确的验证码"
    ];
}
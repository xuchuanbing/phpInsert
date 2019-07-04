<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/4 0004
 * Time: 上午 09:44
 */

namespace app\validate;


class PhoneGet extends BaseValidate
{
    protected $rule = [
        "phone" => "require|isMobile"
    ];
    protected $message = [
        "phone" => "手机号格式错误"
    ];
}
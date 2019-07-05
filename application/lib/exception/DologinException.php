<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/4 0004
 * Time: 下午 02:31
 */

namespace app\lib\exception;


class DologinException extends BaseException
{
    public $code = 200;
    public $errorCode = 40000;
    public $msg = "该手机号未注册";
}
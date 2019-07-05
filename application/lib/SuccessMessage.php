<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/5 0005
 * Time: 上午 10:19
 */

namespace app\lib;


use app\lib\exception\BaseException;

class SuccessMessage extends BaseException
{
    public $code = 200;
    public $msg = 'ok';
    public $errorCode = 10000;
}
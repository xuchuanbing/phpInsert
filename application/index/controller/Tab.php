<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/28 0028
 * Time: 上午 11:47
 */

namespace app\index\controller;


class Tab extends Base
{
    public function tab(){
        return $this->fetch();
    }
}
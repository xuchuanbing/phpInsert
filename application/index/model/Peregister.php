<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/4 0004
 * Time: 下午 02:25
 */

namespace app\index\model;


use think\Model;

class Peregister extends Model
{
    protected $autoWriteTimestamp = true;

    public static function getAllInfo(){
        $data = self::select();
        return $data;
    }

    public static function getPhoneData($phone){
        $data = self::where("phone","=",$phone)
            ->find();
        return $data;
    }
}
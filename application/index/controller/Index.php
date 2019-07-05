<?php
namespace app\index\controller;

use app\index\model\Peregister;

class Index extends Base
{
    public function index()
    {
        return $this->fetch();
    }

    public function top(){
        return $this->fetch();
    }

    public function center(){
        return $this->fetch();
    }

    public function down(){
        return $this->fetch();
    }

    public function middel(){
        return $this->fetch();
    }

    public function left(){
        return $this->fetch();
    }
    public function tab(){
        $result = Peregister::getAllInfo();
        $result = $result->toArray();

        $this->assign("data",$result);
        return $this->fetch();
    }
}

<?php
namespace app\home\controller;

use app\common\controller\BaseController;
use app\v1\service\Chartservice;
use think\Controller;
use app\v1\service\Systems;
use think\Cookie;
use think\Cache;
class Index extends BaseController
{

    public function index()
    {

        if ($this->request->isGet()) {
            //用户信息
            $chart = Chartservice::instance()->getOne();
            $this->assign('chart',$chart);
            $this->assign('userinfo',$this->userinfo);
            return $this->fetch();
        }
        return false;
    }
}
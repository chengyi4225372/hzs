<?php

namespace app\home\controller;

use app\common\controller\BaseController;
use  think\Controller;
use think\Cookie;
use think\Cache;
use think\Config;
class Login extends BaseController
{

    protected $base_urls = 'http://172.26.3.12:8009/#';

    /**
     * @DESC：登录
     * @return mixed
     * @author: jason
     * @date: 2019-11-13 09:33:33
     */
    public function login()
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = intval($_GET['id']);
        } else {
            $id = '0';
        }
        if (isset($_GET['type']) && !empty($_GET['type'])) {
            $type = intval($_GET['type']);
        } else {
            $type = '0';
        }
        $this->assign('web_type', $type);
        $this->assign('data_id', $id);
        return $this->fetch();
    }

    public function register()
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = intval($_GET['id']);
        } else {
            $id = '';
        }
        $this->assign('data_id', $id);
        return $this->fetch();
    }


    /**
     * @DESC：保存token、用户、电话到cookie里面
     * @author: jason
     * @date: 2019-10-29 11:09:49
     */
    public function savetoken()
    {
        //允许跨域
        header("Access-Control-Allow-Origin:*");
        if ($this->request->isPost() && $this->request->isAjax()) {
            if (empty($_POST)) {
                return json(['status' => false, 'message' => '请确认用户或密码是否正确']);
            }
            $mobile = $_POST['mobile'];
            $token = $_POST['token'];
            $userName = $_POST['userName'];
            $userType = $_POST['userType'];
            Cookie::set('mobile', $mobile);
            Cookie::set('token', $token);
            Cookie::set('userName', $userName);
            Cookie::set('userType', $userType);
            Cache::set($mobile, $mobile);
            return json(['status' => true, 'message' => '登录成功']);
        } else {
            return json(['status' => false, 'message' => '请确认用户或密码是否正确']);
        }
    }

    /**
     * @DESC：保存token、用户、电话到缓存里面
     * @author: jason
     * @date: 2019-10-29 11:09:49
     */
    public function savetokens()
    {
        //允许跨域
        header("Access-Control-Allow-Origin:*");
        $mobile = $_POST['mobile'];
        $token = $_POST['token'];
        $userType = $_POST['userType'];
        Cookie::set('mobile',$mobile);
        Cookie::set('token',$token);
        Cookie::set('userType',$userType);
        return json(['status' => 200,'message' => 'success']);

    }



    /**
     * @DESC：前台退出登录
     * @return \think\response\Json
     * @author: jason
     * @date: 2019-10-31 10:38:54
     */
    public function logout()
    {
        $website_url = Config::get('curl.website');
        $hlg_url = Config::get('curl.hlg');
        Cookie::clear('mobile');
        Cookie::clear('token');
        Cookie::clear('userType');
        //官网退出
        $res = curl_get($website_url.'/home/login/apilogout');
        $res2 = curl_get($hlg_url.'/home/login/apilogout');
        return json(['status' => 200,'message' => 'success']);
    }

    /**
     * @DESC：其他页面退出那么当前这个页面也要退出
     * @author: jason
     * @date: 2019-11-14 04:14:53
     */
    public function apilogout()
    {
        header("Access-Control-Allow-Origin:*");
        Cookie::clear('mobile');
        Cookie::clear('token');
        Cookie::clear('userType');
        return json(['status' => 200,'message' => 'success']);
    }

}
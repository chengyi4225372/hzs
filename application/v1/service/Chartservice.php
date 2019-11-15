<?php

namespace app\v1\service;

use app\common\model\Admin;
use app\common\model\Chart;
use plugin\Tree;
use plugin\Crypt;
use think\Config;

class Chartservice
{
    // 静态对象
    protected static $instance = null;

    /**
     * @DESC：单例
     * @return null|static
     * @author: jason
     * @date: 2019-07-26 10:00:16
     */
    public static function instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }


   /**
    * 获取正常数据
    */
   public function getList(){
       $w = ['status'=>1]; //正常
       $list = Chart::instance()->where($w)->order(['id'=>'desc'])->paginate(15);
       return  $list;
   }

    /**
     * 根据用户id 获取详情
     * id string|int
     * return array
     */
   public function Getidinfo($id){
        
        if(empty($id) || !isset($id) || $id <=0 || is_null($id)){
            return false;
        }

        $info = Chart::instance()->where(['id'=>$id,'status'=>1])->find();

        return  $info;
    }


   /**
    * 添加 数据
    * data array
    * return bool
    */
   public function addData($data){
        if(empty($data)){
            return false;
        }

        $ret = Chart::instance()->data($data)->save();

        if($ret && $ret >0){
            return true;
        }else {
            return false;
        }
    }


   /**
    * 编辑
    * id string|int
    * data array
    * return bool
    */
   public function GetByIdSave($id,$data){

       if(empty($id) || $id <= 0 || is_null($id) || !isset($id)){
           return  false;
       }

       $set_data = Chart::instance()->where(['id'=>$data])->data($data)->update();

       if($set_data && $set_data >0){
           return true;
       }else {
           return false;
       }

   }


   /**
    * 伪删除
    * id  string |int
    * return bool
    */
   public function  updateStatus($id){
        if(empty($id) || $id <= 0 || is_null($id) || !isset($id)){
            return  false;
        }

        $ret = Chart::instance()->where(['id'=>$id])->update(['status'=>-1]);

        if($ret){
            return true;
        }else {
            return false;
        }
    }

}

<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17-8-19
 * Time: 下午10:50
 */

namespace Home\Model;
use Think\Model;

class WebModel extends Model
{
    public function getweb($arr){

       $all=$this->where($arr)->select();
       return $all[0];
    }

    public function saveinfo($arr){

    }
}
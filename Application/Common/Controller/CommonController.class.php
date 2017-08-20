<?php
namespace Common\Controller;
use Think\Controller;
class CommonController extends Controller
{
    public function index (){
        $info = D('Web')->getweb('id=1');
        $this->assign('info',$info);
    }
}

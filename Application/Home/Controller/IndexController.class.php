<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller
{
    public function index (){
        $info = D('Web')->getweb('id=1');
        $this->assign('active','1');
        $this->assign('info',$info);
        $this->display('index');
    }
    public function about (){
        $this->assign('active','2');
        $this->display('about');
    }
    public function skills (){
        $this->assign('active','3');
        $this->display('skills');
    }
    public function experience (){
        $this->assign('active','4');
        $this->display('experience');
    }
    public function education (){
        $this->assign('active','5');
        $this->display('education');
    }
    public function projects (){
        $this->assign('active','6');
        $this->display('projects');
    }
    public function contact (){
        $this->assign('active','7');
        $this->display('contact');
    }

}

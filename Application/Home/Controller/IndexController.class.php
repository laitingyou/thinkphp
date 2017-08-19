<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller
{
    public function index (){
        $this->assign('active','1');
        $this->display('index');
    }
    public function about (){
        $this->assign('active','2');
        $this->display('about');
    }
    public function contact (){
        $this->display('contact');
    }
    public function education (){
        $this->display('education');
    }
    public function projects (){
        $this->display('projects');
    }
    public function skills (){
        $this->display('skills');
    }
}

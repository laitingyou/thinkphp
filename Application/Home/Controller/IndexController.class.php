<?php
namespace Home\Controller;
use Common\Controller\CommonController;
class IndexController extends CommonController
{
    public function index (){
        parent::index();
        $this->assign('active','1');
        $this->display('index');
    }
    public function about (){
        parent::index();
        $info=D('About')->find();
        $this->assign('active','2');
        $this->assign('info',$info);
        $this->display('about');
    }
    public function skills (){
        parent::index();
        $this->assign('active','3');
        $this->display('skills');
    }
    public function experience (){
        parent::index();
        $this->assign('active','4');
        $this->display('experience');
    }
    public function education (){
        parent::index();
        $this->assign('active','5');
        $this->display('education');
    }
    public function projects (){
        parent::index();
        $this->assign('active','6');
        $this->display('projects');
    }
    public function contact (){
        parent::index();
        $this->assign('active','7');
        $this->display('contact');
    }

}

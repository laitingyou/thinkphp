<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller
{
    public function _after_indexAction ($id){
        echo "read";
    }
    public function indexAction ($id){
        $index=A('Index');
        echo $index->indexAction();
    }
}

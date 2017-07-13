<?php
return array(
	//'配置项'=>'配置值'
  'URL_ROUTE_RULES'=>array(
    'test'        =>
        function(){
            echo 'just test';
        },
    'hello/:name' =>
        function($name){
            echo 'Hello,'.$name;
        }
    ）
);

<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING'       =>array(
        '__HOME_JS__'       =>__ROOT__.trim(TMPL_PATH,'.').'Public/js',
        '__HOME_CSS__'       =>__ROOT__.trim(TMPL_PATH,'.').'Public/css',
        '__HOME_IMG__'       =>__ROOT__.trim(TMPL_PATH,'.').'Public/images',
        '__HOME_PUBLIC__'    =>TMPL_PATH.'Home/Public',
	),
    'URL_ROUTE_RULES'         =>array(

    ),
    'URL_MAP_RULES'        =>array(
        ''              => 'Home/index/index',
        'about'              => 'Home/index/about',
        'contact'              => 'Home/index/contact',
        'education'              => 'Home/index/education',
        'experience'              => 'Home/index/experience',
        'projects'              => 'Home/index/projects',
        'skills'              => 'Home/index/skills'
    )

		
);
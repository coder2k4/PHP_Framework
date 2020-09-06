<?php

use myshop\Router;


//Стандартные роуты

//Admin
Router::add('^admin$',['controller' => 'Main','action'=>'index', 'prefix'=>'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);
//System
Router::add('^$',['controller' => 'Main','action'=>'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 03.10.2018
 * Time: 13:17
 */

namespace app\controllers;


use myshop\App;
use myshop\Cache;

class MainController extends AppController
{
    public function indexAction(){
        $posts = \R::findAll('test');
        $this->setMeta(App::$app->getProperty('shop_name'), 'Описание','Ключики');
        $cache = Cache::instance();
        $cache->set('test', $posts);
        $this->set(compact('posts'));
    }

}
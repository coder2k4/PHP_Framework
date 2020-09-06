<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 03.10.2018
 * Time: 14:19
 */

namespace app\controllers;


use app\models\AppModel;
use myshop\base\Controller;

class AppController extends Controller
{
    public  function __construct($route)
    {
        parent::__construct($route);
        new AppModel();
    }
}
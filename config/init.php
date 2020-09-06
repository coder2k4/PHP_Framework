<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 02.10.2018
 * Time: 16:17
 */

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . "/public");
define("APP", ROOT . "/app");
define("CONF", ROOT . "/config");
define("CACHE", ROOT . "/tmp/cache");
define("CORE", ROOT . "/vendor/myshop/core");
define("LIBS", ROOT . "/vendor/myshop/core/libs");
define("LAYOUT", "default");

//http://phpframework/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
//http://phpframework/public/
$app_path = preg_replace("#[^/]+$#", '', $app_path); //Ищем все, кроме / , начиная с конца стройки $#
//http://phpframework
$app_path = str_replace("/public/", '', $app_path);
define("PATH", $app_path);
define("ADMIN", PATH.'/admin');


require_once ROOT. "/vendor/autoload.php";

//todo сделать HTTPS
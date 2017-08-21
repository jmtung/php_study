<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 17-7-31
 * Time: 下午10:00
 * Describe:
 */

define('ROOT', __DIR__);
include ROOT.'/Lib/Loader.php';
spl_autoload_register('\\Lib\\Loader::autoload');

Lib\Object::test();
App\Controller\Home\Index::test();
<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 17-7-31
 * Time: 下午10:09
 * Describe:
 */
namespace Lib;

class Loader{
    static function autoload($class){
        $filePath=ROOT.'/'.str_replace('\\', '/', $class).'.php';
        if (file_exists($filePath)){
            require_once $filePath;
        }else{
            throw new \Exception('找不到文件: '.$filePath);
        }
    }
}
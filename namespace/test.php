<?php

spl_autoload_register('load');

Test1\Test1::test();
Test2\Test2::test();


function load($class){

    $class = substr($class,0,strrpos($class,'\\'));
    $filePath=__DIR__.'/'.$class.'.php';
    if (file_exists($filePath)){
        require_once $filePath;
    }else{
        throw new Exception('文件不存在: '.$filePath);
    }
}





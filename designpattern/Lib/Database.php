<?php
namespace DesignPattern\Lib;

class Database{

    /**
     * 长驻内存的静态成员db
     *
     */
    private static $db;

    /**
     * 防止直接new一个Database对象
     *
     */
    private function __construct(){

    }

    /**
     * 防止对象被复制
     *
     */
    private function __clone(){

    }
    /**
     * 静态方法实现单一入口的单例模式
     *
     */
    static public function getInstance(){
//        静态成员存在直接返回 反之实例化一个db类
        if (self::$db){
            return self::$db;
        }else{
            self::$db=new self;
            return self::$db;
        }
    }

    public function selectAll(){
        echo "all\n";
        return $this;
    }

    public function where(){
        echo "where\n";
        return $this;
    }
}
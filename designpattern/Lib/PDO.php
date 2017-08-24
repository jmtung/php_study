<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 17-8-24
 * Time: 下午7:45
 * Describe:
 */

namespace DesignPattern\Lib;


class PDO implements IDatabase
{

    protected $conn;
    public function connect($host, $user, $passwd, $dbname)
    {
        $this->conn=new \PDO("mysql:host=$host;dbname=$dbname",$user,$passwd);
    }

    public function query($sql)
    {
        return $this->conn->query($sql);
    }

    public function close()
    {
        unset($this->conn);
    }

}
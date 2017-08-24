<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 17-8-24
 * Time: 下午7:44
 * Describe:
 */

namespace DesignPattern\Lib;


class MySQLi implements IDatabase
{
    protected $conn;

    public function connect($host, $user, $passwd, $dbname)
    {
        $this->conn=mysqli_connect($host,$user,$passwd,$dbname);
    }

    public function query($sql)
    {
        return mysqli_query($this->conn,$sql);
    }

    public function close()
    {
        mysqli_close($this->conn);
    }
}
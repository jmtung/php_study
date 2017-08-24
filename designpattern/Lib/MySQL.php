<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 17-8-24
 * Time: 下午8:20
 * Describe:
 */

namespace DesignPattern\Lib;


class MySQL implements IDatabase
{
    protected $conn;

    public function connect($host, $user, $passwd, $dbname)
    {
        $this->conn=mysql_connect($host,$user,$passwd);
        mysql_select_db($dbname,$this->conn);
    }

    public function query($sql)
    {
        return mysql_query($sql, $this->conn);
    }

    public function close()
    {
        mysql_close($this->conn);
    }

}
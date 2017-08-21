<?php
namespace DesignPattern\Lib;

class Database{
    function selectAll(){
        echo "all\n";
        return $this;
    }

    function where(){
        echo "where\n";
        return $this;
    }
}
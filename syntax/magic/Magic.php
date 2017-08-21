<?php
class Magic{

    protected $array=array();

    function __set($name, $value)
    {
        // TODO: Implement __set() method.
//        echo __METHOD__."\n";
        $this->array[$name]=$value;
    }

    function __get($name)
    {
        // TODO: Implement __get() method.
//        echo __METHOD__."\n";
        return isset($this->array[$name]) ? $this->array[$name]:'';
    }

    function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        var_dump($name,$arguments);
        return "magic function\n";
    }

    function __toString()
    {
        // TODO: Implement __toString() method.
        return __CLASS__;
    }

    function __invoke($param)
    {
        // TODO: Implement __invoke() method.
        var_dump($param);
        return "invoke";
    }
}

$magic=new Magic();

/*--------------------------__get/__set测试--------------------------*/
/*$magic->a="测试";
echo $magic->a."\n";*/

/*--------------------------__call测试--------------------------*/

//echo $magic->test('param');

/*--------------------------__toString测试--------------------------*/
//echo $magic;

/*--------------------------__invoke()测试--------------------------*/
echo $magic('test');

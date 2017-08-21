#php链式操作原理
在每个链式方法最后添加一行`return $this;`代码,表示返回当前对象
```
class test{

public function one(){
    ...
    return $this;
}

public function two(){
    ...
    return $this;
}
}

$class=new test();
$class->one()->two();
```
<?php

class demo
{
    public $name;
    public $age;

    public function __clone()
    {
        $this->age = 18;
        // TODO: Implement __clone() method.
    }

    public function __construct()
    {
        $this->age = 20;
        $this->name = 'fuck';
    }
}

$demo1 = new demo();
//clone的时候调用对象的clone方法
$demo2 = clone $demo1;
var_dump($demo1->name);
var_dump($demo2->name);
var_dump($demo1->age);
var_dump($demo2->age);
?>
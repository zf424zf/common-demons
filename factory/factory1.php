<?php

/**
 * Created by PhpStorm.
 * User: zhangfan
 * Date: 2017/3/3
 * Time: 9:52
 */
interface IUser1
{
    function getName();
}

class User implements IUser1  {

    public function __construct($id){

    }

    function getName()
    {
        // TODO: Implement getName() method.
    }
}
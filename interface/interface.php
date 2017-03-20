<?php
/**
 * Created by PhpStorm.
 * User: zhangfan
 * Date: 2017/3/3
 * Time: 10:12
 */
/*
 * 接口可以继承，且方法必须是公有方法
 * 接口内定义的常量不能被子接口或者子类覆盖
 * 接口不能定义变量和静态变量，常量除外
 */

interface People
{
    const MALE = 1;
    const FEMALE = 2;

    function getMale();
}

interface IUser extends People
{
    function getName();
}

class fan implements IUser
{

    function getMale()
    {
        return self::FEMALE;
    }

    function getName()
    {

    }
}
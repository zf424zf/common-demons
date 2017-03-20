<?php

/**
 * Created by PhpStorm.
 * User: zhangfan
 * Date: 2017/2/13
 * Time: 10:47
 */
class user
{
    public $age = 1;
    private $gender = 'male';

    public function getAge()
    {
        return 'maybe 15';
    }

    private function applyGender()
    {
        return 'female';
    }

}

//$refl = new ReflectionClass('user');
//print $refl->getName();
//print json_encode($refl->getMethods());
print 5+'15%'+"$25";

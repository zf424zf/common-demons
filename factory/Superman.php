<?php
/**
 * Created by PhpStorm.
 * User: zhangfan
 * Date: 2017/2/13
 * Time: 14:11
 */
interface SuperModule
{
    public function activity($target);
}

class XLay implements SuperModule {

    public function activity($target)
    {
       echo 'i have xlay';
    }
}

class Fly implements SuperModule {

    public function activity($target)
    {
        echo 'i can fly';
    }
}

class Superman{
    public $module =1;

    public function __construct(SuperModule $module)
    {
        $this->module = $module;
    }
}

class Container{
    protected $binds;

    protected $instances;

    public function bind($abstract, $concrete)
    {
        if ($concrete instanceof Closure) {
            $this->binds[$abstract] = $concrete;
        } else {
            $this->instances[$abstract] = $concrete;
        }
    }

    public function make($abstract, $parameters = [])
    {
        if (isset($this->instances[$abstract])) {
            return $this->instances[$abstract];
        }

        array_unshift($parameters, $this);

        return call_user_func_array($this->binds[$abstract], $parameters);
    }
}

$container = new Container();
$container->bind('superman',function ($container,$moduleName){
    return new Superman($container->make($moduleName));
});

$container->bind('xlay',function ($container){
    return new XLay();
});

$container->bind('fly',function ($container){
    return new Fly();
});

$super1 = $container->make('superman',['xlay']);
//$super2 = $container->make('superman','fly');
$super1->module;
//$super2->getModule();
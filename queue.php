<?php
$redis = new redis();
$redis->connect('127.0.0.1',6379);
//$redis->delete('hello');

//
//$redis->lPush('hello',2);

//根据下标设置队列值 如果下标不存在 返回失败
//$result = $redis->lSet('hello',0,'haha');
//$redis->lSet('fuck',1,'hehe');

//移除并返回指定key的第一个元素
//$redis->lPop('hello');

//只有当 key 已经存在并且存着一个 list 的时候，在这个 key 下面的 list 的头部插入 value。
// 与 LPUSH 相反，当 key 不存在的时候不会进行任何操作
//$result = $redis->lPush('hello',1);
//$result = $redis->lPushx('hello',2);

//返回名称为key的list中start至end之间的元素 end为-1 返回所有
//$result = $redis->lRange('hello',1,1);
//$redis->lPush('mylist','hahaha');
//$redis->rPush('mylist','fanfan');
$result = $redis->lInsert('mylist',Redis::BEFORE,'fanfan','ashdad');

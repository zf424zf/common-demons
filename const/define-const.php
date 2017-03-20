<?php
const NAME = 'uptown funk';
const TYPE = 'American Music';
echo constant('NAME');
var_dump(defined('fuck'));
if(1==1){
    //define可在条件语句中使用 const不行
    define('1',1);
}

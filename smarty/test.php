<?php
require 'Smarty.class.php';
$smarty = new Smarty();
$smarty->assign('title','nihao');
$smarty->assign('name','fanfan');
$smarty->assign('create_time','2145655431');
$smarty->display('templates/index.tpl');
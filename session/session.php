<?php
session_start();
 session_id('abcdefghijklmn22134');
$_SESSION['username'] = 'zhangfan';
$_SESSION['login_time'] = '2017-03-22';
$sessionDate = session_encode();

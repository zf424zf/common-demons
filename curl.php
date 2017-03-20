<?php
$ch  = curl_init();
curl_setopt($ch,CURLOPT_URL,'http://localhost:8885/post.php');
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,['name'=>'zhangsan','age'=>11,'type'=>'test']);
curl_setopt($ch,CURLOPT_TIMEOUT,5);
 $response = curl_exec($ch);
var_dump($response);

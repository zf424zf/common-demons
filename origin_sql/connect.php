<?php
//面相对象风格
$mysqli = new mysqli('123.56.84.176','root','123456','blog');
if(mysqli_connect_errno()){
    echo mysqli_connect_error();
}
mysqli_query($mysqli,'set names utf8');

$sql = "select * from fan_region where type = 'country'";
$result = $mysqli->query($sql);
if($result === false){
    echo $mysqli->error;
}
//几条记录
$count = $result->num_rows;
//遍历每行数据
//while($row = $result->fetch_assoc()){
//var_dump($row);
//}
//获取全部数据
$data = $result->fetch_all(MYSQLI_ASSOC);
foreach ($data as $item){
    echo $item['name'];
}
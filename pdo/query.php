<?php
$dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', '123456');
$query = 'select * from fan_users where id > 2';
$stmt = $dbh->query($query);
$data = $stmt->fetchAll();
foreach ($data as $item){
    var_dump($item['id']);
}
<?php
$dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', '123456');
$query = 'Insert into fan_users set nickname = :nickname,password = :password,phone = :phone,email = :email,logo = :logo';
$stmt = $dbh->prepare($query);
$stmt->execute([':nickname' => 'amao', ':password' => md5('123456'), ':phone' => '18705191169', ':email' => '704273241@qq.com',':logo'=> '2']);
$user = 'fuck';
$password = md5('123456');
$phone = '18705191658';
$email = '704273241@qq.com';
$logo = 2;
$stmt->bindParam(':nickname', $user);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':logo', $logo);
$stmt->execute();

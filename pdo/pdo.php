<?php
try {
    $dbc = new PDO('mysql:host=localhost;dbname=blog', 'root', '123456', [PDO::ATTR_AUTOCOMMIT, PDO::ATTR_ORACLE_NULLS,]);
    $query = 'select * from fan_users where id = 1';
    $result = $dbc->query($query);
    foreach ($result as $r) {
        var_dump($r);
    }
} catch (PDOException $exception) {
    echo 'Connection error:' . $exception->getMessage();
}

<?php //pdo

$connection = new PDO($dsn = "mysql:host=localhost;dbname=library;charset=utf8", $username = "root", $password = "mysql");

//ввод данных
//$query = "insert user (username, email,password,Role_id) value ('Carlo', 'carlo@gmail.com', '987654', '2')";
//$count = $connection->exec($query);
//echo $count;

// $username='crack952';
// $email='cricri@gmail.com';
// $password='132crack';
// $roleid = '2';

// $param =[
//     'un' => $username,
//     'email' => $email,
//     'pw' => $password,
//     'roleid' => $roleid
// ];
// $sql = "insert user (username, email,password,Role_id) value (:un, :email, :pw, :roleid)";
// $query = $connection->prepare($sql);
// $query->execute($param);
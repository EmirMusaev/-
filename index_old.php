<?php //mysqli
echo 'test 1.0' . '<br>';
require_once 'setting.php';

//подключение к бд
$connection = new mysqli($host, $user, $pass, $data);
if ($connection->connect_error)
    die('Error connection!');
//запрос данных
$query = 'select * from user';
$result = $connection->query($query);

if (!$result)
    die('Error result!');

    $rows = $result->num_rows;
for ($i = 0; $i < $rows;++$i){
    $result->data_seek($i);
    echo 'Username: ' . $result->fetch_assoc()['username'] . ' ';
    echo 'E-mail: ' . $result->fetch_assoc()['email'] . '<br>';
}

$result->close();
$connection->close();

// echo '<pre>';
// print_r($rows);
// echo '</pre>';


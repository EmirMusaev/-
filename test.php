<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Главная</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://bootstrap-4.ru/docs/5.2/assets/css/docs.css"
      rel="stylesheet"
    />
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">

    <?php 
    
    //порверка выполнения запроса к бд
function dbCheckError($query){
  $errInfo = $query->errorInfo();
  if ($errInfo[0] !== PDO::ERR_NONE){
      echo $errInfo[2];
      exit();
  }
  return true;
}

//запрос на получение данных из 1 таблицы
function selectAllU(){
  global $pdo;

  $sql = "select * from user";

  /*if(!empty($param)){
      $i = 0;
      foreach($param as $key => $value){
          if(!is_numeric($value)){
              $value = "'".$value."'";
          }
          if($i === 0){
              $sql = $sql . " where $key => $value";
          } else{
              $sql = $sql . "and $key => $value";
          }
          $i++;
      }
  }*/

  

  $query = $pdo->prepare($sql);
  $query->execute();


  dbCheckError($query);

  $date=$query->FetchAll();
  return ($date);
}
;
function tt($value){
  echo '<pre>';
  print_r($value);
  echo '</pre>';
};

/*$param = [
  'Role_Id' => '2',
  'username' => 'Carlo'

];*/

//tt(selectAll($table = 'user', $param));
tt(selectAllU());
    
    ?>
  
    <header>
      <nav class="navbar navbar-expand-lg bg-color">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Мир знаний</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="true"
            aria-label="Переключатель навигации"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >О нас</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >Книги</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >Контакты</a
                >
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Вход
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Авторизация</a></li>
                  <li><a class="dropdown-item" href="#">Регистрация</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <h1>!</h1>
    <div class="v106:15">
        <p class="card-text">Небольшой пример текста, который должен основываться на названии карточки и составлять основную часть содержимого карты.</p>
        <a href="#" class="btn btn-primary">Перейти куда-нибудь</a>
    </div>
    
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Заголовок карточки</h5>
          <p class="card-text">Небольшой пример текста, который должен основываться на названии карточки и составлять основную часть содержимого карты.</p>
          <a href="#" class="btn btn-primary">Перейти куда-нибудь</a>
        </div>
    </div>
    
  </body>
</html>

<?php

include ("db/db.php");

/*   if(isset($_POST['login'])){
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $mname = $_POST['mname'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $class = $_POST['class'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    if (strlen($password) < 6) { $errors[] = "Пароль слишком короткий!"; } */

    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $mname = $_POST['mname'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $class = $_POST['class'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $post = [
        'Name' => $fname,
        'Surname' => $sname,
        'MiddleName' => $mname,
        'Phone' => $phone,
        'Mail' => $mail,
        'City' => $city,
        'Street' => $fname,
        'HomeNum' => $fname,
        'Pass' => $password
    ];

    

//$fname,$sname,$mname,$phone,$mail,$city,$fname,$fname,$password
//:fname,:sname,:mname,:phone,:mail,:city,:street,:class,:password
    function iR($post){
        global $pdo;
        ->prepare 
        $i = 0;
        $coll = '';
        $mask = '';
    
        $sql = "insert into Readers (name, surname, middlename, phone, mail, city, street, homenum, pass) values ($fname,$sname,$mname,$phone,$mail,$city,$fname,$fname,$password)";

        foreach ($post as $key => $value) {
            if ($i === 0) {
                $coll = $coll . "$key";
                $mask = $mask . "'" . "$value" . "'";
            } else {
                $coll = $coll . ", $key";
                $mask = $mask . ", '" . "$value" . "'";
            }
            $i++;
        }
        tt($sql);       
    }

?>

if(isset($_POST["login"]))  
    {  
      if (isset($_POST['mail']) && isset($_POST['password'])){
        $message = '<label>All fields are required</label>';  
      }  
      else  
      {  
        $sql = "select * from Readers where mail='?' and pass='?' ";  
        $statement = $pdo->prepare($sql);  
        $statement->execute(  
            array(  
                  'mail'     =>     $_POST["mail"],  
                  'pass'     =>     password_hash($_POST['password'], PASSWORD_DEFAULT)  
            )  
        );  
        $count = $statement->rowCount();  
        if($count > 0)  
        {  
            $_SESSION["username"] = $_POST["username"];  
            header("location:login_success.php");  
        }  
        else  
        {  
            $message = '<label>Wrong Data</label>';  
        }  
      }  
    }
    
{

function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
      $data = htmlspecialchars($data);
}
}  

$mail = validate( $_POST['mail']);
$password = validate($_POST['password']);

if(empty($mail)){
  header("Location: index.php?erro=User name is requires");
  exit();
}else if(empty($password)){
  header("Location: index.php?erro=Password is requires");
  exit();
}

$sql = "select * from Readers where mail='?' and pass='?' ";
$result = " ";

try{

  $data = [
    'mail' => $mail,
    'pass' => $password,
  ];
  
    
  $pdo->prepare($sql)->execute([$fname,$sname,$mname,$phone,$mail,$city,$fname,$fname,$password]);
  //$query->execute($data);
}

catch (PDOException $e) {
  // Если есть ошибка соединения или выполнения запроса, выводим её
  print "Ошибка!: " . $e->getMessage() . "<br/>";
}
*/
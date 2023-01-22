<?php
include "databaseconnect.php"

//$result = mysqli_query($induction, "select * from library.publisher")
//$food = mysqli_fetch_assoc($result)
//print_r($food);
?>

<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Демо Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1>Привет мир!</h1>
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Раскрывающийся список
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Элемент Раскрывающегося списка</a></li>
          <li><a class="dropdown-item" href="#">Элемент Раскрывающегося списка</a></li>
          <li><a class="dropdown-item" href="#">Элемент Раскрывающегося списка</a></li>
        </ul>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
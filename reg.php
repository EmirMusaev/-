<!DOCTYPE html>

<?php

include ("db/db.php");

if (isset($_POST['fname']) && isset($_POST['sname']) && isset($_POST['mname']) && isset($_POST['phone']) && isset($_POST['mail'])&& isset($_POST['city']) && isset($_POST['street']) && isset($_POST['class']) && isset($_POST['password']) ){
  $fname = $_POST['fname'];
  $sname = $_POST['sname'];
  $mname = $_POST['mname'];
  $phone = $_POST['phone'];
  $mail = $_POST['mail'];
  $city = $_POST['city'];
  $street = $_POST['street'];
  $class = $_POST['class'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  try{

    $data = [
      'name' => $fname,
      'surname' => $sname,
      'middleName' => $mname,
      'phone' => $phone,
      'mail' => $mail,
      'city' => $city,
      'street' => $fname,
      'homeNum' => $fname,
      'pass' => $password,
    ];
    $sql = "insert into Readers (name, surname, middlename, phone, mail, city, street, homenum, pass) values (?,?,?,?,?,?,?,?,?)";
      
    $pdo->prepare($sql)->execute([$fname,$sname,$mname,$phone,$mail,$city,$fname,$fname,$password]);
    //$query->execute($data);
}

  catch (PDOException $e) {
    // Если есть ошибка соединения или выполнения запроса, выводим её
    print "Ошибка!: " . $e->getMessage() . "<br/>";
}

}



//$fname,$sname,$mname,$phone,$mail,$city,$fname,$fname,$password
//:fname,:sname,:mname,:phone,:mail,:city,:street,:class,:password

?>

<html style="font-size: 16px;" lang="ru"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Мир знаний">
    <meta name="description" content="">
    <title>Регистрация</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="reg.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#ec8700">
    <meta property="og:title" content="Регистрация">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-overlap u-overlap-contrast u-overlap-transparent u-xl-mode" data-lang="ru">
    <header class="u-border-1 u-border-grey-5 u-clearfix u-header u-sticky u-sticky-4d5e" id="sec-e22e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-body-alt-color u-text-default u-text-1">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-active-grey-5 u-text-body-alt-color u-text-hover-grey-15 u-btn-1" href="main.php"> Мир знаний</a>
        </h1>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse u-custom-font u-font-montserrat" style="font-size: 1.125rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
              </svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                <g>
                  <rect y="1" width="16" height="2"></rect>
                  <rect y="7" width="16" height="2"></rect>
                  <rect y="13" width="16" height="2"></rect>
                </g>
              </svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-custom-font u-font-montserrat u-nav u-spacing-30 u-unstyled u-nav-1">
              <li class="u-nav-item">
                <a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-dark-2 u-text-hover-palette-2-base u-text-white" href="about.php" style="padding: 10px 24px;">О нас</a>
              </li>
              <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-dark-2 u-text-hover-palette-2-base u-text-white" href="service.php" style="padding: 10px 24px;">Сервис</a>
              </li>
            </li>
            <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-dark-2 u-text-hover-palette-2-base u-text-white" href="book.php"  style="padding: 10px 24px;">Книги</a>
            </li>
              <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-dark-2 u-text-hover-palette-2-base u-text-white" href="contact.php" style="padding: 10px 24px;">Контакты</a>

              <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-dark-2 u-text-hover-palette-2-base u-text-white" rel="nofollow" style="padding: 10px 24px;">Вход</a>
                <div class="u-nav-popup">
                  <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link u-white" href="enter.php" target="_blank">Авторизация</a>
                    </li>
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link u-white" href="reg.php" target="_blank">Регистрация</a>
                    </li>
                  </ul>
              </div>
              </li>
            </ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3">
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="about.php">О нас</a>
                  </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="service.php">Сервис</a>
                  </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="contact.php">Контакты</a>
                  </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="book.php">Книги</a>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link" rel="nofollow">Вход</a>
                      <div class="u-nav-popup">
                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                          <li class="u-nav-item">
                            <a class="u-button-style u-nav-link" href="enter.php" target="_blank">Авторизация</a>
                          </li>
                          <li class="u-nav-item">
                            <a class="u-button-style u-nav-link" href="reg.php" target="_blank">Регистрация</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </li>
                </ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div>
    </header>
    <section class="u-clearfix u-image u-shading u-section-1" id="sec-de74" data-image-width="1513" data-image-height="1080">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-border-11 u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-container-style u-custom-border u-expanded-width-xs u-grey-15 u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-valign-bottom u-container-layout-1">
            <div class="u-form u-login-control u-form-1">
              <form action="reg.php" method="post" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 0px;">
                <div class="u-form-group u-form-name u-label-top">
                  <label for="username-a30d" class="u-custom-font u-font-montserrat u-label u-label-1">Имя</label>
                  <input type="text" placeholder="Введите имя" id="name-a30d" name="fname" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-white u-input-1" required="">
                </div>
                <div class="u-form-group u-form-password u-label-top">
                  <label for="password-a30d" class="u-custom-font u-font-montserrat u-label u-label-2">Фамилия</label>
                  <input type="text" placeholder="Введите фамилию" id="password-a30d" name="sname" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-white u-input-2" required="">
                </div>
                <div class="u-form-group u-form-password u-label-top">
                  <label for="password-a30d" class="u-custom-font u-font-montserrat u-label u-label-2">Отчество</label>
                  <input type="text" placeholder="Введите отчество" id="password-a30d" name="mname" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-white u-input-2" required="">
                </div>
                <div class="u-form-group u-form-password u-label-top">
                  <label for="password-a30d" class="u-custom-font u-font-montserrat u-label u-label-2">Телефон</label>
                  <input type="text" placeholder="Введите телефон" id="password-a30d" name="phone" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-white u-input-2" required="">
                </div>
                <div class="u-form-group u-form-password u-label-top">
                  <label for="password-a30d" class="u-custom-font u-font-montserrat u-label u-label-2">Почта</label>
                  <input type="text" placeholder="Введите почту" id="password-a30d" name="mail" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-white u-input-2" required="">
                </div>
                <div class="u-form-group u-form-password u-label-top">
                  <label for="password-a30d" class="u-custom-font u-font-montserrat u-label u-label-2">Город</label>
                  <input type="text" placeholder="Введите город" id="password-a30d" name="city" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-white u-input-2" required="">
                </div>
                <div class="u-form-group u-form-password u-label-top">
                  <label for="password-a30d" class="u-custom-font u-font-montserrat u-label u-label-2">Улица</label>
                  <input type="text" placeholder="Введите улицу" id="password-a30d" name="street" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-white u-input-2" required="">
                </div>
                <div class="u-form-group u-form-password u-label-top">
                  <label for="password-a30d" class="u-custom-font u-font-montserrat u-label u-label-2">Квартира</label>
                  <input type="text" placeholder="Введите номер кваритиры, литера, корпус" id="password-a30d" name="class" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-white u-input-2" required="">
                </div>
                <div class="u-form-group u-form-password u-label-top">
                  <label for="password-a30d" class="u-custom-font u-font-montserrat u-label u-label-2">Пароль</label>
                  <input type="text" placeholder="Введите пароль" id="password-a30d" name="password" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-white u-input-2" required="">
                </div>
                <div class="u-align-left u-form-group u-form-submit u-label-top">
                  <input type="submit" value="submit" class="u-form-control-hidden" name="regbt">
                  <a href="#" class="u-active-white u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-white u-palette-2-base u-radius-50 u-text-active-palette-2-base u-text-hover-palette-2-base u-btn-1">Регистрация</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-8fa0"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Пример текста. Кликните, чтобы выбрать элемент "Текст".</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/html-templates" target="_blank">
        <span>HTML Template</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  
</body></html>
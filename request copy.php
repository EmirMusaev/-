<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Мир знаний">
    <meta name="description" content="">
    <title>Заявка</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="req.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <meta name="theme-color" content="#ec8700">
    <meta property="og:title" content="Заявка">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-overlap u-overlap-contrast u-xl-mode" data-lang="ru">
    
    <?php 
    
    include("head.php");
    include ("db/db.php");


    ?>
    
    <section class="u-clearfix u-image u-shading u-section-1" id="sec-de74" data-image-width="1513" data-image-height="1080">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-border-11 u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-container-style u-custom-border u-expanded-width-xs u-grey-15 u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-valign-bottom u-container-layout-1">
            <div class="u-form u-login-control u-form-1">
              <form action="request.php" method="post" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 0px;">
                
              <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
              ?> 
              
              <div class="u-form-group u-form-name u-label-top">
                  <label for="username-a30d" class="u-custom-font u-font-montserrat u-label u-label-1">Почта</label>
                  <input type="text" placeholder="Введите почту" id="username-a30d" name="mail" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-white u-input-1" required="">
                </div>
                <div class="u-form-group u-form-password u-label-top">
                  <label for="password-a30d" class="u-custom-font u-font-montserrat u-label u-label-2">Телефон</label>
                  <input type="text" placeholder="Введите пароль" id="password-a30d" name="password" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-white u-input-2" required="">
                </div>
                <div class="u-form-group u-form-comment u-label-top">
                  <label for="password-a30d" class="u-custom-font u-font-montserrat u-label u-label-2">Комментарий</label>
                  <input type="text" placeholder="Какие книги вы хотели бы заказать?" id="password-a30d" name="password" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-white u-input-2" required="">
                  <label for="comment-a30d" class="u-custom-font u-font-montserrat u-label u-label-3">Перечислите номера книг и их количество</label>
                </div>
                <div class="u-align-left u-form-group u-form-submit u-label-top">
                  <input type="submit" value="submit" class="u-form-control-hidden">
                  <a href="#" class="u-active-white u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-white u-palette-2-base u-radius-50 u-text-active-palette-2-base u-text-hover-palette-2-base u-btn-1">Отправить заявку</a>
                </div>
              </form>
            </div>
            <div class="u-align-center-xs u-container-style u-expanded-width u-group u-white u-group-2">
              <div class="u-container-layout u-container-layout-2">
                <a href="main.php" class="u-border-1 u-border-active-palette-2-light-2 u-border-hover-palette-2-light-2 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-dialog-link u-login-control u-login-create-account u-none u-text-active-palette-2-light-2 u-text-hover-palette-2-light-2 u-text-palette-2-base u-btn-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Отменить заявку<br>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <?php     include ("footer.php"); ?>


</body>


</html>
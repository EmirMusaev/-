<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Добавление книги</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="add.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Главная">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-overlap u-xl-mode" data-lang="ru">
  <?php 
    
    include("head.php");
    include ("db/db.php");
    ?>
        <a href="https://nicepage.com" class="u-image u-logo u-image-1">
          <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Главная.html" style="padding: 10px 20px;">Главная</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="О-нас.html" style="padding: 10px 20px;">О нас</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Контакты.html" style="padding: 10px 20px;">Контакты</a>
</li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Главная.html">Главная</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="О-нас.html">О нас</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Контакты.html">Контакты</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div><style class="u-sticky-style" data-style-id="2f3b">.u-sticky-fixed.u-sticky-2f3b:before, .u-body.u-sticky-fixed .u-sticky-2f3b:before 
      {
borders: top right bottom left !important; border-color: #404040 !important; border-width: 2px !important
}</style></header>
    <section class="u-align-center u-clearfix u-image u-section-1" id="sec-4f85" data-image-width="2000" data-image-height="1333">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-grey-15 u-form-1">
          <form action="https://forms.nicepagesrv.com/Form/Process" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 15px;" source="email" name="form">
            <div class="u-form-group u-form-name u-label-top u-form-group-1">
              <label for="name-6797" class="u-custom-font u-font-montserrat u-label">ISBN</label>
              <input type="text" placeholder="Код книги" id="name-6797" name="name" class="u-border-1 u-border-black u-input u-input-rectangle u-white u-input-1" required="">
            </div>
            <div class="u-form-email u-form-group u-label-top u-form-group-2">
              <label for="email-6797" class="u-custom-font u-font-montserrat u-label">Название</label>
              <input type="email" placeholder="Название книги" id="email-6797" name="email" class="u-border-1 u-border-black u-input u-input-rectangle u-white u-input-2" required="">
            </div>
            <div class="u-form-group u-label-top u-form-group-3">
              <label for="text-ccc5" class="u-custom-font u-font-montserrat u-label u-label-3">Дата</label>
              <input type="text" placeholder="Дата написания" id="text-ccc5" name="text" class="u-border-1 u-border-black u-input u-input-rectangle u-white u-input-3">
            </div>
            <div class="u-form-group u-label-top u-form-group-4">
              <label for="text-a3cd" class="u-custom-font u-font-montserrat u-label">Страниц</label>
              <input type="text" placeholder="Количество страниц" id="text-a3cd" name="text-2" class="u-border-1 u-border-black u-input u-input-rectangle u-white u-input-4">
            </div>
            <div class="u-form-group u-label-top u-form-group-5">
              <label for="text-26bc" class="u-custom-font u-font-montserrat u-label">Стоимость</label>
              <input type="text" placeholder="В руб." id="text-26bc" name="text-1" class="u-border-1 u-border-black u-input u-input-rectangle u-white u-input-5">
            </div>
            <div class="u-form-group u-label-top u-form-group-6">
              <label for="text-5df5" class="u-custom-font u-font-montserrat u-label">Количество</label>
              <input type="text" placeholder="Количество экземпляров" id="text-5df5" name="text-3" class="u-border-1 u-border-black u-input u-input-rectangle u-white u-input-6">
            </div>
            <div class="u-form-group u-label-top u-form-group-7">
              <label for="text-3e7c" class="u-custom-font u-font-montserrat u-label">Описание</label>
              <input type="text" placeholder="Сюжет?" id="text-3e7c" name="text-4" class="u-border-1 u-border-black u-input u-input-rectangle u-white u-input-7">
            </div>
            <div class="u-form-group u-label-top u-form-group-8">
              <label for="text-a773" class="u-custom-font u-font-montserrat u-label">Автор</label>
              <input type="text" placeholder="Фамилия имя отчество автор" id="text-a773" name="text-5" class="u-border-1 u-border-black u-input u-input-rectangle u-white u-input-8">
            </div>
            <div class="u-form-group u-label-top u-form-group-9">
              <label for="text-32d3" class="u-custom-font u-font-montserrat u-label">Публицист</label>
              <input type="text" placeholder="Название издательства" id="text-32d3" name="text-6" class="u-border-1 u-border-black u-input u-input-rectangle u-white u-input-9">
            </div>
            <div class="u-align-left u-form-group u-form-submit u-label-top u-form-group-10">
              <a href="#" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-palette-3-light-2 u-radius-21 u-btn-1">Записать<br>
              </a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
            <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
            <input type="hidden" value="" name="recaptchaResponse">
            <input type="hidden" name="formServices" value="1868e1c55e6d69e8e891349dcd916b9c">
          </form>
        </div>
      </div>
    </section>
    <?php     include ("footer.php"); ?>
    </section>
  
</body></html>
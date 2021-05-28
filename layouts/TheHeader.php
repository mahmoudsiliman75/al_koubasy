<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- START:: INCLUDING FONTAWESOME STYLE FILE -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <!-- END:: INCLUDING FONTAWESOME STYLE FILE -->

  <!-- START:: INCLUDING  LIGHT BOX STYLE FILE -->
  <link rel="stylesheet" href="assets/css/lightbox.css">
  <!-- END:: INCLUDING  LIGHT BOX STYLE FILE -->

  <!-- START:: INCLUDING OWL CAROUSEL STYLE FILES -->
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <!-- END:: INCLUDING OWL CAROUSEL STYLE FILES -->

  <!-- START:: INCLUDING BOOTSTRAP STYLE FILE -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- END:: INCLUDING BOOTSTRAP STYLE FILE -->

  <!-- START:: INCLUDING FLEX SLIDER STYLE FILE -->
  <link rel="stylesheet" href="assets/css/flexslider.css">
  <!-- END:: INCLUDING FLEX SLIDER STYLE FILE -->

  <!-- START:: INCLUDING BOOTSTRAP SELECT STYLE FILE -->
  <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
  <!-- END:: INCLUDING BOOTSTRAP SELECT STYLE FILE -->

  <!-- START:: INCLUDING WOW JS STYLE FILE -->
  <link rel="stylesheet" href="assets/css/animate.css">
  <!-- END:: INCLUDING WOW JS STYLE FILE -->

  <!-- START:: INCLUDING MAIN STYLE FILE -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- <link rel="stylesheet" href="assets/css/ar-style.css"> -->
  <!-- END:: INCLUDING MAIN STYLE FILE -->

  <!-- START:: SET FAV ICON -->
  <link rel="icon" href="assets/media/logo.png">
  <!-- END:: SET FAV ICON -->

  <title> Al Koubasy </title>
</head>
<body>

<!-- START:: LARGE SCREENS NAVBAR -->
<nav class="d-flex justify-content-between align-items-center">
  <!-- START:: SEARCH BOX -->
  <div class="search_btn_wraper px-1 px-md-5">
    <span id="search_trigger">
      <i class="fas fa-search fa-2x"></i>
    </span>
  </div>

  <div id="search_form_wraper" class="search_form_wraper">
    <form>
      <div class="wraper">
        <input type="text" class="form-control" name="search" aria-describedby="search">
        <button type="submit" class="btn">
          <i class="fas fa-search fa-lg"></i>
        </button>
      </div>
    </form>

    <button id="close_form_btn" class="btn close_form_btn">
      <i class="fas fa-times fa-lg"></i>
    </button>
  </div>
  <!-- END:: SEARCH BOX -->

  <!-- START:: NAV LINKS -->
  <div class="nav-links">
    <ul class="list-unstyled d-flex align-items-center justify-content-center mb-0">
      <li class="active"> 
        <a href="index.php"> Home </a>
      </li>

      <li> 
        <a href="AboutUs.php"> About Us </a>
      </li>

      <li> 
        <a href="Faq.php"> FAQs </a>
      </li>

      <li> 
        <a href="AllProducts.php"> Products </a>
      </li>

    </ul>
  </div>
  <!-- START:: NAV LINKS -->

  <!-- START:: THE LOGO -->
  <div class="site-logo">
    <a href="index.php">
      <img src="assets/media/logo.png" alt="The Logo">
    </a>
  </div>
  <!-- END:: THE LOGO -->

  <!-- START:: NAV LINKS -->
  <div class="nav-links">
    <ul class="list-unstyled d-flex align-items-center justify-content-center mb-0">
      <li> 
        <a href="Quality.php"> Quality </a>
      </li>

      <li> 
        <a href="Media.php"> Media </a>
      </li>

      <li> 
        <a href="Carrers.php"> Carrers </a>
      </li>

      <li> 
        <a href="ContactUs.php"> Contact Us </a>
      </li>

      <!-- <li> 
        <a href="UserProfile.php"> Profile </a>
      </li> -->

    </ul>
  </div>
  <!-- START:: NAV LINKS -->

  <div class="menu_btns d-flex align-items-center">
    <!-- START:: LANG BUTTON -->  
    <span class="lang_btn mx-2">     
      <a href="#"> 
        <i class="fas fa-globe-africa fa-lg"></i>
        <span class="en">E</span> 
        <span class="ar">ع</span> 
      </a>
    </span>
    <!-- END:: LANG BUTTON -->

    <!-- START:: ACCOUNT LINK -->
    <span class="account_link mx-2">     
      <a href="UserProfile.php"> 
        <i class="fas fa-user fa-lg"></i>
        Account 
      </a>
    </span>
    <!-- END:: ACCOUNT LINK -->

    <!-- START:: LOGIN BUTTON -->
    <span class="login_btn mx-2"> 
      <a href="auth.php"> 
        <i class="fas fa-sign-in-alt fa-lg"></i> 
        login
      </a>
    </span>
    <!-- END:: LOGIN BUTTON -->

    <!-- START:: CART BUTTON -->
    <div class="cart_btn mx-2">
      <a href="UserCart.php">
        <span class="badge badge-pill badge-danger">2</span>
        <i class="fas fa-shopping-cart fa-lg"></i>
      </a>

      <span> Cart </span>
    </div>
    <!-- END:: CART BUTTON -->

    <!-- START:: MENU BUTTON -->
    <button id="open_menu" class="menu_btn mx-2">
      <i class="fas fa-bars"></i>
    </button>
    <!-- END:: MENU BUTTON -->
  </div>
</nav>
<!-- END:: LARGE SCREENS NAVBAR -->

<!-- START:: SMALL SCREENS MENU -->
<div class="small_menu">
  <div class="btn_box">
    <button id="colse_menu">
      <i class="far fa-times-circle"></i>
    </button>
  </div>

  <ul class="list-unstyled mb-0">
    <li class="active"> 
      <a href="index.php"> Home </a>
    </li>

    <li> 
      <a href="AboutUs.php"> About Us </a>
    </li>

    <li> 
      <a href="Faq.php"> FAQs </a>
    </li>

    <li> 
      <a href="AllProducts.php"> Product </a>
    </li>

    <li> 
      <a href="Quality.php"> Quality </a>
    </li>

    <li> 
      <a href="Media.php"> Media </a>
    </li>

    <li> 
      <a href="AllVideos.php"> Videos </a>
    </li>

    <li> 
      <a href="Carrers.php"> Carrers </a>
    </li>

    <li> 
      <a href="ContactUs.php"> Contact Us </a>
    </li>

    <li> 
      <a href="UserProfile.php"> Profile </a>
    </li>
  </ul>
</div>
<!-- END:: SMALL SCREENS MENU -->

<!-- START:: PRE LOADER -->
<div class="pre_loader">
  <img src="assets/media/logo.png">
  <div class="spinner">
    <div class="rect1"></div>
    <div class="rect2"></div>
    <div class="rect3"></div>
    <div class="rect4"></div>
    <div class="rect5"></div>
  </div>
</div>
<!-- END:: PRE LOADER -->
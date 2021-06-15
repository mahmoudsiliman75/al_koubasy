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
  <link rel="stylesheet" href="assets/css/ar-style.css">
  <!-- END:: INCLUDING MAIN STYLE FILE -->

  <!-- START:: SET FAV ICON -->
  <link rel="icon" href="assets/media/logo.png">
  <!-- END:: SET FAV ICON -->

  <title> Al Koubasy </title>
</head>
<body>

<!-- START:: LARGE SCREENS NAVBAR -->
<nav class="d-flex flex-wrap justify-content-center justify-content-md-between align-items-center">
  <!-- START:: SEARCH BOX -->
  <!-- <div class="search_btn_wraper mx-2 mx-md-0 px-1 px-md-5">
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
  </div> -->
  <!-- END:: SEARCH BOX -->

  <div class="col-12 row justify-content-center align-items-center">  
    <!-- START:: THE LOGO -->
    <div class="col-6 col-md-3 order-md-1 d-flex justify-content-start align-items-center">
      <div class="site-logo mx-2 mx-md-0">
        <a href="index.php">
          <img src="assets/media/logo.png" alt="The Logo">
        </a>
      </div>
    </div>
    <!-- END:: THE LOGO -->

    <!-- START:: SEARCH FORM -->
    <div class="col-12 col-md-6 order-3 order-md-2 mb-4 mb-md-0">
      <form class="search_form">
        <div class="form-group p-1 mb-0">
          <label for="search_input" class="m-0">
            <i class="fas fa-search fa-lg"></i>
          </label>
          <input type="text" placeholder="Search...." class="form-control" id="search_input">
          <button class="btn"> Search </button>
        </div>
      </form>
    </div>
    <!-- END:: SEARCH FORM -->

    <div class="col-6 col-md-3 order-md-3 d-flex justify-content-end align-items-center">
      <div class="menu_btns d-flex align-items-center">
        <!-- START:: LANG BUTTON -->  
        <span class="lang_btn mx-2">     
          <a href="#"> 
            <img src="assets/media/icons/usa.svg" class="en">
            <span class="en">E</span> 

            <img src="assets/media/icons/egypt.svg" class="ar">
            <span class="ar">ع</span> 
          </a>
        </span>
        <!-- END:: LANG BUTTON -->
  
        <!-- START:: ACCOUNT MENU -->
        <div class="dropdown">
          <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="account_link mx-2">     
              <a href="UserProfile.php"> 
                <img src="assets/media/icons/user.svg">
                Account 
              </a>
            </span>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="UserProfile.php">
              <img src="assets/media/icons/bookmark.svg">
              Profile
            </a>
            <a class="dropdown-item" href="auth.php">
              <img src="assets/media/icons/login.svg">
              Login
            </a>
          </div>
        </div>
        <!-- END:: ACCOUNT MENU -->
  
        <!-- START:: CART BUTTON -->
        <div class="cart_btn mx-2">
          <a href="UserCart.php">
            <span class="badge badge-pill badge-danger">2</span>
            <img src="assets/media/icons/shopping_bag.svg">
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
    </div>

    <div class="col-12 mb-3 order-md-4">
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

          <li> 
            <a href="Quality.php"> Quality </a>
          </li>

          <li> 
            <a href="Media.php"> Media </a>
          </li>

          <li> 
            <a href="Careers.php"> Our Team </a>
          </li>

          <li> 
            <a href="ContactUs.php"> Contact Us </a>
          </li>

        </ul>
      </div>
      <!-- START:: NAV LINKS -->
    </div>
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
      <a href="Careers.php"> Our Team </a>
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
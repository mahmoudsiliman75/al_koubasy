<!-- START:: INCLUDING THE HEADER -->
<?php include('./layouts/TheHeader.php')?>
<!-- END:: INCLUDING THE HEADER -->

<!-- START:: HEDAER IMAGE SECTION -->
<div class="header_img_wraper">
  <img src="assets/media/pic16.jpg" alt="Intro Img">

  <!-- START:: SECTION SPIKES -->
  <section class="spikes"></section>
  <!-- END:: SECTION SPIKES -->
</div>
<!-- END:: HEDAER IMAGE SECTION -->

<!-- START:: AUTH PAGE -->
<div class="auth_forms_wraper">
  <div class="container">
    <div class="row justify-content-center">

      <div id="login_form_wraper" class="col-11 col-md-6">
        <div class="header_wraper">
          <h2> Login </h2>
        </div>

        <form action="" class="login">

          <div class="form_overlay">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email Or Usename">
            </div>

            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password">
            </div>

            <div class="btn_box">
              <button> Sign In </button>
            </div>

            <div class="btn_box">
              <span id="show_register"> 
                Dont't Have An Account? Register Now
              </span>
            </div>

            <div class="btn_box">
              <span id="show_reset"> 
                Forget Your Password?
              </span>
            </div>
          </div>
        </form>
      </div>

      <div id="signup_form_wraper" class="col-11 col-md-6" style="display: none;">
        <div class="header_wraper">
          <h2> Registration </h2>
        </div>

        <form action="" class="sign_up">

          <div class="form_overlay">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Usename">
            </div>

            <div class="form-group">
              <input type="tele" class="form-control" placeholder="Phone Number">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" placeholder="Address">
            </div>

            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password">
            </div>

            <div class="form-group">
              <input type="password" class="form-control" placeholder="Confirm Password">
            </div>

            <div class="btn_box">
              <button> Sign Up </button>
            </div>

            <div class="form-group mb-0 d-flex flex-column justify-content-center align-items-center">
              <p> Or Enter With </p>
              <ul class="list-unstyled">
                <li> 
                  <a href="#">
                    <img src="assets/media/icons/facebook.png">
                  </a> 
                </li>
                <li> 
                  <a href="#">
                    <img src="assets/media/icons/instagram.png">
                  </a> 
                </li>
                <li> 
                  <a href="#">
                    <img src="assets/media/icons/youtube.png">
                  </a> 
                </li>
                <li> 
                  <a href="#">
                    <img src="assets/media/icons/twitter.png">
                  </a> 
                </li>
              </ul>
            </div>

            <a href="auth.php" class="back_link"> Back </a>
          </div>
        </form>
      </div>

      <div id="reset_form_wraper" class="col-11 col-md-6" style="display: none;">
        <div class="header_wraper">
          <h2> Reset Password </h2>
        </div>

        <form action="" class="reset">

          <div class="form_overlay">
            <div class="form-group">
              <input type="mail" class="form-control" placeholder="Enter An Email">
            </div>

            <div class="btn_box">
              <button> send confirmation </button>
            </div>

            <a href="auth.php" class="back_link"> Back </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- END:: AUTH PAGE -->


<!-- START:: INCLUDING THE FOOTER -->
<?php include('./layouts/TheFooter.php')?>
<!-- END:: INCLUDING THE FOOTER -->
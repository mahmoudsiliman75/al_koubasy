<!-- START:: INCLUDING THE HEADER -->
<?php include('./layouts/TheHeader.php')?>
<!-- END:: INCLUDING THE HEADER -->

<div class="container-fluid">
  <div class="row">
    <!-- START:: PAGE CONTENT SECTION -->
    <div class="col-12 col-md-10 page_content_wraper">
      <div class="header_wraper">
        <h2> Edit Your Info </h2>
      </div>

      <div class="row justify-content-center">
        <div class="col-10 col-md-8">
          <form action="" class="sign_up">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path fill="#D0AF85" d="M44.5,-48.5C55.3,-43.9,60.3,-27.7,60.5,-12.7C60.7,2.3,56.2,16.1,50,30.8C43.8,45.5,35.9,61.2,23.6,66.3C11.3,71.5,-5.4,66.1,-16.8,57.2C-28.1,48.2,-34.2,35.7,-40.7,23.8C-47.2,11.9,-54.2,0.5,-57.8,-15.5C-61.3,-31.5,-61.3,-52.3,-51.1,-57C-40.9,-61.7,-20.4,-50.5,-1.8,-48.3C16.8,-46.1,33.6,-53.1,44.5,-48.5Z" transform="translate(100 100)" />
            </svg>

            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path fill="#D0AF85" d="M44.5,-48.5C55.3,-43.9,60.3,-27.7,60.5,-12.7C60.7,2.3,56.2,16.1,50,30.8C43.8,45.5,35.9,61.2,23.6,66.3C11.3,71.5,-5.4,66.1,-16.8,57.2C-28.1,48.2,-34.2,35.7,-40.7,23.8C-47.2,11.9,-54.2,0.5,-57.8,-15.5C-61.3,-31.5,-61.3,-52.3,-51.1,-57C-40.9,-61.7,-20.4,-50.5,-1.8,-48.3C16.8,-46.1,33.6,-53.1,44.5,-48.5Z" transform="translate(100 100)" />
            </svg>

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
                <input type="password" class="form-control" placeholder="New Password">
              </div>

              <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirm New Password">
              </div>

              <div class="btn_box">
                <button> Save Changes </button>
              </div>
            </div>
          </form>
        </div>
      </div>


    </div>
    <!-- END:: PAGE CONTENT SECTION -->

    <!-- START:: INCLUDING USER PROFILE MENU -->
    <?php include('./layouts/UserProfileMenu.php')?>
    <!-- END:: INCLUDING USER PROFILE MENU -->
  </div>
</div>

<!-- START:: INCLUDING THE FOOTER -->
<?php include('./layouts/TheFooter.php')?>
<!-- END:: INCLUDING THE FOOTER -->
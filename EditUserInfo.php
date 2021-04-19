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
        <div class="col-10">
          <form action="" class="edit_info">
            <div class="row">
              <div class="form-group col-12 col-md-6">
                <input type="text" class="form-control" placeholder="Usename">
              </div>

              <div class="form-group col-12 col-md-6">
                <input type="tele" class="form-control" placeholder="Phone Number">
              </div>

              <div class="form-group col-12 col-md-6">
                <input type="text" class="form-control" placeholder="Address">
              </div>

              <div class="form-group col-12 col-md-6">
                <input type="email" class="form-control" placeholder="Email">
              </div>

              <div class="form-group col-12">
                <input type="password" class="form-control" placeholder="New Password">
              </div>

              <div class="form-group col-12">
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
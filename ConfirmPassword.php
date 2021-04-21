<!-- START:: INCLUDING THE HEADER -->
<?php include('layouts/TheHeader.php')?>
<!-- END:: INCLUDING THE HEADER -->

<!-- START:: CHANGE PASSWORD FORM -->
<div class="reset_password">
  <div class="container d-flex flex-column justify-content-center align-items-center">
    <div class="header_wraper mb-3">
      <h2> Confirm Password </h2>
    </div>

    <div class="form_wraper col-12 col-md-6 wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="0.3s">
      <form action="">

        <div class="form-group my-4">
          <label for="email"> Email </label>
          <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="btn_wraper mt-4">
          <button type="button"> Submit </button>
        </div>

      </form>
    </div>
  </div>
</div>
<!-- END:: CHANGE PASSWORD FORM -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include('layouts/TheFooter.php')?>
<!-- END:: INCLUDING THE FOOTER -->
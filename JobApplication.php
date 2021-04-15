<!-- START:: INCLUDING THE HEADER -->
<?php include('layouts/TheHeader.php')?>
<!-- END:: INCLUDING THE HEADER -->

<!-- START:: JOB APPLICATION SECTION -->
<div class="job_application">
  <div class="container">
    <div class="row justify-content-center">
      <div class="form_wraper col-12 col-md-6">
        <div class="header_wraper mb-4">
          <h3> Job Application </h3>
        </div>
        <form action="">

          <div class="form-group my-4">
            <label for="full_name"> Full Name </label>
            <input type="text" class="form-control" id="full_name">
          </div>

          <div class="form-group my-4">
            <label for="email_id"> Email ID </label>
            <input type="text" class="form-control" id="email_id">
          </div>

          <div class="form-group my-4">
            <label for="job_title"> Current Job Title </label>
            <input type="text" class="form-control" id="job_title">
          </div>

          <div class="form-group my-4">
            <label for="job_location"> Current Job Location </label>
            <input type="text" class="form-control" id="job_location">
          </div>

          <div class="form-group my-4">
            <label for="qualifications"> Qualification </label>
            <select id="qualifications" class="selectpicker form-control">
              <option value="1" class="option">Item 1</option>
              <option value="2" class="option">Item 1</option>
            </select>
          </div>

          <div class="form-group my-4">
            <label for="years"> Years Of Experience </label>
            <select id="years" class="selectpicker form-control">
              <option value="1" class="option">Item 1</option>
              <option value="2" class="option">Item 1</option>
            </select>
          </div>

          <div class="form-group my-4">
            <label for="cv"> Upload Cv </label>
            <input type="file" id="cv" class="form-control p-1"> 
          </div>

          <div class="btn_wraper mt-4">
            <button type="button"> Submit application </button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
<!-- END:: JOB APPLICATION SECTION -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include('layouts/TheFooter.php')?>
<!-- END:: INCLUDING THE FOOTER -->
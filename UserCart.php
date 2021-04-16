<!-- START:: INCLUDING THE HEADER -->
<?php include('./layouts/TheHeader.php')?>
<!-- END:: INCLUDING THE HEADER -->

<div class="container-fluid">
  <div class="row">
    <!-- START:: PAGE CONTENT SECTION -->
    <div class="col-12 col-md-10 page_content_wraper">
      <div class="header_wraper">
        <h2> My Cart </h2>
      </div>

      <table class="table table-hover text-center">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col"> Product </th>
            <th scope="col"> Amount </th>
            <th scope="col"> price </th>
            <th scope="col"> Action </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td> Product 1 </td>
            <td> 
              <span>
                <button class="btn"> 
                  <i class="fas fa-plus text-primary"></i>
                </button>
              </span>
              <span> 1 </span>
              <span>
                <button class="btn"> 
                  <i class="fas fa-minus text-warning"></i>
                </button>
              </span>
            </td>
            <td> 250 EGP </td>
            <td>
              <button class="btn"> 
                <i class="fas fa-trash-alt text-danger fa-lg"></i>
              </button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td> Product 2 </td>
            <td> 
              <span>
                <button class="btn"> 
                  <i class="fas fa-plus text-primary"></i>
                </button>
              </span>
              <span> 4 </span>
              <span>
                <button class="btn"> 
                  <i class="fas fa-minus text-warning"></i>
                </button>
              </span>
            </td>
            <td> 800 EGP </td>
            <td>
              <button class="btn"> 
                <i class="fas fa-trash-alt text-danger fa-lg"></i>
              </button>
            </td>
          </tr>
        </tbody>
      </table>

      <div class="caption_wraer d-flex justify-content-around">
        <h5> <span> Total Price: </span> 1050 EGP </h5>
        <button class="btn btn-success"> 
          <i class="fab fa-cc-visa fa-lg"></i>
          <span>Check Out</span> 
        </button>
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
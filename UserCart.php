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
            <th scope="col"> Size </th>
            <th scope="col"> Amount </th>
            <th scope="col"> price </th>
            <th scope="col"> Action </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td> Product 1 </td>
            <td> 3 </td>
            <td> 
              <span>
                <button class="btn plus_btn"> 
                  <i class="fas fa-plus text-primary"></i>
                </button>
              </span>

              <span class="amount"> 1 </span>

              <span>
                <button class="btn minus_btn"> 
                  <i class="fas fa-minus text-warning"></i>
                </button>
              </span>
            </td>
            <td> <span classs="amount_price">50</span> EGP </td>
            <td>
              <button class="btn"> 
                <i class="fas fa-trash-alt text-danger fa-lg"></i>
              </button>
            </td>
          </tr>

          <tr>
            <th scope="row">2</th>
            <td> Product 2 </td>
            <td> 1 </td>
            <td> 
              <span>
                <button class="btn plus_btn"> 
                  <i class="fas fa-plus text-primary"></i>
                </button>
              </span>

              <span class="amount"> 1 </span>

              <span>
                <button class="btn minus_btn"> 
                  <i class="fas fa-minus text-warning"></i>
                </button>
              </span>
            </td>
            <td classs="amount_price"> <span classs="amount_price">50</span> EGP </td>
            <td>
              <button class="btn"> 
                <i class="fas fa-trash-alt text-danger fa-lg"></i>
              </button>
            </td>
          </tr>
        </tbody>
      </table>

      <form class="caption_wraper d-flex align-items-center justify-content-center">
        <button class="btn checkout_btn"> 
          <span class="total_price text-success">
            100 EGP
          </span>

          <span class="check_out">
            <i class="fab fa-cc-visa fa-2x"></i>
          </span> 
        </button>

        <div class="form-group">
          <select id="type_selector" class="selectpicker" style="width: 40%">
            <option class="option">Payment Method</option>
            <option value="cash" class="option">Cash On Deliver</option>
            <option value="credit" class="option">Credit</option>
          </select>
        </div>
      </form>

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
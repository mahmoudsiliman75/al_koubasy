<!-- START:: INCLUDING THE HEADER -->
<?php include('layouts/TheHeader.php')?>
<!-- END:: INCLUDING THE HEADER -->

<div class="container-fluid">
  <div class="row">
    <!-- START:: PAGE CONTENT SECTION -->
    <div class="col-12 col-md-10 page_content_wraper">
      <div class="header_wraper">
        <h2> My Purchases </h2>
      </div>

      <table class="table table-hover text-center">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Product</th>
            <th scope="col">Price</th>
            <th scope="col">Payment Method</th>
            <th scope="col">Order Details</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Product 1</td>
            <td>$50.00</td>
            <td>Cash</td>
            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
          </tr>

          <tr>
            <th scope="row">2</th>
            <td>Product 2</td>
            <td>$50.00</td>
            <td>Credit</td>
            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
          </tr>

          <tr>
            <th scope="row">3</th>
            <td>Product 3</td>
            <td>$50.00</td>
            <td>Cash</td>
            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
          </tr>
        </tbody>
      </table>

      <!-- START:: PDF MODAL -->
      <div class="modal fade" id="pdf_modal" tabindex="-1" aria-labelledby="researchLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Book Name</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <embed src="https://drive.google.com/viewerng/viewer?url=http://www.africau.edu/images/default/sample.pdf?pid=explorer&efh=false&a=v&chrome=false&embedded=true" width="100%" height="450" type="application/pdf">
            </div>
          </div>
        </div>
      </div>
      <!-- END:: PDF MODAL -->

    </div>
    <!-- END:: PAGE CONTENT SECTION -->

    <!-- START:: INCLUDING USER PROFILE MENU -->
    <?php include('layouts/UserProfileMenu.php')?>
    <!-- END:: INCLUDING USER PROFILE MENU -->
  </div>
</div>

<!-- START:: INCLUDING THE FOOTER -->
<?php include('layouts/TheFooter.php')?>
<!-- END:: INCLUDING THE FOOTER -->
<!-- START:: INCLUDING THE HEADER -->
<?php include('layouts/TheHeader.php')?>
<!-- END:: INCLUDING THE HEADER -->

<!-- START:: HEDAER IMAGE SECTION -->
<div class="header_img_wraper">
  <img src="assets/media/pic20.jpg" alt="Intro Img">

  <!-- START:: SECTION SPIKES -->
  <section class="spikes"></section>
  <!-- END:: SECTION SPIKES -->
</div>
<!-- END:: HEDAER IMAGE SECTION -->

<!-- START:: PRODUCT INFO SECTION -->
<div class="product_info wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="0.3s">
  <div class="container-fluid">
    <div class="row">
      <div class="col-11 col-md-6">
        <div class="product_img_wraper">
          <img src="assets/media/pic18.jpg" alt="Product Image">
        </div>
      </div>

      <form class="col-12 col-md-6">
        <div class="row details_wraper">
          <div class="col-12 col-md-6">
            <div class="hedaer_wraper mb-3">
              <h3>Categories</h3>
            </div>

            <div class="product_cat mt-3">
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="fresh_fruits" disabled>
                <label class="form-check-label" for="fresh_fruits">Fresh Fruits</label>
              </div>

              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="fresh_Vegetables" checked disabled>
                <label class="form-check-label" for="fresh_Vegetables">Fresh Vegetables</label>
              </div>

              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="juices" disabled>
                <label class="form-check-label" for="juices">Juices</label>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6">
            <div class="hedaer_wraper mb-3">
              <h3>Order Details</h3>
            </div>

            <div class="form-group">
              <input type="number" min="1" placeholder="Quantity" class="form-control" id="quantity">
            </div>

            <div class="form-group">
              <select id="type_selector" class="selectpicker" style="width: 40%">
                <option class="option">Size</option>
                <option value="1" class="option">Item 1</option>
                <option value="2" class="option">Item 2</option>
                <option value="3" class="option">Item 3</option>
              </select>
            </div>
          </div>
        </div>

        <div class="actions_wraper">
          <div class="row justify-content-between">
            <div class="col-6 col-md-4 my-1">
              <span class="offer"> Offer: <span>35 EGP</span> </span>
              <span class="price"> 20 EGP </span>
            </div>

            <div class="col-6 col-md-4 my-1 text-center">
              <a href="ContactUs.php"> 
                Contact Us
              </a>
            </div>

            <div class="col-12 col-md-4 my-1 d-flex justify-content-center justify-content-md-end">
              <button> Add To Cart <i class="fas fa-cart-plus"></i> </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END:: PRODUCT INFO SECTION -->

<!-- START:: PRODUCT PRIEF SECTION -->
<div class="product_prief wow fadeInRightBig" data-wow-duration="1.5s" data-wow-delay="0.3s">
  <div class="container-fluid">
    <div class="header_wraper mb-3">
      <h3> Product Name </h3>
    </div>

    <div class="prief">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem obcaecati 
      distinctio nemo perspiciatis, quibusdam consequatur unde odit sequi at, 
      architecto exercitationem ratione quos laudantium consequuntur iste nostrum 
      praesentium. Corporis, veritatis.
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem obcaecati 
      distinctio nemo perspiciatis, quibusdam consequatur unde odit sequi at, 
      architecto exercitationem ratione quos laudantium consequuntur iste nostrum 
      praesentium. Corporis, veritatis.
    </div>
  </div>
</div>
<!-- END:: PRODUCT PRIEF SECTION -->

<!-- START:: HEIGHLIGHTS SECTION -->
<div class="heightlights">
  <div class="container-fluid">
    <div class="header_wraper mb-3">
      <h2 class="wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.9s"> Product Highlights </h2>
    </div>
    <div class="row justify-content-around justify-content-md-center overflow-hidden">
      <div class="col-5 col-md-4 my-3 wow fadeInDownBig" data-wow-duration="1.5s" data-wow-delay="0.3s">
        <div class="card flex-column">
          <div class="icon_wraper">
            <img src="assets/media/icons/hospital.png" alt="Icon 1">
          </div> 
          <div class="info_wraper mt-3">
            <h5 class="text-center"> Delivery Speed </h5>
          </div>
        </div>
      </div>

      <div class="col-5 col-md-4 my-3 wow fadeInDownBig" data-wow-duration="1.5s" data-wow-delay="0.3s">
        <div class="card flex-column">
          <div class="icon_wraper">
            <img src="assets/media/icons/clock.png" alt="Icon 1">
          </div> 
          <div class="info_wraper mt-3">
            <h5 class="text-center"> Expiration Date </h5>
          </div>
        </div>
      </div>

      <div class="col-5 col-md-4 my-3 wow fadeInDownBig" data-wow-duration="1.5s" data-wow-delay="0.3s">
        <div class="card flex-column">
          <div class="icon_wraper">
            <img src="assets/media/icons/idea.png" alt="Icon 1">
          </div> 
          <div class="info_wraper mt-3">
            <h5 class="text-center"> Product Quality </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END:: HEIGHLIGHTS SECTION -->

<!-- START:: RELATED PRODUCTS SECTION -->
<div class="related_products">
  <div class="container">
    <div class="header_wraper mb-3">
      <h2 class="wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.3s"> Related Products </h2>
    </div>

    <div class="row flex-column align-items-center justify-content-center mt-3 overflow-hidden">
      <div id="serv_products" class="owl-carousel owl-theme col-12 wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="0.3s">

        <div class="item">
          <a href="ProductDetails.php">
            <img src="assets/media/pic1.jpg" alt="Why Section Icon 1">
            <h5> 
              Product Name
            </h5>
            <i class="fas fa-angle-double-right"></i>
          </a>
        </div>

        <div class="item">
          <a href="ProductDetails.php">
            <img src="assets/media/pic2.jpg" alt="Why Section Icon 1">
            <h5> 
              Product Name
            </h5>
            <i class="fas fa-angle-double-right"></i>
          </a>
        </div>

        <div class="item">
          <a href="ProductDetails.php">
            <img src="assets/media/pic3.jpg" alt="Why Section Icon 1">
            <h5> 
              Product Name
            </h5>
            <i class="fas fa-angle-double-right"></i>
          </a>
        </div>

        <div class="item">
          <a href="ProductDetails.php">
            <img src="assets/media/pic4.jpg" alt="Why Section Icon 1">
            <h5> 
              Product Name
            </h5>
            <i class="fas fa-angle-double-right"></i>
          </a>
        </div>

        <div class="item">
          <a href="ProductDetails.php">
            <img src="assets/media/pic5.jpg" alt="Why Section Icon 1">
            <h5> 
              Product Name
            </h5>
            <i class="fas fa-angle-double-right"></i>
          </a>
        </div>

        <div class="item">
          <a href="ProductDetails.php">
            <img src="assets/media/pic6.jpg" alt="Why Section Icon 1">
            <h5> 
              Product Name
            </h5>
            <i class="fas fa-angle-double-right"></i>
          </a>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- END:: RELATED PRODUCTS SECTION -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include('layouts/TheFooter.php')?>
<!-- END:: INCLUDING THE FOOTER -->
<!-- START:: INCLUDING THE HEADER -->
<?php include('./layouts/TheHeader.php')?>
<!-- END:: INCLUDING THE HEADER -->

<!-- START:: HOME SLIDER -->
<div id="home_slider" class="carousel slide carousel-fade" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#home_slider" data-slide-to="0" class="active"></li>
    <li data-target="#home_slider" data-slide-to="1"></li>
    <li data-target="#home_slider" data-slide-to="2"></li>
    <li data-target="#home_slider" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/media/slider1.jpeg" class="d-block" alt="Slide 1">
    </div>
    <div class="carousel-item">
      <img src="assets/media/slider2.jpeg" class="d-block" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <img src="assets/media/slider3.jpeg" class="d-block" alt="Slide 3">
    </div>
    <div class="carousel-item">
      <img src="assets/media/slider4.jpeg" class="d-block" alt="Slide 4">
    </div>
  </div>

  <a class="carousel-control-prev" href="#home_slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#home_slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>
<!-- END:: HOME SLIDER -->

<!-- START::ABOUT US SECTION -->
<div class="about_us_sec">
  <div class="container-fluid">
    <div class="row justify-content-center p-2 overflow-hidden">
      <div class="col-12 col-md-5 my-2 wow slideInLeft" data-wow-duration="1.5s" data-wow-delay="1s">
        <div class="about_us_img_wraper">
          <img src="./assets/media/pic8.jpg" alt="about us iamge">
        </div>
      </div>

      <div class="col-12 col-md-7 my-2 wow slideInRight" data-wow-duration="1.5s" data-wow-delay="1s">
        <div class="about_us_text_wraper">
          <div class="header_wraper">
            <h2> About El Koubasy </h2>
          </div>

          <div class="text_wraper">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus.
            maiores, nulla explicabo exercitationem dolorum quas veniam aut ex.
            repudiandae facere nostrum soluta. Dicta explicabo corrupti totam
            exercitationem temporibus veritatis nam.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus.
            maiores, nulla explicabo exercitationem dolorum quas veniam aut ex.
            repudiandae facere nostrum soluta. Dicta explicabo corrupti totam
            exercitationem temporibus veritatis nam.
            
          </div>

          <div class="btn_wraper">
            <a href="AboutUs.php"> learn more </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END::ABOUT US SECTION -->

<!-- START:: SERVICES SECTION -->
<div class="services_sec">
  <div class="header_wraper">
    <h2 class="wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.9s"> Our Services </h2>
  </div>

  <div class="container-fluid">
    <div class="row service_wraper justify-content-center mt-3 overflow-hidden">
      <div class="col-6 col-md-3 my-3 wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="0.3s">
        <a href="ServiceDetails.php">
          <img src="assets/media/pic12.jpg" alt="Why Section Icon 1">
          <h5> 
            Export Services
          </h5>
          <i class="fas fa-angle-double-right"></i>
        </a>
      </div>

      <div class="col-6 col-md-3 my-3 wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.6s">
        <a href="ServiceDetails.php">
          <img src="assets/media/pic11.jpg" alt="Why Section Icon 1">
          <h5> 
            Import Services
          </h5>
          <i class="fas fa-angle-double-right"></i>
        </a>
      </div>

      <div class="col-6 col-md-3 my-3 wow fadeInDownBig" data-wow-duration="1.5s" data-wow-delay="0.9s">
        <a href="ServiceDetails.php">
          <img src="assets/media/pic7.jpg" alt="Why Section Icon 1">
          <h5> 
            Local Distribution
          </h5>
          <i class="fas fa-angle-double-right"></i>
        </a>
      </div>

      <div class="col-6 col-md-3 my-3 wow fadeInRightBig" data-wow-duration="1.5s" data-wow-delay="1.1s">
        <a href="AllProducts.php">
          <img src="assets/media/pic20.jpg" alt="Why Section Icon 1">
          <h5> 
            Online Shopping
          </h5>
          <i class="fas fa-angle-double-right"></i>
        </a>
      </div>

    </div>
  </div>
</div>
<!-- END:: SERVICES SECTION -->

<!-- START:: HEIGHLIGHTS SECTION -->
<div class="heightlights">
  <div class="container-fluid">
    <div class="header_wraper">
      <h2 class="wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.9s"> Al Koubasy Highlight </h2>
    </div>
    <div class="row justify-content-around justify-content-md-center overflow-hidden">
      <div class="col-5 col-md-3 my-3 wow fadeInDownBig" data-wow-duration="1.5s" data-wow-delay="0.3s">
        <div class="card">
          <div class="icon_wraper">
            <img src="assets/media/icons/contract.png" alt="Icon 1">
          </div> 
          <div class="info_wraper">
            <h3> 25 </h3>
            <h5> Years Of Experience </h5>
          </div>
        </div>
      </div>

      <div class="col-5 col-md-3 my-3 wow fadeInDownBig" data-wow-duration="1.5s" data-wow-delay="0.3s">
        <div class="card">
          <div class="icon_wraper">
            <img src="assets/media/icons/team.png" alt="Icon 1">
          </div> 
          <div class="info_wraper">
            <h3> 90 </h3>
            <h5> Clients </h5>
          </div>
        </div>
      </div>

      <div class="col-5 col-md-3 my-3 wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.6s">
        <div class="card">
          <div class="icon_wraper">
            <img src="assets/media/icons/financ.png" alt="Icon 1">
          </div> 
          <div class="info_wraper">
            <h3> 50+ </h3>
            <h5> Products </h5>
          </div>
        </div>
      </div>

      <div class="col-5 col-md-3 my-3 wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.6s">
        <div class="card">
          <div class="icon_wraper">
            <img src="assets/media/icons/chart.png" alt="Icon 1">
          </div> 
          <div class="info_wraper">
            <h3> 90 </h3>
            <h5> Local States </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END:: HEIGHLIGHTS SECTION -->

<!-- START::EVENTS SECTION -->
<div class="events_sec">
  <div class="container">
    <div class="header_wraper">
      <h2 class="wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.3s"> Our Events </h2>
    </div>

    <div class="row justify-content-between p-2 overflow-hidden">
      <div class="col-12 col-md-6 my-2 wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="0.3s">
        <div class="event_text_wraper">
          <div class="header_wraper">
            <h3> Conference Title </h3>
          </div>

          <div class="text_wraper">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus.
            maiores, nulla explicabo exercitationem dolorum quas veniam aut ex.
            repudiandae facere nostrum soluta. Dicta explicabo corrupti totam
            exercitationem temporibus veritatis nam.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus.
            maiores, nulla explicabo exercitationem dolorum quas veniam aut ex.
            repudiandae facere nostrum soluta. Dicta explicabo corrupti totam
            exercitationem temporibus veritatis nam.
          </div>

          <div class="btn_wraper">
            <a href="AllEvents.php"> view more </a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-5 my-2 wow fadeInRightBig" data-wow-duration="1.5s" data-wow-delay="0.3s">
        <div class="event_img_wraper">
          <img src="./assets/media/pic21.jpg" alt="about us iamge">

          <div class="event_date">
            <i class="far fa-calendar-alt fa-lg"></i>
            <p>
              <span> Event Date </span>
              <span> 1 - Apr - 2021 </span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END::EVENTS SECTION -->

<!-- START:: PRODUCTS CATS SECTION -->
<div class="products_cats">
  <div class="header_wraper">
    <h2 class="wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.9s"> Products Categories </h2>
  </div>

  <div class="container">
    <div class="row cats_wraper justify-content-center mt-3 overflow-hidden">
      <div class="col-6 col-md-4 my-3 wow fadeInDownBig" data-wow-duration="1.5s" data-wow-delay="0.3s">
        <a href="AllProducts.php">
          <img src="assets/media/pic4.jpg" alt="Why Section Icon 1">
          <h5> 
            Fresh Fruits
          </h5>
          <i class="fas fa-angle-double-right"></i>
        </a>
      </div>

      <div class="col-6 col-md-4 my-3 wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.6s">
        <a href="AllProducts.php">
          <img src="assets/media/pic6.jpg" alt="Why Section Icon 1">
          <h5> 
            Fresh Vegetables
          </h5>
          <i class="fas fa-angle-double-right"></i>
        </a>
      </div>

      <div class="col-6 col-md-4 my-3 wow fadeInDownBig" data-wow-duration="1.5s" data-wow-delay="0.9s">
        <a href="AllProducts.php">
          <img src="assets/media/pic1.jpg" alt="Why Section Icon 1">
          <h5> 
            Juices
          </h5>
          <i class="fas fa-angle-double-right"></i>
        </a>
      </div>

    </div>
  </div>
</div>
<!-- END:: PRODUCTS CATS SECTION -->

<!-- START::LATEST NEWS SECTION -->
<div class="latest_news_sec">
  <div class="container">
    <div class="header_wraper">
      <h2 class="wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.3s"> Latest News </h2>
    </div>

    <div class="row justify-content-between p-2 overflow-hidden">
      <div class="col-12 col-md-6 my-2 wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.3s">
        <div class="latest_article_img_wraper">
          <img src="assets/media/pic5.jpg" alt="about us iamge">
        </div>
      </div>

      <div class="col-12 col-md-6 my-2 wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.3s">
        <div class="latest_article_text_wraper">
          <div class="header_wraper">
            <h3> Article Title </h3>
            <h5> 27 - Aug - 2020 </h5>
          </div>

          <div class="text_wraper">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus.
            maiores, nulla explicabo exercitationem dolorum quas veniam aut ex.
            repudiandae facere nostrum soluta. Dicta explicabo corrupti totam
            exercitationem temporibus veritatis nam.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus.
            maiores, nulla explicabo exercitationem dolorum quas veniam aut ex.
            repudiandae facere nostrum soluta. Dicta explicabo corrupti totam
            exercitationem temporibus veritatis nam.
          </div>
        </div>
      </div>

      <div class="btn_wraper col-12 wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.3s">
        <a href="AllNews.php"> view more </a>
      </div>
    </div>
  </div>
</div>
<!-- END::LATEST NEWS SECTION -->

<!-- START:: OUR CLIENTS SECTION -->
<div class="our_clients_sec">
  <div class="container-fluid">
    <div class="header_wraper">
      <h2 class="wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.3s"> Our Clients </h2>
    </div>

    <div class="row flex-column align-items-center justify-content-center mt-3 overflow-hidden">
      <div id="clients" class="owl-carousel owl-theme col-11 wow fadeInRightBig" data-wow-duration="1.5s" data-wow-delay="0.3s">

        <div class="item text-center">
          <div class="img_wraper">
            <img src="assets/media/prand1.png" alt="client"> 
          </div>
        </div>

        <div class="item text-center">
          <div class="img_wraper">
            <img src="assets/media/prand2.png" alt="client"> 
          </div>
        </div>

        <div class="item text-center">
          <div class="img_wraper">
            <img src="assets/media/prand4.png" alt="client"> 
          </div>
        </div>

        <div class="item text-center">
          <div class="img_wraper">
            <img src="assets/media/prand3.png" alt="client"> 
          </div>
        </div>

        <div class="item text-center">
          <div class="img_wraper">
            <img src="assets/media/prand5.jpg" alt="client">
          </div>
        </div>

        <div class="item text-center">
          <div class="img_wraper">
            <img src="assets/media/prand1.png" alt="client"> 
          </div>
        </div>

        <div class="item text-center">
          <div class="img_wraper">
            <img src="assets/media/prand2.png" alt="client"> 
          </div>
        </div>

        <div class="item text-center">
          <div class="img_wraper">
            <img src="assets/media/prand4.png" alt="client"> 
          </div>
        </div>


      </div>
    </div>
  </div>
</div>
<!-- END:: OUR CLIENTS SECTION --> 

<!-- START:: OUR TEAM SECTION -->
<div class="our_team_sec">
  <div class="container">
    <div class="header_wraper">
      <h2 class="wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.3s"> Our Team </h2>
    </div>

    <div class="row flex-column align-items-center justify-content-center mt-3 overflow-hidden">
      <div id="team" class="owl-carousel owl-theme col-12 wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="0.3s">

        <div class="item">
          <div class="card">
            <img src="assets/media/default.jpg" class="card-img-top" alt="...">
            <div class="card-body mt-4">
              <h4>Personal Name 1</h4>
              <h5>
                <i class="fas fa-share-alt-square fa-lg"></i>
                Consultant
              </h5>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="card">
            <img src="assets/media/default.jpg" class="card-img-top" alt="...">
            <div class="card-body mt-4">
              <h4>Personal Name 2</h4>
              <h5>
                <i class="fas fa-share-alt-square fa-lg"></i>
                Consultant
              </h5>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="card">
            <img src="assets/media/default.jpg" class="card-img-top" alt="...">
            <div class="card-body mt-4">
              <h4>Personal Name 3</h4>
              <h5>
                <i class="fas fa-share-alt-square fa-lg"></i>
                Consultant
              </h5>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="card">
            <img src="assets/media/default.jpg" class="card-img-top" alt="...">
            <div class="card-body mt-4">
              <h4>Personal Name 4</h4>
              <h5>
                <i class="fas fa-share-alt-square fa-lg"></i>
                Consultant
              </h5>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="card">
            <img src="assets/media/default.jpg" class="card-img-top" alt="...">
            <div class="card-body mt-4">
              <h4>Personal Name 5</h4>
              <h5>
                <i class="fas fa-share-alt-square fa-lg"></i>
                Consultant
              </h5>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="card">
            <img src="assets/media/default.jpg" class="card-img-top" alt="...">
            <div class="card-body mt-4">
              <h4>Personal Name 6</h4>
              <h5>
                <i class="fas fa-share-alt-square fa-lg"></i>
                Consultant
              </h5>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- END:: OUR TEAM SECTION -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include('./layouts/TheFooter.php')?>
<!-- END:: INCLUDING THE FOOTER -->
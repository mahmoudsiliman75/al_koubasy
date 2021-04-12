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
      <img src="assets/media/pic1.jpg" class="d-block" alt="Slide 1">
    </div>
    <div class="carousel-item">
      <img src="assets/media/pic2.jpg" class="d-block" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <img src="assets/media/pic3.jpg" class="d-block" alt="Slide 3">
    </div>
    <div class="carousel-item">
      <img src="assets/media/pic4.jpg" class="d-block" alt="Slide 4">
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
    <div class="row justify-content-center p-2">
      <div class="col-8 col-md-5">
        <div class="about_us_img_wraper">
          <img src="./assets/media/pic8.jpg" alt="about us iamge">
        </div>
      </div>

      <div class="col-7">
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

<!-- START:: WHY DR SECTION -->
<div class="why_sec">
  <div class="container">
    <div class="header_wraper">
      <h2> Why Dr.Khaled Salah! </h2>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row icons_wraper justify-content-center mt-3">
      <div class="col-6 col-md-2 my-2 px-4 text-center">
        <img src="assets/media/icons/chart.png" alt="Why Section Icon 1">
        <h5> 20+ Books </h5>
      </div>

      <div class="col-6 col-md-2 my-2 px-4 text-center">
        <img src="assets/media/icons/financ.png" alt="Why Section Icon 1">
        <h5> 50+ Operation </h5>
      </div>

      <div class="col-6 col-md-2 my-2 px-4 text-center">
        <img src="assets/media/icons/contract.png" alt="Why Section Icon 1">
        <h5> 30+ Years Of Experience </h5>
      </div>

      <div class="col-6 col-md-2 my-2 px-4 text-center">
        <img src="assets/media/icons/team.png" alt="Why Section Icon 1">
        <h5> 500+ Sold Books </h5>
      </div>
    </div>
  </div>
</div>
<!-- END:: WHY DR SECTION -->

<!-- START:: LIBERARY SECTION -->
<div class="liberary">
  <div class="overlay">
    <h3 class="text-center"> All You Need Under One Roof </h3>
  </div>
</div>
<!-- END:: LIBERARY SECTION -->

<!-- START:: BOOKS SECTION -->
<div class="books_sec">
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-10 col-md-3 books_panel mb-4">
        <span class="dot"></span>
        <h5> Today Deal In books </h5>
        <p class="my-3"> 
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
          Ducimus porro enim quos hic mollitia aut adipisci modi itaque, 
          delectus eum, ex iure ipsa perferendis quas, magni tempore impedit 
          distinctio placeat.
        </p>
        <div class="btn_box">
          <a href="AllBooks.php"> view all books </a>
        </div>
      </div>

      <div class="col-8 col-sm-6 col-md-3 book_details mb-4">
        <div class="card">
          <div class="card_img_wraper">
            <img src="assets/media/book_cover.jpg" class="card-img-top" alt="...">
            <span class="badge"> 
              <i class="fas fa-book fa-2x"></i>
            </span>
          </div>

          <div class="card-body">
            <h5 class="card-title">The Four Winds: A Novel</h5>
            <ul class="list-unstyled">
              <li> 
                <span> $50.00 </span> 
                <span> 
                  <i class="fas fa-cart-plus fa-lg"></i>
                </span> 
              </li>

              <li> 
                <span> Hard Copy </span> 
                <span> 
                  <i class="fas fa-book fa-lg"></i>
                </span> 
              </li>

              <li> 
                <span> PDF </span> 
                <span> 
                  <i class="far fa-file-pdf fa-lg"></i>
                </span> 
              </li>
            </ul>
            <div class="btn_box">
              <a href="BookDetails.php"> more details </a>
            </div>
          </div>

        </div>
      </div>

      <div class="col-8 col-sm-6 col-md-3 book_details mb-4">
        <div class="card">
          <div class="card_img_wraper">
            <img src="assets/media/book_cover.jpg" class="card-img-top" alt="...">
            <span class="badge"> 
              <i class="fas fa-book fa-2x"></i>
            </span>
          </div>

          <div class="card-body">
            <h5 class="card-title">The Four Winds: A Novel</h5>
            <ul class="list-unstyled">
              <li> 
                <span> $50.00 </span> 
                <span> 
                  <i class="fas fa-cart-plus fa-lg"></i>
                </span> 
              </li>

              <li> 
                <span> Hard Copy </span> 
                <span> 
                  <i class="fas fa-book fa-lg"></i>
                </span> 
              </li>

              <li> 
                <span> PDF </span> 
                <span> 
                  <i class="far fa-file-pdf fa-lg"></i>
                </span> 
              </li>
            </ul>
            <div class="btn_box">
              <a href="BookDetails.php"> more details </a>
            </div>
          </div>

        </div>
      </div>

      <div class="col-8 col-sm-6 col-md-3 book_details mb-4">
        <div class="card">
          <div class="card_img_wraper">
            <img src="assets/media/book_cover.jpg" class="card-img-top" alt="...">
            <span class="badge"> 
              <i class="fas fa-book fa-2x"></i>
            </span>
          </div>

          <div class="card-body">
            <h5 class="card-title">The Four Winds: A Novel</h5>
            <ul class="list-unstyled">
              <li> 
                <span> $50.00 </span> 
                <span> 
                  <i class="fas fa-cart-plus fa-lg"></i>
                </span> 
              </li>

              <li> 
                <span> Hard Copy </span> 
                <span> 
                  <i class="fas fa-book fa-lg"></i>
                </span> 
              </li>

              <li> 
                <span> PDF </span> 
                <span> 
                  <i class="far fa-file-pdf fa-lg"></i>
                </span> 
              </li>
            </ul>
            <div class="btn_box">
              <a href="BookDetails.php"> more details </a>
            </div>
          </div>

        </div>
      </div>

      <div class="col-8 col-sm-6 col-md-3 book_details mb-4">
        <div class="card">
          <div class="card_img_wraper">
            <img src="assets/media/book_cover.jpg" class="card-img-top" alt="...">
            <span class="badge"> 
              <i class="fas fa-book fa-2x"></i>
            </span>
          </div>

          <div class="card-body">
            <h5 class="card-title">The Four Winds: A Novel</h5>
            <ul class="list-unstyled">
              <li> 
                <span> $50.00 </span> 
                <span> 
                  <i class="fas fa-cart-plus fa-lg"></i>
                </span> 
              </li>

              <li> 
                <span> Hard Copy </span> 
                <span> 
                  <i class="fas fa-book fa-lg"></i>
                </span> 
              </li>

              <li> 
                <span> PDF </span> 
                <span> 
                  <i class="far fa-file-pdf fa-lg"></i>
                </span> 
              </li>
            </ul>
            <div class="btn_box">
              <a href="BookDetails.php"> more details </a>
            </div>
          </div>

        </div>
      </div>

      <div class="col-8 col-sm-6 col-md-3 book_details mb-4">
        <div class="card">
          <div class="card_img_wraper">
            <img src="assets/media/book_cover.jpg" class="card-img-top" alt="...">
            <span class="badge"> 
              <i class="fas fa-book fa-2x"></i>
            </span>
          </div>

          <div class="card-body">
            <h5 class="card-title">The Four Winds: A Novel</h5>
            <ul class="list-unstyled">
              <li> 
                <span> $50.00 </span> 
                <span> 
                  <i class="fas fa-cart-plus fa-lg"></i>
                </span> 
              </li>

              <li> 
                <span> Hard Copy </span> 
                <span> 
                  <i class="fas fa-book fa-lg"></i>
                </span> 
              </li>

              <li> 
                <span> PDF </span> 
                <span> 
                  <i class="far fa-file-pdf fa-lg"></i>
                </span> 
              </li>
            </ul>
            <div class="btn_box">
              <a href="BookDetails.php"> more details </a>
            </div>
          </div>

        </div>
      </div>

      <div class="col-8 col-sm-6 col-md-3 book_details mb-4">
        <div class="card">
          <div class="card_img_wraper">
            <img src="assets/media/book_cover.jpg" class="card-img-top" alt="...">
            <span class="badge"> 
              <i class="fas fa-book fa-2x"></i>
            </span>
          </div>

          <div class="card-body">
            <h5 class="card-title">The Four Winds: A Novel</h5>
            <ul class="list-unstyled">
              <li> 
                <span> $50.00 </span> 
                <span> 
                  <i class="fas fa-cart-plus fa-lg"></i>
                </span> 
              </li>

              <li> 
                <span> Hard Copy </span> 
                <span> 
                  <i class="fas fa-book fa-lg"></i>
                </span> 
              </li>

              <li> 
                <span> PDF </span> 
                <span> 
                  <i class="far fa-file-pdf fa-lg"></i>
                </span> 
              </li>
            </ul>
            <div class="btn_box">
              <a href="BookDetails.php"> more details </a>
            </div>
          </div>

        </div>
      </div>

      <div class="col-8 col-sm-6 col-md-3 book_details mb-4">
        <div class="card">
          <div class="card_img_wraper">
            <img src="assets/media/book_cover.jpg" class="card-img-top" alt="...">
            <span class="badge"> 
              <i class="fas fa-book fa-2x"></i>
            </span>
          </div>

          <div class="card-body">
            <h5 class="card-title">The Four Winds: A Novel</h5>
            <ul class="list-unstyled">
              <li> 
                <span> $50.00 </span> 
                <span> 
                  <i class="fas fa-cart-plus fa-lg"></i>
                </span> 
              </li>

              <li> 
                <span> Hard Copy </span> 
                <span> 
                  <i class="fas fa-book fa-lg"></i>
                </span> 
              </li>

              <li> 
                <span> PDF </span> 
                <span> 
                  <i class="far fa-file-pdf fa-lg"></i>
                </span> 
              </li>
            </ul>
            <div class="btn_box">
              <a href="BookDetails.php"> more details </a>
            </div>
          </div>

        </div>
      </div>

      <div class="col-12 btn_box">
        <a href="AllBooks.php"> All Books </a>
      </div>

    </div>
  </div>
</div>
<!-- END:: BOOKS SECTION -->

<!-- START:: TESTEMONIALS SECTION -->
<div class="testemonials">
  <div class="container">
    <div class="header_wraper">
      <h2> What People Say?! </h2>
    </div>

    <div class="row justify-content-center mt-4">
      <div id="testemonials_slider" class="owl-carousel owl-theme col-10">

        <div class="item">
          <div class="testemonial_card">
            <div class="row justify-content-center">

            <div class="col-5 col-md-3 testemonial_img">
              <img src="assets/media/default.jpg" alt="Testemonial">
              <h5> Name 1 </h5>
            </div>

              <div class="col-12 col-md-7 testemonial_body">
                <span>
                  <i class="fas fa-quote-right fa-3x"></i>
                </span>
                (1) Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Ea odit recusandae aut at magnam. Omnis voluptatum tempora, 
                tempore ipsum, dolorum, ad pariatur accusamus eaque porro 
                sapiente repudiandae hic dolore possimus.
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="testemonial_card">
            <div class="row justify-content-center">

            <div class="col-5 col-md-3 testemonial_img">
              <img src="assets/media/default.jpg" alt="Testemonial">
              <h5> Name 2 </h5>
            </div>

              <div class="col-12 col-md-7 testemonial_body">
                <span>
                  <i class="fas fa-quote-right fa-3x"></i>
                </span>
                (2) Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Ea odit recusandae aut at magnam. Omnis voluptatum tempora, 
                tempore ipsum, dolorum, ad pariatur accusamus eaque porro 
                sapiente repudiandae hic dolore possimus.
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="testemonial_card">
            <div class="row justify-content-center">

            <div class="col-5 col-md-3 testemonial_img">
              <img src="assets/media/default.jpg" alt="Testemonial">
              <h5> Name 3 </h5>
            </div>

              <div class="col-12 col-md-7 testemonial_body">
                <span>
                  <i class="fas fa-quote-right fa-3x"></i>
                </span>
                (3) Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Ea odit recusandae aut at magnam. Omnis voluptatum tempora, 
                tempore ipsum, dolorum, ad pariatur accusamus eaque porro 
                sapiente repudiandae hic dolore possimus.
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="testemonial_card">
            <div class="row justify-content-center">

            <div class="col-5 col-md-3 testemonial_img">
              <img src="assets/media/default.jpg" alt="Testemonial">
              <h5> Name 4 </h5>
            </div>

              <div class="col-12 col-md-7 testemonial_body">
                <span>
                  <i class="fas fa-quote-right fa-3x"></i>
                </span>
                (4) Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Ea odit recusandae aut at magnam. Omnis voluptatum tempora, 
                tempore ipsum, dolorum, ad pariatur accusamus eaque porro 
                sapiente repudiandae hic dolore possimus.
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- END:: TESTEMONIALS SECTION -->

<!-- START:: VIDEOS SECTION -->
<div class="videos-sec">
  <div class="container">
    <div class="header_wraper">
      <h2> Videos </h2>
    </div>

    <div class="row flex-column align-items-center justify-content-center mt-3">
      <div id="videos_slider" class="owl-carousel owl-theme col-11">

        <div class="item text-center">
          <div class="iframe_wraper">
            <iframe src="https://www.youtube.com/embed/Sd1YOQUzt10" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <h5> Video Title </h5>
        </div>

        <div class="item text-center">
          <div class="iframe_wraper">
            <iframe src="https://www.youtube.com/embed/Sd1YOQUzt10" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <h5> Video Title </h5>
        </div>

        <div class="item text-center">
          <div class="iframe_wraper">
            <iframe src="https://www.youtube.com/embed/Sd1YOQUzt10" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <h5> Video Title </h5>
        </div>

        <div class="item text-center">
          <div class="iframe_wraper">
            <iframe src="https://www.youtube.com/embed/Sd1YOQUzt10" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <h5> Video Title </h5>
        </div>

        <div class="item text-center">
          <div class="iframe_wraper">
            <iframe src="https://www.youtube.com/embed/Sd1YOQUzt10" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <h5> Video Title </h5>
        </div>

      </div>

      <div class="btn_box">
        <a href="AllVideos.php"> More Videos  </a>
      </div>
    </div>
  </div>
</div>
<!-- END:: VIDEOS SECTION -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include('./layouts/TheFooter.php')?>
<!-- END:: INCLUDING THE FOOTER -->
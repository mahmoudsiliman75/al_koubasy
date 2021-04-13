$(document).ready( function() {
  // START:: COUNT UP
  // $('.counter').counterUp({
  //   delay: 10,
  //   time: 1000
  // });
  // END:: COUNT UP

  // START:: WOW JS
  wow = new WOW(
    {
    boxClass:     'wow',     
    animateClass: 'animated',
    offset:       150,         
    mobile:       false,      
    live:         true       
  }
  )
  wow.init();
  // END:: WOW JS

  // START:: TOGGLE MENU
  $('#open_menu').on('click', () => {
    $('.small_menu').css('display', 'flex');
    setTimeout(() => {
      $('.small_menu').css('right', '0');
    }, 300);
    $('body').css('overflow', 'hidden');
  });

  $('#colse_menu').on('click', () => {
    $('.small_menu').css('right', '-100%');
    setTimeout(() => {
      $('.small_menu').css('display', 'none');
    }, 1000);
    $('body').css('overflow-y', 'auto');
  });
  // END:: TOGGLE MENU

  // START:: OWL CAROUSEL
  $('#videos_slider').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:true,
    margin:10,
    nav:true,
    dots: false,
    items:1,
    rtl: true, 
    responsive:{
      0:{
        items:1,
        nav:true
      },
      600:{
        items:1,
        nav:false
      },
      1000:{
        items:3,
        nav:true,
        loop:false
      }
    }
  });

  $('#team').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:true,
    margin:60,
    nav:true,
    dots: true,
    items:1,
    rtl: true, 
    responsive:{
      0:{
        items:1,
        nav:true
      },
      600:{
        items:1,
        nav:false
      },
      1000:{
        items:3,
        nav:true,
        loop:false
      }
    }
  });

  $('#clients').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:true,
    margin:10,
    nav: false,
    dots: false,
    items:1,
    rtl: true, 
    responsive:{
      0:{
        items:2,
        nav:false,
        loop:true
      },
      600:{
        items:4,
        nav:false,
        loop:true
      },
      1000:{
        items:6,
        nav:false,
        loop:true
      }
    }
  });

  $('#related_books').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:true,
    margin:10,
    nav:true,
    dots: false,
    items:1,
    rtl: true, 
    responsive:{
      0:{
          items:1,
          nav:true
      },
      400:{
        items:2,
        nav:false
      },
      1000:{
        items:4,
        nav:true,
        loop:false
      }
    }
  });

  $('#book_info').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:true,
    margin:10,
    nav:true,
    dots: false,
    items:1,
    rtl: true, 
    responsive:{
      0:{
          items:1,
          nav:true
      },
      400:{
        items:2,
        nav:false
      },
      1000:{
        items:4,
        nav:true,
        loop:false
      }
    }
  });
  // END:: OWL CAROUSEL

  // START:: TOGGLE FORMS
  $('#show_register').on('click', function() {
    $('#login_form_wraper').css('display', 'none');
    $('#login_form_wraper').css('display', 'none');
    $('#signup_form_wraper').css('display', 'block');
  });

  $('#show_reset').on('click', function() {
    $('#login_form_wraper').css('display', 'none');
    $('#signup_form_wraper').css('display', 'none');
    $('#reset_form_wraper').css('display', 'block');
  });
  // END:: TOGGLE FORMS

  // START:: FLEX SLIDER
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: true,
    animationLoop: true,
    slideshow: true,
    itemWidth: 160,
    itemMargin: 0,
    asNavFor: '#slider'
  });

  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });
  // END:: FLEX SLIDER

  // START:: BOOTSTRAP SELECT
  $('#type_selector').selectpicker();
  // END:: BOOTSTRAP SELECT
});

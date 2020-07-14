$(document).ready(function(){
 
  $('.slider-servicios').owlCarousel({
    loop: false,
    autoplay: true,
    dots: false,
    nav: false,
    autoplayTimeout: 5000,
    smartSpeed: 1000,
    responsive:{
      0:{
          items:1
      },
      600:{
        items:2
      },
      768:{
        items:3
      }
    }
  })
 
  $('.slider-users').owlCarousel({
    loop: false,
    autoplay: true,
    margin: 30,
    dots: false,
    nav: false,
    autoplayTimeout: 5000,
    smartSpeed: 1000,
    responsive:{
      0:{
          items:1
      },
      600:{
        items:2
      },
      768:{
        items:3
      }
    }
  })
    $('.slider-instagram').owlCarousel({
    loop: false,
    autoplay: true,
    margin: 30,
    dots: false,
    nav: false,
    autoplayTimeout: 5000,
    smartSpeed: 1000,
    responsive:{
      0:{
          items:1
      },
      600:{
        items:2
      },
      768:{
        items:3
      }
    }
  })

})

$(document).ready(function() {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      
      margin: 10,
      nav: true,
      loop: true,
      responsive:{
        200:{
            items:4
        }
    }
    })
  })
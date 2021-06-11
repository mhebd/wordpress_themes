      
// Owl carousel script
jQuery(document).ready(function($){
  $(".owl-carousel").owlCarousel();
});


$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  responsive: {
      0: {
          items: 1
      },
      600: {
          items: 1
      },
      1000: {
          items: 1
      }
  }
});
// Owl carousel script Emd

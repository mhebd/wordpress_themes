//owlcarousel init

jQuery(".owl-carousel").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
      nav: true,
    },
    600: {
      items: 1,
      nav: true,
    },
    1000: {
      items: 1,
      nav: true,
    },
  },
});


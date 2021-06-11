
jQuery(document).ready(function($){
  $('.right-sidebar-heading').click(function(){
    $('.main-content').toggleClass('r-open');
  });
});

jQuery(document).ready(function($){
  $('.left-sidebar-heading').click(function(){
    $('.main-content').toggleClass('l-open');
  });
});


jQuery(document).ready(function($){
  $('.right-sidebar .nav .nav-item').click(function(){
    $('.right-sidebar .card .nav .nav-item').removeClass('active');
    $(this).addClass('active');
  })
});

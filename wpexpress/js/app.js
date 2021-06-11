
//nav item toggle
function Scroll() {
  var top = document.getElementById('gtpb');
  var ypos = window.pageYOffset;
  if (ypos > 350) {
        top.classList.add('show');
  } else {
      top.classList.remove('show');
  }
}
window.addEventListener("scroll", Scroll);

// jQuery(document).ready(function($){
//   $('.not-singl').hover(function(){
//     $(this).toggleClass('hover');
//   });
// });


//search btn toggle
jQuery(document).ready(function($){
  $(".search-btn").click(function(){
    $('.search-form').slideToggle();
  });
});
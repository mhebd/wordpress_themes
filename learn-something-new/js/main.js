// all js function loader code

// navbar sub menu show code
$("ul li").click(function () {
  $(".first-d").toggleClass("dropdown-show");
});
$("ul li ul li").click(function () {
  $(".second-d").toggleClass("sub-dropdown-show");
});
// wow activate code

new WOW().init();

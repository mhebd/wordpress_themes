

//on scroll navbar add class script

  function Scroll() {
        var top = document.querySelector('.navbar');
        var ypos = window.pageYOffset;
        if (ypos > 10) {
              top.classList.add('bg');
        } else {
            top.classList.remove('bg');
        }
  }
  window.addEventListener("scroll", Scroll);

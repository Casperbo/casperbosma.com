
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("mainNav").style.animation = "show-menu 1s";
    document.getElementById("mainNav").style.animationFillMode = "forwards";
  } else {
    document.getElementById("mainNav").style.animation = "hide-menu 1s";
    document.getElementById("mainNav").style.animationFillMode = "forwards";
  }
  prevScrollpos = currentScrollPos;
}
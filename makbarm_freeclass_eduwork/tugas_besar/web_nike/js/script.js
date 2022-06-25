// Navbar Hide

let prevScrollpos = window.pageYOffset;

window.onscroll = function() {
let currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementsByTagName('nav')[0].style.top = "0";
  } else {
    document.getElementsByTagName('nav')[0].style.top = "-80px";
  }
  prevScrollpos = currentScrollPos;
}


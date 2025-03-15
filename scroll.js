let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  let currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    // scrolling up
    document.querySelector('.nav-div2').style.display = "block";
  } else {
    // scrolling down
    document.querySelector('.nav-div2').style.display = "none";
  }
  prevScrollpos = currentScrollPos;
}
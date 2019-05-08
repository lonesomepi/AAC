
window.onscroll = function() {
  myFunction()
  // myFunctionMobile()
};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;
var headerMobile = document.getElementById("myHeaderMobile");
var stickyMobile = headerMobile.offsetTop;


function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

// function myFunctionMobile() {
//   if (window.pageYOffset > stickyMobile) {
//     headerMobile.classList.add("stickyMobile");
//   } else {
//     headerMobile.classList.remove("stickyMobile");
//   }
// }

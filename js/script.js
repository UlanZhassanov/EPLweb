$(function(){
 var shrinkHeader = 90;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
           $('.navbar-inverse').addClass('fixhdr');
        }
        else {
            $('.navbar-inverse').removeClass('fixhdr');
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});






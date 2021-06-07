$(document).ready(function(){
  if (window.location.href.indexOf("offer") > -1) {
      $('html, body').animate({
           scrollTop: $(".super_ofer_div").offset().top
       }, 1000);
     }
})

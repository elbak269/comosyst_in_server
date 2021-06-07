$(document).ready(function(){

$(".fs_ourvis_top").click(function(){

  if ($(this).hasClass("fa-chevron-down")) {
   $(".bor_clic_cont").show(1000);
   $(this).removeClass('fa-chevron-down').addClass('fa-chevron-up');
 }else{
   $(".bor_clic_cont").hide(1000);
   $(this).removeClass('fa-chevron-up').addClass('fa-chevron-down');
 }

})



$(".fs_our_msg_top").click(function(){
  if ($(this).hasClass("fa-chevron-down")) {
   $(".bor_clic_cont_our_msg").show(1000);
   $(this).removeClass('fa-chevron-down').addClass('fa-chevron-up');
 }else{
   $(".bor_clic_cont_our_msg").hide(1000);
   $(this).removeClass('fa-chevron-up').addClass('fa-chevron-down');
 }
})

$(".fs_our_obj_top").click(function(){

  if ($(this).hasClass("fa-chevron-down")) {
   $(".bor_clic_cont_our_obje").show(1000);
   $(this).removeClass('fa-chevron-down').addClass('fa-chevron-up');
 }else{
   $(".bor_clic_cont_our_obje").hide(1000);
   $(this).removeClass('fa-chevron-up').addClass('fa-chevron-down');
 }

})

});

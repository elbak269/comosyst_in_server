<?Php
$contact_us_css ="";
$contact_us_css = "";
$pageTitle = "Nous contacter";

include("init.php");
?>

<div class="alert alert-danger inside_alert hide_item"></div>
<div class="alert alert-success inside_alert_sucs ">rethtr</div>
<h1 class="text-center"><?php echo lang("contact_us"); ?></h1>
<p class="text-center"> <strong> <?php echo lang("24h") ?> </strong> </p>
<p class="text-center p_co">Nous sommes ici pour aider. Tout ce que vous voulez discuter,
   nous aimerons entendre parler de vos objectifs commerciaux et nous pouvons fournir des stratégies de
   marketing pour vous aider à atteindre ces objectifs et à développer votre entreprise.
 </p>


 <div class="container cont_row">
   <div class="row row_con_imgs">
     <div class="col-md-12 col-lg-6 col-xl-4">
       <div class="ins_row__">
         <div class="div_img_is_ro">
           <img src="<?php echo $img."location.png" ?>" alt="">
         </div>
         <p class="text-center"> <strong><?php echo lang("headquarter"); ?></strong> </p>
         <p class="text-center">Dimadjou Hamahamet Daridjou</p>
       </div>
     </div>

     <div class="col-md-12 col-lg-6 col-xl-4">
       <div class="ins_row__">
         <div class="div_img_is_ro">
           <img src="<?php echo $img."calendar.png" ?>" alt="">
         </div>
         <p class="text-center"> <strong><?php echo lang("time_of_work"); ?></strong> </p>
         <p class="text-center">24H 7/7</p>
       </div>
     </div>


     <div class="col-md-12 col-lg-6 col-xl-4">
       <div class="ins_row__">
         <div class="div_img_is_ro">
           <img src="<?php echo $img."location.png" ?>" alt="">
         </div>
         <p class="text-center"> <strong><?php echo lang("email"); ?></strong> </p>
         <p class="text-center">elbak29@gmail.com</p>
       </div>
     </div>

   </div>


 </div>

 <div class="div_call_us_ text-center">
   <h2 class="text-center"> <strong><?php echo lang("contact_us") ?></strong> </h2>
   <p class="text-center"><strong> Contactez-nous 24 heures sur 24 et parlez à des programmeurs professionnels </strong></p>

   <div class="row row_infor">
     <div class="col-md-12 col-lg-5">

       <div class="div_in_number div_ins_info">
      <a href="tel:+2693249368">  <span class="span_number text-center"><i class="fa fa-phone"></i> +2693249368</span>  </a>
       </div>
       <div class="div_ins_info">
         <a href="mailto:elbak269@gmail.com"> <span class="text-center"><i class="fa fa-envelope"></i> elbak269@gamil.com</span> </a>
       </div>
       <div class="div_ins_info">
         <a href=""> <span class="text-center"><i class="fas fa-map-marked-alt"></i> Moroni Philips</a>
       </div>
     </div>

     <div class="col-md-12 col-lg-7">
       <div class="div_conta_us__">

         <div class="row cont_forms">

           <div class="col-md-12 col-lg-6">
             <input type="email" class="form-control" placeholder="<?php echo lang("your_email"); ?>" id="email">
           </div>

           <div class="col-md-12 col-lg-6">
             <input type="number" class="form-control" placeholder="<?php echo lang("phone"); ?>" id="phone">
           </div>

           <div class="col-md-12 ">
             <input type="text" class="form-control" placeholder="<?php echo lang("adress"); ?>" id="address">
           </div>

           <div class="col-md-12">
             <input type="text" class="form-control" placeholder="<?php echo lang("topic"); ?>" id="subject">
           </div>

           <div class="col-md-12">
             <textarea type="text" class="form-control" placeholder="<?php echo lang("The_text_of_the_message"); ?>" id="message"></textarea>
           </div>

           <div class="col-md-12">
             <button  class="btn btn-primary" placeholder="" id="btn_send"><?php echo lang("send"); ?></button>
           </div>



         </div>

       </div>

     </div>

   </div>

 </div>

 <div id="map"></div>



  <script async defer src="https://maps.googleapis.com/maps/api/js?AIzaSyCqmfEe0dDTRFNISqPWxvi52sCY0LV7-3I  &callback=initMap"
type="text/javascript"></script



<?php

include($template."footer.php");

 ?>

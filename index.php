<?php
$pageTitle = "Accueil";
$index     = "";
$index_js = "";
include("init.php");
$nonavbar="";
?>
<input type="hidden" id="img__in" name="" value="<?php echo $img;?>">
<div class="super_container">
  <div class="container">
    <div class="first_header_div">
      <div class="row">
        <div class="col-sm-12 col-lg-7 col_div_props_tex">
          <div class="first_header ">
           <p class="text-center"> <strong> <?php echo lang("propose") ?> </strong> </p>
           <ul>
             <li>Stunning and attractive professional design</li>
               <li>Choisissez parmi une variété de sites Web entièrement conçus</li>
                 <li>Navigation facile avec compatibilité avec tous les appareils et plateformes</li>
                 <li>Des prix abordables pour les entreprises en hausse</li>
                 <li>Prise en charge complète de la conception au début</li>
           </ul>
          </div>
        </div>

        <div class="col-sm-12 col-lg-5 col_div_props_img">
          <div class="div_img_prop">
            <img src="<?php echo $img."web_img2.jpg" ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>








<div class="container">
<h2 class="text-center"> <strong> Prix de certaines offres de conception et de programmation web</strong></h2>
<div class="super_ofer_div">
  <div class="row row_ofers__" >
  </div>
</div>

<div class="offer_cams">
 <h3 class="text-center">  <strong> <?PHP ECHO lang("oinstall_cams");  ?> </strong> </h3>
  <div class="row div_row">
      <div class="inside_col_cames">
    </div>
</div>
</div>

<div class="erdp_div__">
  <h2 class="text-center"> <strong> <?php echo lang("erp") ?> </strong> </h2>
  <div class="div_sup_row_erp">
    <div class="row row_erp">

<?php
/*
  $erp_pro = get_erp_produts();
foreach ($erp_pro as  $value) {
  ?>
  <div class="col-sm-12 col-md-6 col-lg-4 col-lg-3 col_erdp">
    <a href="info_product.php?ERP=comoapp">
    <div class="card border-secondary mb-3" style="max-width: 18rem;">
      <div class="card-header text-center"><?php echo lang("comoapp"); ?></div>
      <div class="card-body text-secondary">
        <div class="div_img_erd_">
           <img src="<?php echo $img."erp.jpg"; ?>"  class="rdp_img"alt="">
        </div>
        <div class="">
          <p>
            <?php echo $value["Description"]; ?>
            <div class="div_pric_erp">
              <h4 class="text-center"> <strong > <?php echo $value["Price"]." "."KMF"; ?> </strong> </h4>
            </div>
          </p>
        </div>

      </div>
    </div>
  </a>
  </div>
  <?php

} */ ?>





    </div>

  </div>

</div>






<div class="div_ecomerce_">
  <div class="row">
    <div class="col-sm-12 col-md-9 ">
      <div class="col_ecomer">
        <p class="text-center">
          <strong>
          Posséder une boutique en ligne et voir les produits et commencer à vendre
           en ligne et lier les magasins pour normaliser pour terminer la vente par
           téléphone et payer en ligne augmenter vos ventes maintenant
           </strong>
         </p>
      </div>
    </div>
    <div class="col-sm-12 col-md-3 ">
      <div class="col_ecomer div_btn_ecom" style="margin: auto;">
        <button class="btn  btn_ecomerce"  type="button" name="button">Ecomerce</button>
      </div>
    </div>
  </div>
</div>


<?php include($template."footer.php"); ?>

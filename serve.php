<?php
$serve_css = "";
$serve_js  = "";
$pageTitle = "service";
include("init.php");
 ?>




<div class="container">
<h1 class="text-center"> <strong> <?php echo lang("our_serve"); ?> </strong></h1>

<div class="container">
  <div class="cont_row">
    <div class="row row_prod">
      <div class="col-md-12 col-lg-6 col-xl-4">
        <div class="con_serve">
                 <div class="img_par text-center">
                    <img class="img_web" src="<?php echo $img."web.jpg"; ?>" alt="">
                 </div>
                 <p class="text-center"><strong> <?php echo lang("webdesign"); ?> </strong></p>
                 <div class="border_botom"> </div>

                   <p class="text-center">Votre site web est le meilleur qui parle de vous,
                      explique vos idées et met vos produits.
                      Mais pour que cela se produise,
                      la conception de votre site Web doit être attrayante et fluide à gérer
                    </p>

                    <div class="border_botom"></div>

                    <div class="div_btn_more">
                    <p class="read_mo_web"> <strong> <?php echo lang("ReadMore") ?> <i class="fas fa-arrow-right"></i> </strong></p>
                    </div>


        </div>
      </div>


      <div class="col-md-12 col-lg-6 col-xl-4">
        <div class="con_serve">
                 <div class="img_par text-center">
                    <img src="<?php echo $img."apps.jpg" ?>" alt="">
                 </div>
                 <p class="text-center"><strong> <?php echo lang("mobile_apli"); ?> </strong></p>
                 <div class="border_botom"> </div>

                   <p class="text-center">Les applications mobiles améliorent votre accès à vos clients plus profondément,
                      d'autant plus que les téléphones mobiles deviennent plus proches de leurs propriétaires que des membres de leur famille,
                       confirment de récentes études de marché.
                    </p>
                    <div class="border_botom"></div>
                    <div class="div_btn_more">
                      <p class="read_mo_mob_ap"> <strong> <?php echo lang("ReadMore") ?> <i class="fas fa-arrow-right"></i> </strong></p>
                    </div>
        </div>
      </div>



      <div class="col-md-12 col-lg-6 col-xl-4">
        <div class="con_serve">
                 <div class="img_par text-center">
                    <img class="img_ads" src="<?php echo $img."ads_img.jpg" ?>" alt="">
                 </div>
                 <p class="text-center"><strong> <?php echo lang("ads"); ?> </strong></p>
                 <div class="border_botom"> </div>

                   <p class="text-center">
                     Une communication efficace entre l'entreprise et son succès repose sur le marketing,
                     en particulier le courrier électronique. Les médias sociaux sont un
                      véhicule super promotionnel pour sa capacité à atteindre un nombre illimité de personnes .
                    </p>

                    <div class="border_botom"></div>
                    <div class="div_btn_more">
                      <p class="read_mo_mob_adds"> <strong> <?php echo lang("ReadMore") ?> <i class="fas fa-arrow-right"></i> </strong></p>
                    </div>


        </div>
      </div>




            <div class="col-md-12 col-lg-6 col-xl-4">
              <div class="con_serve">
                       <div class="img_par text-center">
                          <img class="img_app_po" src="<?php echo $img."app_point.png" ?>" alt="">
                       </div>
                       <p class="text-center"><strong> <?php echo lang("comoapp"); ?> </strong></p>
                       <div class="border_botom"> </div>

                         <p class="text-center">
                           <?php echo lang("comoapp"); ?>est un programme complet et intégré et est le résultat des efforts d'une équipe d'experts dans les domaines de
                           la comptabilité, des coûts, des ventes, du marketing et de la
                            technologie de l'information se caractérise par la flexibilité
                            et l'inclusivité est la possibilité d'appliquer la nature de votre entreprise et sa traduction sur le programme.
                           Le programme <?php echo lang("comoapp"); ?> vous permet de gérer toutes vos activités depuis
                           n'importe où dans le monde
                          à tout moment et de suivre les résultats de votre entreprise, de suivre les dépenses,
                           d'émettre des factures, des offres de prix et la gestion des stocks
                          </p>

                          <div class="border_botom"></div>
                          <div class="div_btn_more">
                            <p class="read_mo_mob_comoapp"> <strong> <?php echo lang("ReadMore") ?> <i class="fas fa-arrow-right"></i> </strong></p>
                          </div>


              </div>
            </div>


            <div class="col-md-12 col-lg-6 col-xl-4">
              <div class="con_serve">
                       <div class="img_par text-center">
                          <img class="img_app_po" src="<?php echo $img."cameras.jpg" ?>" alt="">
                       </div>
                       <p class="text-center"><strong> <?php echo lang("Monitoring_system"); ?> </strong></p>
                       <div class="border_botom"> </div>

                         <p class="text-center">
                           La première ligne de défense pour protéger votre famille,
                            votre maison ou votre entreprise est une surveillance efficace ou une sécurité à domicile.
                            La technologie de <?php echo lang("brand"); ?> porte une grande variété de caméras de surveillance et d'équipement
                             pour fournir une solution parfaite à n'importe quelle situation. Nous portons des systèmes
                             de caméra de sécurité avancés pour un bureau ou une entreprise aux petits systèmes tout compris
                             faciles à installer pour le débutant. Le personnel de <?php echo lang("brand"); ?>  Technology est certifié et très
                             compétent qui est là pour vous aider avec tous les problèmes ou questions. Si vous souhaitez
                              de l'aide pour décider de la bonne solution de sécurité, essayez notre petit quiz ci-dessous!
                          </p>

                          <div class="border_botom"></div>
                          <div class="div_btn_more">
                            <p class="read_mo_mob_comoapp"> <strong> <?php echo lang("ReadMore") ?> <i class="fas fa-arrow-right"></i> </strong></p>
                          </div>


              </div>
            </div>

    </div>

  </div>

</div>
</div>
<?php include($template."footer.php"); ?>

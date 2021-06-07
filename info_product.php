<?php
$pageTitle = "Product Info ";
$info_produt = "";
include("init.php");

if (isset($_GET["product_id"])) {
?>
<input type="hidden" id="inpu_price" name="" value="<?php echo get_product_price ($_GET["product_id"]);  ?> ">
<input type="hidden" id="PRODUCT_ID__" name="" value="<?PHP echo $_GET["product_id"]; ?>">
<?php

if (isset($_GET["Product"]) && isset($_GET["product_id"]) && isset($_GET['WEBSITE'])) {
;
?>

<input type="hidden" id="pdr_id"  name="" value="<?php echo $_GET["product_id"]; ?>">
<?php
  if (isset($_GET["offer"])) {

   $stmt = $conn->prepare("SELECT  product.* ,
   website.Site_Name,website.Pages,website.Secure,
   website.Storage,website.Control_Panel,website.Multi_anguage,website.Ecomerce,
   website.Domain,
   secure_web.Secure_Name,
   secure_web.Secure_ID,
   website.Storage,
   website.Multi_anguage,
   website.Mail,
   website.Month_Free_Hosting,
   website.Month_Free_Domain
   from product
   LEFT JOIN products_type ON products_type.Type_ID = product.Type
   LEFT JOIN website ON website.Site_ID  = product.Website
   Left join secure_web on secure_web.Secure_ID  = website.Secure
   WHERE 	Product_ID = :product_id");
   $stmt->bindParam(":product_id",$_GET["product_id"],PDO::PARAM_STR);
   $stmt->execute();
   $fetc  =  $stmt->fetchAll();
   foreach ($fetc as $value) {
   ?>
   <div class="container">
   <h1 class="text-center"><?php echo $value["Product_Name"]; ?></h1>
   <h4 class="text-center"><?php echo lang("design_website"); ?></h4>
   <div class="row">
     <div class="col-sm-12 col-md-12 col-lg-6">
       <div class="cont_d">
         <div class="_img_cont">
           <img src="<?php echo $img."web.jpg"  ?>" class="img-thumbnail" alt="">
         </div>
       </div>
     </div>
     <div class="col-sm-12 col-md-12 col-lg-6">
       <div class="div_isind_col">
       <p> <strong> <i class="fa fa-pager"> </i> <?php echo lang("page_number"); ?> <span><?php  echo $value["Pages"];  ?></span> </strong> </p>
       <?php
       if ($value["Secure_ID"]==1) {
         ?>
         <p> <strong> <i class="fa fa-lock"> </i> <?php echo lang("secure"); ?> <span><?php  echo $value["Secure_Name"];  ?></span> </strong> </p>
         <?php
       }else{
         ?>
         <p> <strong> <i class="fa fa-lock-open"> </i> <?php echo lang("secure"); ?> <span><?php  echo $value["Secure_Name"];  ?></span> </strong> </p>

         <?php
       }
        ?>
        <p> <strong> <i class="fa fa-hdd"> </i> Hébergement gratuit pendant <span><?php  echo $value["Month_Free_Hosting"];  ?> Mois </span> </strong> </p>
        <?php if ($value["Control_Panel"] == 0) {
          ?>
          <p> <strong> <i class="fa fa-columns"> </i> <?php echo lang("control_panel"); ?> :  <span><?php  echo lang("no");;   ?> <i class="fa fa-times"> </i></span> </strong> </p>
          <?php
        }else{
          ?>
          <p> <strong> <i class="fa fa-columns"> </i> <?php echo lang("control_panel"); ?> : <span><?php  echo lang("yes");  ?> <i class="fa fa-check"> </i></span> </strong> </p>
          <?php
        } ?>


      <?php if ($value["Multi_anguage"] == 1) {
        ?>
        <p> <strong> <i class="fas fa-language"></i> <?php echo lang("Multi_langue"); ?> : <span><?php  echo lang("yes");  ?> <i class="fa fa-check"> </i></span> </strong> </p>

        <?php
      }else{
        ?>
        <p> <strong> <i class="fas fa-language"></i> <?php echo lang("Multi_langue"); ?> : <span><?php  echo lang("no");  ?> <i class="fa fa-times"> </i></span> </strong> </p>

        <?php
      }?>



      <?php if ($value["Ecomerce"] == 1) {
        ?>
        <p> <strong> <i class="fas fa-cash-register"></i> <?php echo lang("ecomerce"); ?> : <span><?php  echo lang("yes");  ?> <i class="fa fa-check"> </i></span> </strong> </p>

        <?php
      }else{
        ?>
        <p> <strong> <i class="fas fa-cash-register"></i> <?php echo lang("ecomerce"); ?> : <span><?php  echo lang("no");  ?> <i class="fa fa-times"> </i></span> </strong> </p>

        <?php
      }?>

        <p> <strong> <i class="fas fa-signature"></i></i> Nom de domaine gratuit Pendant <?PHP echo  $value["Month_Free_Domain"]; ?>  Mois  </span> </strong> </p>



      <p> <strong> <i class="fab fa-internet-explorer"></i></i></i> <?php echo lang("responsive"); ?> : <span><?php  echo lang("yes");  ?> <i class="fa fa-check"> </i></span> </strong> </p>
      <p> <strong> <i class="fas fa-phone-alt"></i> <?php echo lang("support"); ?> : <span><?php  echo lang("yes");  ?> <i class="fa fa-check"> </i></span> </strong> </p>

      <p> <strong> <i class="fas fa-users"></i> votre site à des sites de réseaux sociaux, tels que Facebook, YouTube : <span><?php  echo lang("yes");  ?> <i class="fa fa-check"> </i></span> </strong> </p>

      <?php if ($value["Mail"] == 1) {
        ?>
        <p> <strong> <i class="fas fa-users"></i> mail  Exemple (exemple@comosyst.com) : <span><?php  echo lang("yes");  ?> <i class="fa fa-check"> </i></span> </strong> </p>

        <?php
      }else{
        ?>
        <p> <strong> <i class="fas fa-users"></i> mail  Exemple (exemple@comosyst.com) : <span><?php  echo lang("no");  ?> <i class="fa fa-times"> </i></span> </strong> </p>

        <?php
      }?>

      <p > <strong> <i class="fa fa-lock"> </i> <?php echo lang("protection_data"); ?>   </strong> </p>


    </div>
     </div>

   </div>



   <div class="div_for">

     <h5 class="text-center"> <i class="fas fa-money-bill-wave"></i> <?php echo lang("orderTotal"); ?> : <span id="pric_spa"><?php $value["Price"] ?></span> </h5>
     <input type="hidden" name="" id="prod_price" value="<?php echo $value["Price"]; ?>">
   </div>


   <div class="fiv_form">
          <h6 class="text-center"> <strong><?php echo lang("get_the_service"); ?> </strong> </h6>
     <form class="needs-validation" novalidate>
       <div class="form-row">
         <div class="col-md-6 mb-3">
           <label for="full_name"><?php echo lang("fullName") ?></label>
           <input type="text" class="form-control" id="full_name" placeholder="<?php echo lang("fullName") ?>" value="" required>
         </div>
         <div class="col-md-6 mb-3">
           <label for="email"><?PHP echo lang("email"); ?></label>
           <div class="input-group">
             <div class="input-group-prepend">
               <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
             </div>
             <input type="email" class="form-control" aria-describedby="emailHelp" id="email" placeholder="<?PHP echo lang("email"); ?>"  required>
           </div>
         </div>
       </div>
       <div class="form-row">
         <div class="col-md-6 mb-3">
           <label for="mobile"><?php echo lang("mobile"); ?></label>
           <input type="text" class="form-control" id="mobile" placeholder="<?php echo lang("mobile"); ?>" required>
         </div>

         <div class="col-md-6 mb-3">
           <label for="address"><?php echo lang("adress") ?></label>
           <input type="text" class="form-control" id="address" placeholder="<?php echo lang("adress") ?>" required>
         </div>
         <div class="col-md-6 mb-3">
           <label for="message"><?php echo lang("message") ?></label>
           <textarea type="text" class="form-control" id="message" placeholder="<?php echo lang("message") ?>" required></textarea>
         </div>
       </div>
       <button class="btn btn-primary"  id="btn_submit"type="button"><?php echo lang("request_order"); ?></button>
     </form>
   </div>
   <?PHP

   ?>
   <img alt="" border="0" src="https://www.paypalobjects.com/fr_XC/i/scr/pixel.gif" width="1" height="1">
   </form>
   <div class="alert text-center">
   </div>
</div>
 <?php

   }
 }else{
   $stmt = $conn->prepare("SELECT product.* from product
   WHERE 	Product_ID = :product_id");
   $stmt->bindParam(":product_id",$_GET["product_id"],PDO::PARAM_STR);
   $stmt->execute();
   $fetc  =  $stmt->fetchAll();
   foreach ($fetc as $value) {
   ?>
   <h1 class="text-center"><?php echo $value["Product_Name"]; ?></h1>
 <?php
   }

}
}
else if(isset($_GET["Product"]) && isset($_GET["product_id"]) && isset($_GET['cams'])){
  ?>

  <input type="hidden" id="pdr_id"  name="" value="<?php echo $_GET["product_id"]; ?>">
  <?php
    if (isset($_GET["offer"])) {

     $stmt = $conn->prepare("SELECT  product.* ,
     website.Site_Name,website.Pages,website.Secure,
     website.Storage,website.Control_Panel,website.Multi_anguage,website.Ecomerce,
     website.Domain,
     secure_web.Secure_Name,
     secure_web.Secure_ID,
     website.Storage,
     website.Multi_anguage,
     website.Mail
     from product
     LEFT JOIN products_type ON products_type.Type_ID = product.Type
     LEFT JOIN website ON products_type.Type_ID  = 1
     Left join secure_web on secure_web.Secure_ID  = website.Secure
     WHERE 	Product_ID = :product_id");
     $stmt->bindParam(":product_id",$_GET["product_id"],PDO::PARAM_STR);
     $stmt->execute();
     $fetc  =  $stmt->fetchAll();
     foreach ($fetc as $value) {
     ?>
     <div class="container">
     <h1 class="text-center"><?php echo $value["Product_Name"]; ?></h1>
     <h4 class="text-center"><?php echo lang("instal_cams"); ?></h4>
     <div class="row">
       <div class="col-sm-12 col-md-12 col-lg-6">
         <div class="cont_d">
           <div class="_img_cont">
             <img src="<?php echo $img.$value["Product_Img"];  ?>" class="img-thumbnail" alt="">
           </div>
         </div>
       </div>
       <div class="col-sm-12 col-md-12 col-lg-6">
         <div class="div_isind_col">
                <h5 class="text-center"><strong> <?php echo   lang("description");?></strong></h5>
                <p>  <strong><?php echo $value["Description"]; ?></strong> </p>

                <h5 class="text-center"> <strong> <?php echo lang("features"); ?> </strong> </h5>
                <ul>

                  <?php

                   $res = get_features($_GET["product_id"]);
                   foreach ($res as  $value1) {
                     echo "<li>".$value1["Feature_Name"]."</li>";
                   }

                   ?>
                 </ul>










      </div>
       </div>



     </div>

     <div class="div_for text-center">

       <h5 class="text-center"> <i class="fas fa-money-bill-wave"></i> <?php echo lang("orderTotal"); ?> : <span id="pric_spa"><?php $value["Price"] ?></span> </h5>
       <input type="hidden" name="" id="prod_price" value="<?php echo $value["Price"]; ?>">
     </div>
     <div class="div_ben_cams">
       <h5 class="text-center"> <strong class="text-center"> <?php echo lang("Benefit_instal_cam"); ?> </strong></h5>

            <h5 class=""> <strong>Protection contre le vol </strong></h5>
            <p>L'installation de caméras de surveillance dans les magasins et dans
              les magasins les protège contre le vol, et certains installent des
              caméras de surveillance cachées ou des caméras de surveillance qui n'attirent pas l'attention
              et c'est une méthode de sécurité que beaucoup ne préfèrent pas.le but
               des caméras de surveillance est d'être visibles (surtout si elles
               sont internes) afin que tout le monde comprenne et remarque que le lieu est entièrement surveillé, ce qui
             </p>

             <h5> <strong>Surveiller Le Comportement Des Employés </strong> </h5>
             <p>Les caméras de sécurité peuvent-elles aider à surveiller le
                comportement des employés. Il peut montrer aux employés
                qui ne suivent pas les politiques de l'entreprise,
                et en utilisant des caméras de surveillance, il peut
                 connaître les heures de présence des employés, la façon dont
                 les employés interagissent avec les clients, à quelle
                 vitesse l'employé fait son travail et ainsi mesurer sa productivité
               </p>

               <h5> <strong>Réduction des vols internes inattendus :</strong> </h5>
               <p>Le vol peut provenir d'une personne inattendue, et cela provient de l'employé lui-même et
                 non d'un intrus sur place, les vols effectués par les vendeurs se sont beaucoup répandus,
                  en particulier dans les magasins et les pharmacies, et les caméras de surveillance
                  limitent cela mais l'empêchent, ce qui augmente le profit
                </p>

                <h5> <strong>Prévenir le vol pendant la charge décharge</strong> </h5>
                <p>Nous recommandons toujours d'installer des caméras de surveillance externes pour
                  protéger les marchandises contre le vol lorsqu'elles sont à l'extérieur, pendant l'étape du transport des marchandises et de leur stockage
                </p>

                <h5> <strong>Sécuriser Les Magasins Contre Le Vol</strong> </h5>
                <p>Il est très facile de mettre des caméras de surveillance dans les magasins, et dans la plupart des cas,
                  être l'éclairage dans les magasins est très faible, ce qui
                  rend l'installation de caméras ont des caractéristiques vision nocturne, une chose nécessaire, la vision infrarouge rapide est excellente et très claire
                </p>

                <h5> <strong>Preuve Matérielle De La Police</strong> </h5>
                <p>Tout ce que les caméras de surveillance filment est enregistré 24 heures et
                   pour une période allant jusqu'à un an sur le DVR attaché au système de
                    surveillance et peut être attaché comme preuve concluante à la police sur la survenance du vol et l'identification du voleur
                  </p>





     </div>




     <div class="fiv_form">
            <h6 class="text-center"> <strong><?php echo lang("get_the_service"); ?> </strong> </h6>
       <form class="needs-validation" novalidate>
         <div class="form-row">
           <div class="col-md-6 mb-3">
             <label for="full_name"><?php echo lang("fullName") ?></label>
             <input type="text" class="form-control" id="full_name" placeholder="<?php echo lang("fullName") ?>" value="" required>
           </div>
           <div class="col-md-6 mb-3">
             <label for="email"><?PHP echo lang("email"); ?></label>
             <div class="input-group">
               <div class="input-group-prepend">
                 <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
               </div>
               <input type="email" class="form-control" aria-describedby="emailHelp" id="email" placeholder="<?PHP echo lang("email"); ?>"  required>
             </div>
           </div>
         </div>
         <div class="form-row">
           <div class="col-md-6 mb-3">
             <label for="mobile"><?php echo lang("mobile"); ?></label>
             <input type="text" class="form-control" id="mobile" placeholder="<?php echo lang("mobile"); ?>" required>
           </div>

           <div class="col-md-6 mb-3">
             <label for="address"><?php echo lang("adress") ?></label>
             <input type="text" class="form-control" id="address" placeholder="<?php echo lang("adress") ?>" required>
           </div>
           <div class="col-md-6 mb-3">
             <label for="message"><?php echo lang("message") ?></label>
             <textarea type="text" class="form-control" id="message" placeholder="<?php echo lang("message") ?>" required></textarea>
           </div>
         </div>
         <button class="btn btn-primary" value="cams"  id="btn_submit"type="button"><?php echo lang("request_order"); ?></button>
       </form>
     </div>
     <?PHP

     $total_price  = $price / exchange(2);  ?>
     <div class="alert text-center">
     </div>
  </div>
   <?php
     }
   }else{
     $stmt = $conn->prepare("SELECT product.* from product
     WHERE 	Product_ID = :product_id");
     $stmt->bindParam(":product_id",$_GET["product_id"],PDO::PARAM_STR);
     $stmt->execute();
     $fetc  =  $stmt->fetchAll();
     foreach ($fetc as $value) {
     ?>
     <h1 class="text-center"><?php echo $value["Product_Name"]; ?></h1>
   <?php

}
}
}else if(isset($_GET["ERP"]) && isset($_GET["product_id"])){
  if ($_GET["ERP"] == "comoapp") {
    ?>
    <h1 class="text-center">Logiciel de comptabilité <?php echo lang("comoapp"); ?></h1>
    <div class="container">
      <input type="hidden" id="pdr_id" name="" value=" <?php echo $_GET["product_id"];  ?>">
      <input type="hidden" name="" id="prod_price" value="<?php echo get_product_price ($_GET["product_id"]) ?>">
      <ul>
        <li>Un programme complet qui est facile et simple à gérer toutes les activités commerciales telles que (boutiques – magasins - sociétés commerciales - expositions ) </li>
        <li><?php echo lang("comoapp"); ?> est considéré comme l'un des meilleurs programmes de comptabilité car il contient plusieurs listes pour gérer toutes les sections et différentes activités commerciales, et prendre en charge la TVA،</li>
        <li>Le programme de comptabilité vous aide à gérer toutes les sections suivantes (articles-magasins-achats - ventes-comptes-entretien-employés-rapports - paramètres )</li>
        <li>Vous pouvez émettre tous les rapports et factures en arabe via un programme de comptabilité intégré </li>
        <li>En plus de connecter les branches et les points de vente sur une seule base de données de n'importe où afin que vous puissiez suivre toutes les branches à travers un seul écran et les gérer facilement</li>
      </ul>
      <div class="div_img row">
        <div class="col-sm-12">
          <img src="<?php echo $img."pr_wrk_pla.jpg"?>" class="img_er__" alt="">

        </div>

      </div>

      <div class="cat_div text-center">
        <h5 class="text-center"> <strong>Listes des logiciels de comptabilité <?php echo lang("comoapp"); ?>  </strong>  </h5>
        <p>Le logiciel de comptabilité Easystore comprend plusieurs listes qui aident à gérer l'ensemble de l'entreprise </p>
        <p>Où les listes de programmes sont faciles à gérer en plus de la précision des données et des calculs </p>
        <p>Le programme des comptes se caractérise par la présence de plusieurs listes qui aident à la gestion et au suivi de toutes les transactions effectuées dans chaque département de manière intégrée </p>
        <p>Voici les caractéristiques de chaque liste de logiciels de comptabilité <?php echo lang("comoapp");?>.</p>

      </div>

      <div class="categoty">
        <h5> <strong><?php echo lang("category"); ?> </strong></h5>

        <div class="row">

          <div class="col-sm-12 col-md-6 di_con_">
           <p>
             Le programme de comptes vous aide à enregistrer et à suivre tous les éléments que vous traitez dans votre entreprise à partir du moment de receipt.In outre la modification des prix et la création et l'impression de codes à barres pour l'article
             Où vous pouvez enregistrer des éléments et les entrer dans le programme via la liste des éléments, qui comprend (magasins-articles-entreprises-types-unités-couleurs-tailles-impression de codes à barres )
           </p>

           <ul>
             <li>♦ Enregistrez des sous-unités et ajoutez un magasin à un utilisateur </li>
             <li>♦ Exporter et importer des éléments à partir d'une feuille Excel Excel </li>
             <li>♦ Modification des prix de l'entreprise et modification des prix des articles</li>
             <li>♦ Enregistrer des sous-unités et ajouter un magasin à l'utilisateur</li>
             <li>♦ Créer et imprimer des codes à barres pour les articles</li>
             <li>♦ Créer et imprimer des codes à barres pour les articles</li>
           </ul>

          </div>

          <div class="col-sm-12 col-md-6">
            <img src="<?php echo $img."category.jpg" ?>" alt="">
          </div>



        </div>

      </div>

      <div class="stor_div">
        <h5> <strong>Gestion d'entrepôt</strong> </h5>

        <div class="row">

          <div class="col-sm-12 col-md-6 di_con_">
            <ul>
              <li>Le programme  <?php echo lang("comoapp"); ?> vous aide à gérer les magasins et les entrepôts, à les surveiller et à
                suivre tous les détails liés aux articles existants où vous pouvez compter pleinement sur la liste des magasins dans la gestion de vos magasins en toute simplicité
              </li>

              <p class="text-center"> <strong>Qui vous aide à :</strong> </p>
              <li>♦ Décantation les quantités d'articles dans les magasins </li>
              <li>♦ Conversion de magasin à magasin</li>
              <li>♦ Inventaire des magasins en code à barres</li>
              <li>♦ Enregistrement des publications en série d'articles</li>
              <li>♦ Le assemblent plusieurs articles dans un produit ou démontent</li>
            </ul>
          </div>

          <div class="col-sm-12 col-md-6">
            <img src=" <?php echo $img."maga.jpg"; ?>" alt="">
          </div>

        </div>


      </div>

      <div class="div_sale">
        <h5> <strong>Gestion des Achats</strong> </h5>
        <div class="row">
          <div class="col-sm-12 col-md-6 di_con_">
            <p>La gestion des achats dans le programme <?php echo lang("comoapp"); ?>  Accounts à partir des listes importantes de toute activité commerciale est responsable du suivi et de la gestion de toutes les transactions effectuées dans le département des achats </p>
            <p>Gestion des comptes, des fournisseurs, des entreprises et enregistrer toutes les factures des fournisseurs et des entreprises qui vous fournissent les marchandises et les dollars de l'État</p>
            <p class="text-center"> <strong>Où la liste des achats vous aide :</strong> </p>
            <ul>
              <li>♦ Enregistrement des données du fournisseur</li>
              <li>♦ Enregistrer ou modifier les factures d'achat</li>
              <li>♦ Enregistrer ou modifier les retours</li>
              <li>♦ Enregistrer les achats de retour sans facture</li>
              <li>♦ Enregistrement des comptes fournisseurs</li>
              <li>♦ Enregistrer les commandes des fournisseurs</li>
            </ul>

          </div>
          <div class="col-sm-12 col-md-6">
            <img src="<?php echo $img."sales.jpg"; ?>" alt="">
          </div>

        </div>

      </div>

      <div class="buy_div">
        <h5> <strong>Administration des ventes</strong> </h5>
        <div class="row">
          <div class="col-sm-12 col-md-6 di_con_">
            <p>Le département des ventes dans tout programme de comptabilité est l'un des principaux départements de toute activité commerciale où de nombreuses transactions commerciales
              sont effectuées pour les clients, ce qui affecte tous les autres départements, ce qui vous aidera parfaitement dans la gestion de l'activité commerciale
            </p>

            <p>La liste des ventes comprend de nombreuses options et listes qui vous permettent de gérer plus facilement les achats pour les clients, leurs plates-formes et leurs comptes,
              en plus de suivre et d'enregistrer les factures et les versements pour les clients, de restructurer et d'alerter les dates des avantages pour les clients actuels et à venir
            </p>
            <ul>
              <li>♦ Enregistrement des données client et des appels</li>
              <li>♦ Enregistrer ou modifier la facture de vente</li>
              <li>♦ Enregistrer les retours de vente ou les retours sans facture</li>
              <li>♦ Enregistrement du compte client</li>
              <li>♦ Remise ou avis complémentaire pour le client</li>
            </ul>

          </div>
          <div class="col-sm-12 col-md-6">
            <img src="<?php echo $img."buy.jpg"; ?>" alt="">
          </div>

        </div>


      </div>

      <div class="compt_div">
        <h5> <strong>Gestion de compte</strong> </h5>
        <div class="row">
          <div class="col-sm-12 col-md-6 di_con_">
            <p>La gestion des comptes dans les programmes comptables a besoin de données précises car vous pouvez gérer et enregistrer tous les détails financiers liés au service des comptes en détail et avec la plus grande précision </p>

            <p> Ceux - ci comprennent (revenus – dépenses – coffres – forts – banques – chèques – partenaires – prêts – avances – retraits personnels – frais généraux-Frais de fondation-immobilisations-amortissement des actifs ) </p>
            <ul>
              <li>♦ Enregistrez les casiers et ajoutez-y un utilisateur </li>
              <li>♦  Connaître les soldes du premier terme </li>
              <li>♦ Enregistrement des immobilisations et amortissement des actifs</li>
              <li>♦  Enregistrement, prêts et avances</li>
              <li>♦ Enregistrement des retraits personnels et des frais généraux et constitutifs</li>
              <li>♦ Autres partenaires d'enregistrement et de gestion des revenus</li>
            </ul>

          </div>
          <div class="col-sm-12 col-md-6">
            <img src="<?php echo $img."acount.jpg"; ?>" alt="">
          </div>

        </div>


      </div>

      <div class="emplo_div">
        <h5> <strong>gestion des employés</strong> </h5>
        <div class="row">
          <div class="col-sm-12 col-md-6 di_con_">
            <p> Grâce au menu <?php echo lang("comoapp"); ?>  employee affairs, vous pouvez suivre et enregistrer les employés ( noms des employés – dates de présence et de départ – retards – vacances – autorisations – salaires – primes-pièces ) .</p>

            <p> Le programme vous aide à organiser et à gérer efficacement les employés et leurs horaires de travail grâce à : </p>
            <ul>
              <li>♦ Définir les paramètres généraux du personnel </li>
              <li>♦ Enregistrement des données du personnel et des dates de travail</li>
              <li>♦ Importer le fichier de présence et de départ</li>
              <li>♦ Enregistrement des absences, des retards et des heures supplémentaires avec le dispositif d'empreintes digitales</li>
              <li>♦ Enregistrement des retraits personnels et des frais généraux et constitutifs</li>
              <li>♦ Rapport à l'employé avec salaire, déduction et primes</li>
            </ul>

          </div>
          <div class="col-sm-12 col-md-6">
            <img src="<?php echo $img."zk.jpg"; ?>" alt="">
          </div>

        </div>


      </div>




      <div class="raport_div">
        <h5> <strong>Rapports sur les comptes</strong> </h5>
        <div class="row">
          <div class="col-sm-12 col-md-6 di_con_">
            <p> Pour suivre toutes les transactions qui ont lieu au sein de votre entreprise a été créé une liste de rapports à travers lequel vous pouvez faire des rapports différents entre les comptes, les ventes, les achats, les magasins et les articles</p>
            <p> Vous pouvez également créer des rapports de rentabilité et d'autres rapports grâce auxquels vous pouvez suivre l'ensemble de votre entreprise et vous aider à gérer assez facilement: </p>
            <ul>
              <li>♦ Faire tous les rapports de vente </li>
              <li>♦ Rapports clients </li>
              <li>♦ Rapports sur le trafic des achats </li>
              <li>♦ Rapports de trafic de trésorerie et rapport de trafic utilisateur </li>
              <li>♦ Rapports de comptes</li>
            </ul>
          </div>
          <div class="col-sm-12 col-md-6">
            <img src="<?php echo $img."raport.jpg"; ?>" alt="">
          </div>
        </div>
      </div>


      <div class="featue">
        <h5 class="text-center"> <strong> Caractéristiques du programme <?php echo lang("comoapp"); ?>  </strong> </h5>
        <p> <?php echo lang("comoapp"); ?> C'est l'un des meilleurs logiciels de comptabilité pour gérer les activités commerciales grâce à plusieurs fonctionnalités pour vous aider à gérer facilement les activités commerciales</p>

        <ul>
          <li>♦ Enregistrement d'un nombre infini catégories</li>
          <li>♦ Enregistrer les magasins et déterminer qui est responsable de chaque magasin</li>
          <li>♦ Exporter et importer des éléments à partir d'une feuille Excel</li>
          <li>♦ Ajustement des quantités catégories</li>
          <li>♦ Gérer les comptes, les ventes et les services d'approvisionnement en détail</li>
          <li>♦ Relier les branches sur une seule base de données</li>
          <li>♦ Audit de l'équilibre du travail, liste des revenus et rapport de rentabilité</li>
          <li>♦ Définir les autorisations des utilisateurs sur le programme en fonction de leur travail</li>
          <li>♦ Faire des factures de vente et d'approvisionnement</li>
          <li>♦ Enregistrer et archiver les détails de facturation et de fournisseur</li>
          <li>♦ Afficher les prix, émettre des reçus et enregistrer les ventes</li>
          <li>♦ Devis complet des produits</li>
          <li>♦ Enregistrement de la valeur des actifs, du capital et de la valeur périssable</li>
          <li>♦ Enregistrement des clients, fournisseurs, délégués et entreprises</li>
          <li>♦ Gestion du personnel, présence, départ, vacances, etc.</li>
          <li>♦ Support technique et mises à jour constantes sur le logiciel</li>
        </ul>

      </div>

      <form class="needs-validation" novalidate>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="full_name"><?php echo lang("fullName") ?></label>
            <input type="text" class="form-control" id="full_name" placeholder="<?php echo lang("fullName") ?>" value="" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="email"><?PHP echo lang("email"); ?></label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
              </div>
              <input type="email" class="form-control" aria-describedby="emailHelp" id="email" placeholder="<?PHP echo lang("email"); ?>"  required>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="mobile"><?php echo lang("mobile"); ?></label>
            <input type="text" class="form-control" id="mobile" placeholder="<?php echo lang("mobile"); ?>" required>
          </div>

          <div class="col-md-6 mb-3">
            <label for="address"><?php echo lang("adress") ?></label>
            <input type="text" class="form-control" id="address" placeholder="<?php echo lang("adress") ?>" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="message"><?php echo lang("message") ?></label>
            <textarea type="text" class="form-control" id="message" placeholder="<?php echo lang("message") ?>" required></textarea>
          </div>
        </div>
        <button class="btn btn-primary"  id="btn_submit"type="button"><?php echo lang("request_order"); ?></button>
      </form>
      <div class="alert text-center">
      </div>






<!-- START PAYAP -->
<?php
/*
$price = trim(get_product_price ($_GET["product_id"]));
$total_price  = $price / exchange("2"); ?>

<?php */ ?>

<!-- END PAYPAL -->
    </div>
    <?php

  }




}

?>    
<div class="div_pay">
  <div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=ASvNaabsdeh9N_nxtfsxc04_DmUWNTjHJtY-d4GGkCp-3FDFFv3AM0jnZzOHwfTdmBSKGKp3081izByQ&currency=EUR" data-sdk-integration-source="button-factory"></script>

</div>
                                                                                                                                                                                                                                                                                                        
<?php include($template."footer.php");
}
else{
  header("location:index.php");
  exit();
}
?>

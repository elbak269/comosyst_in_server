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
        <p> <strong> <i class="fa fa-hdd"> </i> H??bergement gratuit pendant <span><?php  echo $value["Month_Free_Hosting"];  ?> Mois </span> </strong> </p>
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

      <p> <strong> <i class="fas fa-users"></i> votre site ?? des sites de r??seaux sociaux, tels que Facebook, YouTube : <span><?php  echo lang("yes");  ?> <i class="fa fa-check"> </i></span> </strong> </p>

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
            <p>L'installation de cam??ras de surveillance dans les magasins et dans
              les magasins les prot??ge contre le vol, et certains installent des
              cam??ras de surveillance cach??es ou des cam??ras de surveillance qui n'attirent pas l'attention
              et c'est une m??thode de s??curit?? que beaucoup ne pr??f??rent pas.le but
               des cam??ras de surveillance est d'??tre visibles (surtout si elles
               sont internes) afin que tout le monde comprenne et remarque que le lieu est enti??rement surveill??, ce qui
             </p>

             <h5> <strong>Surveiller Le Comportement Des Employ??s </strong> </h5>
             <p>Les cam??ras de s??curit?? peuvent-elles aider ?? surveiller le
                comportement des employ??s. Il peut montrer aux employ??s
                qui ne suivent pas les politiques de l'entreprise,
                et en utilisant des cam??ras de surveillance, il peut
                 conna??tre les heures de pr??sence des employ??s, la fa??on dont
                 les employ??s interagissent avec les clients, ?? quelle
                 vitesse l'employ?? fait son travail et ainsi mesurer sa productivit??
               </p>

               <h5> <strong>R??duction des vols internes inattendus :</strong> </h5>
               <p>Le vol peut provenir d'une personne inattendue, et cela provient de l'employ?? lui-m??me et
                 non d'un intrus sur place, les vols effectu??s par les vendeurs se sont beaucoup r??pandus,
                  en particulier dans les magasins et les pharmacies, et les cam??ras de surveillance
                  limitent cela mais l'emp??chent, ce qui augmente le profit
                </p>

                <h5> <strong>Pr??venir le vol pendant la charge d??charge</strong> </h5>
                <p>Nous recommandons toujours d'installer des cam??ras de surveillance externes pour
                  prot??ger les marchandises contre le vol lorsqu'elles sont ?? l'ext??rieur, pendant l'??tape du transport des marchandises et de leur stockage
                </p>

                <h5> <strong>S??curiser Les Magasins Contre Le Vol</strong> </h5>
                <p>Il est tr??s facile de mettre des cam??ras de surveillance dans les magasins, et dans la plupart des cas,
                  ??tre l'??clairage dans les magasins est tr??s faible, ce qui
                  rend l'installation de cam??ras ont des caract??ristiques vision nocturne, une chose n??cessaire, la vision infrarouge rapide est excellente et tr??s claire
                </p>

                <h5> <strong>Preuve Mat??rielle De La Police</strong> </h5>
                <p>Tout ce que les cam??ras de surveillance filment est enregistr?? 24 heures et
                   pour une p??riode allant jusqu'?? un an sur le DVR attach?? au syst??me de
                    surveillance et peut ??tre attach?? comme preuve concluante ?? la police sur la survenance du vol et l'identification du voleur
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
    <h1 class="text-center">Logiciel de comptabilit?? <?php echo lang("comoapp"); ?></h1>
    <div class="container">
      <input type="hidden" id="pdr_id" name="" value=" <?php echo $_GET["product_id"];  ?>">
      <input type="hidden" name="" id="prod_price" value="<?php echo get_product_price ($_GET["product_id"]) ?>">
      <ul>
        <li>Un programme complet qui est facile et simple ?? g??rer toutes les activit??s commerciales telles que (boutiques ??? magasins - soci??t??s commerciales - expositions ) </li>
        <li><?php echo lang("comoapp"); ?> est consid??r?? comme l'un des meilleurs programmes de comptabilit?? car il contient plusieurs listes pour g??rer toutes les sections et diff??rentes activit??s commerciales, et prendre en charge la TVA??</li>
        <li>Le programme de comptabilit?? vous aide ?? g??rer toutes les sections suivantes (articles-magasins-achats - ventes-comptes-entretien-employ??s-rapports - param??tres )</li>
        <li>Vous pouvez ??mettre tous les rapports et factures en arabe via un programme de comptabilit?? int??gr?? </li>
        <li>En plus de connecter les branches et les points de vente sur une seule base de donn??es de n'importe o?? afin que vous puissiez suivre toutes les branches ?? travers un seul ??cran et les g??rer facilement</li>
      </ul>
      <div class="div_img row">
        <div class="col-sm-12">
          <img src="<?php echo $img."pr_wrk_pla.jpg"?>" class="img_er__" alt="">

        </div>

      </div>

      <div class="cat_div text-center">
        <h5 class="text-center"> <strong>Listes des logiciels de comptabilit?? <?php echo lang("comoapp"); ?>  </strong>  </h5>
        <p>Le logiciel de comptabilit?? Easystore comprend plusieurs listes qui aident ?? g??rer l'ensemble de l'entreprise </p>
        <p>O?? les listes de programmes sont faciles ?? g??rer en plus de la pr??cision des donn??es et des calculs </p>
        <p>Le programme des comptes se caract??rise par la pr??sence de plusieurs listes qui aident ?? la gestion et au suivi de toutes les transactions effectu??es dans chaque d??partement de mani??re int??gr??e </p>
        <p>Voici les caract??ristiques de chaque liste de logiciels de comptabilit?? <?php echo lang("comoapp");?>.</p>

      </div>

      <div class="categoty">
        <h5> <strong><?php echo lang("category"); ?> </strong></h5>

        <div class="row">

          <div class="col-sm-12 col-md-6 di_con_">
           <p>
             Le programme de comptes vous aide ?? enregistrer et ?? suivre tous les ??l??ments que vous traitez dans votre entreprise ?? partir du moment de receipt.In outre la modification des prix et la cr??ation et l'impression de codes ?? barres pour l'article
             O?? vous pouvez enregistrer des ??l??ments et les entrer dans le programme via la liste des ??l??ments, qui comprend (magasins-articles-entreprises-types-unit??s-couleurs-tailles-impression de codes ?? barres )
           </p>

           <ul>
             <li>??? Enregistrez des sous-unit??s et ajoutez un magasin ?? un utilisateur </li>
             <li>??? Exporter et importer des ??l??ments ?? partir d'une feuille Excel Excel </li>
             <li>??? Modification des prix de l'entreprise et modification des prix des articles</li>
             <li>??? Enregistrer des sous-unit??s et ajouter un magasin ?? l'utilisateur</li>
             <li>??? Cr??er et imprimer des codes ?? barres pour les articles</li>
             <li>??? Cr??er et imprimer des codes ?? barres pour les articles</li>
           </ul>

          </div>

          <div class="col-sm-12 col-md-6">
            <img src="<?php echo $img."category.jpg" ?>" alt="">
          </div>



        </div>

      </div>

      <div class="stor_div">
        <h5> <strong>Gestion d'entrep??t</strong> </h5>

        <div class="row">

          <div class="col-sm-12 col-md-6 di_con_">
            <ul>
              <li>Le programme  <?php echo lang("comoapp"); ?> vous aide ?? g??rer les magasins et les entrep??ts, ?? les surveiller et ??
                suivre tous les d??tails li??s aux articles existants o?? vous pouvez compter pleinement sur la liste des magasins dans la gestion de vos magasins en toute simplicit??
              </li>

              <p class="text-center"> <strong>Qui vous aide ?? :</strong> </p>
              <li>??? D??cantation les quantit??s d'articles dans les magasins </li>
              <li>??? Conversion de magasin ?? magasin</li>
              <li>??? Inventaire des magasins en code ?? barres</li>
              <li>??? Enregistrement des publications en s??rie d'articles</li>
              <li>??? Le assemblent plusieurs articles dans un produit ou d??montent</li>
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
            <p>La gestion des achats dans le programme <?php echo lang("comoapp"); ?>  Accounts ?? partir des listes importantes de toute activit?? commerciale est responsable du suivi et de la gestion de toutes les transactions effectu??es dans le d??partement des achats </p>
            <p>Gestion des comptes, des fournisseurs, des entreprises et enregistrer toutes les factures des fournisseurs et des entreprises qui vous fournissent les marchandises et les dollars de l'??tat</p>
            <p class="text-center"> <strong>O?? la liste des achats vous aide :</strong> </p>
            <ul>
              <li>??? Enregistrement des donn??es du fournisseur</li>
              <li>??? Enregistrer ou modifier les factures d'achat</li>
              <li>??? Enregistrer ou modifier les retours</li>
              <li>??? Enregistrer les achats de retour sans facture</li>
              <li>??? Enregistrement des comptes fournisseurs</li>
              <li>??? Enregistrer les commandes des fournisseurs</li>
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
            <p>Le d??partement des ventes dans tout programme de comptabilit?? est l'un des principaux d??partements de toute activit?? commerciale o?? de nombreuses transactions commerciales
              sont effectu??es pour les clients, ce qui affecte tous les autres d??partements, ce qui vous aidera parfaitement dans la gestion de l'activit?? commerciale
            </p>

            <p>La liste des ventes comprend de nombreuses options et listes qui vous permettent de g??rer plus facilement les achats pour les clients, leurs plates-formes et leurs comptes,
              en plus de suivre et d'enregistrer les factures et les versements pour les clients, de restructurer et d'alerter les dates des avantages pour les clients actuels et ?? venir
            </p>
            <ul>
              <li>??? Enregistrement des donn??es client et des appels</li>
              <li>??? Enregistrer ou modifier la facture de vente</li>
              <li>??? Enregistrer les retours de vente ou les retours sans facture</li>
              <li>??? Enregistrement du compte client</li>
              <li>??? Remise ou avis compl??mentaire pour le client</li>
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
            <p>La gestion des comptes dans les programmes comptables a besoin de donn??es pr??cises car vous pouvez g??rer et enregistrer tous les d??tails financiers li??s au service des comptes en d??tail et avec la plus grande pr??cision </p>

            <p> Ceux - ci comprennent (revenus ??? d??penses ??? coffres ??? forts ??? banques ??? ch??ques ??? partenaires ??? pr??ts ??? avances ??? retraits personnels ??? frais g??n??raux-Frais de fondation-immobilisations-amortissement des actifs ) </p>
            <ul>
              <li>??? Enregistrez les casiers et ajoutez-y un utilisateur </li>
              <li>???  Conna??tre les soldes du premier terme </li>
              <li>??? Enregistrement des immobilisations et amortissement des actifs</li>
              <li>???  Enregistrement, pr??ts et avances</li>
              <li>??? Enregistrement des retraits personnels et des frais g??n??raux et constitutifs</li>
              <li>??? Autres partenaires d'enregistrement et de gestion des revenus</li>
            </ul>

          </div>
          <div class="col-sm-12 col-md-6">
            <img src="<?php echo $img."acount.jpg"; ?>" alt="">
          </div>

        </div>


      </div>

      <div class="emplo_div">
        <h5> <strong>gestion des employ??s</strong> </h5>
        <div class="row">
          <div class="col-sm-12 col-md-6 di_con_">
            <p> Gr??ce au menu <?php echo lang("comoapp"); ?>  employee affairs, vous pouvez suivre et enregistrer les employ??s ( noms des employ??s ??? dates de pr??sence et de d??part ??? retards ??? vacances ??? autorisations ??? salaires ??? primes-pi??ces ) .</p>

            <p> Le programme vous aide ?? organiser et ?? g??rer efficacement les employ??s et leurs horaires de travail gr??ce ?? : </p>
            <ul>
              <li>??? D??finir les param??tres g??n??raux du personnel </li>
              <li>??? Enregistrement des donn??es du personnel et des dates de travail</li>
              <li>??? Importer le fichier de pr??sence et de d??part</li>
              <li>??? Enregistrement des absences, des retards et des heures suppl??mentaires avec le dispositif d'empreintes digitales</li>
              <li>??? Enregistrement des retraits personnels et des frais g??n??raux et constitutifs</li>
              <li>??? Rapport ?? l'employ?? avec salaire, d??duction et primes</li>
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
            <p> Pour suivre toutes les transactions qui ont lieu au sein de votre entreprise a ??t?? cr???? une liste de rapports ?? travers lequel vous pouvez faire des rapports diff??rents entre les comptes, les ventes, les achats, les magasins et les articles</p>
            <p> Vous pouvez ??galement cr??er des rapports de rentabilit?? et d'autres rapports gr??ce auxquels vous pouvez suivre l'ensemble de votre entreprise et vous aider ?? g??rer assez facilement: </p>
            <ul>
              <li>??? Faire tous les rapports de vente </li>
              <li>??? Rapports clients </li>
              <li>??? Rapports sur le trafic des achats </li>
              <li>??? Rapports de trafic de tr??sorerie et rapport de trafic utilisateur </li>
              <li>??? Rapports de comptes</li>
            </ul>
          </div>
          <div class="col-sm-12 col-md-6">
            <img src="<?php echo $img."raport.jpg"; ?>" alt="">
          </div>
        </div>
      </div>


      <div class="featue">
        <h5 class="text-center"> <strong> Caract??ristiques du programme <?php echo lang("comoapp"); ?>  </strong> </h5>
        <p> <?php echo lang("comoapp"); ?> C'est l'un des meilleurs logiciels de comptabilit?? pour g??rer les activit??s commerciales gr??ce ?? plusieurs fonctionnalit??s pour vous aider ?? g??rer facilement les activit??s commerciales</p>

        <ul>
          <li>??? Enregistrement d'un nombre infini cat??gories</li>
          <li>??? Enregistrer les magasins et d??terminer qui est responsable de chaque magasin</li>
          <li>??? Exporter et importer des ??l??ments ?? partir d'une feuille Excel</li>
          <li>??? Ajustement des quantit??s cat??gories</li>
          <li>??? G??rer les comptes, les ventes et les services d'approvisionnement en d??tail</li>
          <li>??? Relier les branches sur une seule base de donn??es</li>
          <li>??? Audit de l'??quilibre du travail, liste des revenus et rapport de rentabilit??</li>
          <li>??? D??finir les autorisations des utilisateurs sur le programme en fonction de leur travail</li>
          <li>??? Faire des factures de vente et d'approvisionnement</li>
          <li>??? Enregistrer et archiver les d??tails de facturation et de fournisseur</li>
          <li>??? Afficher les prix, ??mettre des re??us et enregistrer les ventes</li>
          <li>??? Devis complet des produits</li>
          <li>??? Enregistrement de la valeur des actifs, du capital et de la valeur p??rissable</li>
          <li>??? Enregistrement des clients, fournisseurs, d??l??gu??s et entreprises</li>
          <li>??? Gestion du personnel, pr??sence, d??part, vacances, etc.</li>
          <li>??? Support technique et mises ?? jour constantes sur le logiciel</li>
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

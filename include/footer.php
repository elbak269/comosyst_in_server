<!--START SECTION LOADING-->
<!--<section class="loading_section">
  <div class="spinner">
    <div class="double-bounce1"></div>
    <div class="double-bounce2"></div>
  </div>
</section> -->
<!--START SECTION LOADING-->

<div class="div_cen_footer footer">
  <div class="row">
    <div class="col-sm-12 col-md-3 col-lg-2 col_footer__">
      <h3> <strong>Web Design</strong> </h3>
      <a href="contact_us.php?web_=1"><i class="fa fa-link"></i> Amélioration du site Web</a>
      <a> <i class="fa fa-link"></i> Réservation de domaine et hébergement</a>
      <a> <i class="fa fa-link"></i> Gestion du contenu du site Web</a>
    </div>

    <div class="col-sm-12 col-md-3 col-lg-2 col_footer__">
      <h3> <strong> Dessins graphiques </strong></h3>
      <a href=""> <i class="fa fa-link"></i> Création de logo</a>
      <a> <i class="fa fa-link"></i> Conception d'identité d'entreprise</a>
      <a> <i class="fa fa-link"></i> Pages Facebook</a>
      <a> <i class="fa fa-link"></i> Conceptions publicitaires</a>
    </div>

    <div class="col-sm-12 col-md-3 col-lg-2 col_footer__">
      <h3> <strong> Commercialisation </strong></h3>
      <a> <i class="fa fa-link"></i> Créer un plan marketing</a>
      <a> <i class="fa fa-link"></i> Annonces Google</a>
      <a> <i class="fa fa-link"></i> Annonces Facebook</a>
    </div>

    <div class="col-sm-12 col-md-3 col-lg-2 col_footer__">
      <h3> <strong> Notre service </strong></h3>
      <a> <i class="fa fa-link"></i> Protection du site</a>
      <a> <i class="fa fa-link"></i> Marketing professionally</a>
      <a href="contact_us.php?mobil_ap=1"> <i class="fa fa-link"></i> Applications Android</a>
      <a> <i class="fa fa-link"></i> Applications Windows</a>
    </div>


    <div class="col-sm-12 col-md-3 col-lg-2 col_footer__">
      <h3> <i class="fa fa-link"></i> <strong>Comosyst</strong></h3>
      <a href="contact_us.php"> <i class="fa fa-link"></i> Contactez-nous</a>
      <a> <i class="fa fa-link"></i> Politique de confidentialité</a>
    </div>

  </div>

</div>
<div class="div_money">

  <select class="form-select" id="select_currency" >
    <option value="1">KMF</option>
    <option value="2">EUR</option>
  </select>
</div>


<script src="theme/js/vue.js"></script>
<script  src="theme/js/jquery-3.4.1.min.js"></script>
<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
-->
<script  src="theme/js/bootstrap.min.js"></script>
<script  src="theme/js/jquery-ui.min.js"></script>
<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>
-->
 </head>
 <script src="theme/./slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script  src="theme/js/main.js"></script>
<?php if(isset($loginjs)){
  echo '<script src="theme/js/about.js"></script>';
} ?>

<?php if(isset($about_js)){
  echo '<script src="theme/js/about.js"></script>';
} ?>

<?php if(isset($contact_us_css)){
  echo '<script src="theme/js/contact.js"></script>';
} ?>

<?php if(isset($serve_js)){
  echo '<script src="theme/js/serve.js"></script>';
} ?>

<?php if(isset($index_js)){
  echo '<script src="theme/js/index.js"></script>';
} ?>
<?php if(isset($category_js)){
  echo '<script src="theme/js/category.js"></script>';
} ?>
<?php if(isset($brand_js)){
  echo '<script src="theme/js/brand.js"></script>';
} ?>

<?php if(isset($item_js)){
  echo '<script src="theme/js/item.js"></script>';
} ?>

<?php if(isset($payment_js)){
  echo '<script src="theme/js/payment.js"></script>';
} ?>

<?php if(isset($itemsforshopping_js)){
  echo '<script src="theme/js/itemsforshipping.js"></script>';
} ?>
<?php if(isset($itemsshopping_for_client_js)){
  echo '<script src="theme/js/itemshipingforclient.js"></script>';
} ?>
<?php if(isset($incart_js)){
  echo '<script src="theme/js/incart.js"></script>';
} ?>
<?php if(isset($chat_js)){
  echo '<script src="theme/js/chat.js"></script>';
} ?>
<?php if(isset($chat_client_js)){
  echo '<script src="theme/js/chat_client.js"></script>';
} ?>
<?php if(isset($setting_mypage_js)){
  echo '<script src="theme/js/setting_mypage.js"></script>';
} ?>

<?php if(isset($searchproducts_js)){
  echo '<script src="theme/js/searchproducts.js"></script>';
} ?>

<?php if(isset($add_product)){
  echo '<script src="theme/js/add_product.js"></script>';
} ?>

<?php if(isset($edit_product_js)){
  echo '<script src="theme/js/edit_product.js"></script>';
}

if (isset($return_product_js)) {
echo '<script src="theme/js/return_product.js"></script>';
}

if (isset($info_produt)) {
echo '<script src="theme/js/info_produt.js"></script>';
}

if (isset($index_js)) {
echo '<script src="theme/js/index.js"></script>';
}?>













<p class="text-center">CopyRight &copy Comosyst 2021</p>

</body>
</html>

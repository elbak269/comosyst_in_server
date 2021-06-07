<?php
include("config/connect.php");
include("functions/functions.php");



if (isset($_POST["get_offers_"]) && isset($_POST["get_products"])) {
  $stm = $conn->prepare("SELECT product.* ,
  website.Site_Name,website.Pages,website.Secure,
  website.Storage,website.Control_Panel,website.Multi_anguage,website.Ecomerce,
  website.Domain,
  secure_web.Secure_Name,
  website.Month_Free_Hosting,
  website.Month_Free_Domain
  FROM product
  LEFT JOIN products_type ON products_type.Type_ID = product.Type
  LEFT JOIN website ON website.Site_ID  = product.Website
  Left join secure_web on secure_web.Secure_ID  = website.Secure
  where Type = 1
  ");
  $stm->execute();
  $data = $stm->fetchAll();
  echo json_encode($data);
}
else if (isset($_POST["Product_id"]) && isset($_POST["get_price"])) {
  $stm = $conn->prepare("SELECT product.Price
  FROM product
  LEFT JOIN products_type ON products_type.Type_ID = product.Type
  LEFT JOIN website ON website.Site_ID  = product.Website
  Left join secure_web on secure_web.Secure_ID  = website.Secure
  where product.Product_ID  = :prpduct_id
  ");
  $stm->bindParam(":prpduct_id",$_POST["Product_id"],PDO::PARAM_STR);
  $stm->execute();
  $data = $stm->fetchAll();
  echo json_encode($data);
}

else if (isset($_POST["get_cams_offer"])){
  echo json_encode(get_offer_camera());
}else if (isset($_POST["get_erp_products"])){
  $dat = get_erp_produts();
  echo json_encode($dat);
}
 ?>

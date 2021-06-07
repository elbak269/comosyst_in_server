<?php

function getTitle(){
  global $pageTitle;
  if (isset($pageTitle)) {
    echo $pageTitle;
  }
  else {
    echo "deafult";
  }

}
function get_product_price ($product_id) {
  global $conn;
  $stm = $conn->prepare("SELECT product.Price
  FROM product
  LEFT JOIN products_type ON products_type.Type_ID = product.Type
  LEFT JOIN website ON website.Site_ID  = 1
  Left join secure_web on secure_web.Secure_ID  = website.Secure
  where product.Product_ID  = :prpduct_id
  ");
  $stm->bindParam(":prpduct_id",$product_id,PDO::PARAM_STR);
  $stm->execute();
  $data = $stm->fetchAll();
  $res = "";
  foreach ($data as $value) {
    $res = $value["Price"];
}
return $res;
}


function get_offer_camera(){

  global $conn;
  $stm = $conn->prepare("SELECT product.* ,
  website.Site_Name,website.Pages,website.Secure,
  website.Storage,website.Control_Panel,website.Multi_anguage,website.Ecomerce,
  website.Domain,
  secure_web.Secure_Name
  FROM product
  LEFT JOIN products_type ON products_type.Type_ID = product.Type
  LEFT JOIN website ON website.Site_ID  = 1
  Left join secure_web on secure_web.Secure_ID  = website.Secure
  where Type = 6
  ");
  $stm->execute();
  $fetch = $stm->fetchAll();
  return $fetch;

}

function get_features($product_id){
  global $conn;
  $stmt = $conn->prepare("SELECT Feature_Name  FROM feature_offer WHERE Product_ID  = :product_id");
  $stmt->bindParam(":product_id",$product_id,PDO::PARAM_INT);
  $stmt->execute();
  $res = $stmt->fetchAll();
  return $res;
}

function get_erp_produts(){
  global $conn;
  $stmt = $conn->prepare("SELECT *  FROM product WHERE product.Type  = 7");
  $stmt->execute();
  $res = $stmt->fetchAll();
  return $res;
}

function  exchange($curency_id){
global $conn;
    $stmt = $conn->prepare("SELECT  Curenccy_Value from exchange WHERE exchange_id = :curency_id");
    $stmt->bindParam(":curency_id",$curency_id,PDO::PARAM_STR);
    $stmt->execute();
    $fetch = $stmt->fetchAll();
    $resul = "";
    foreach ($fetch as  $value) {
      $resul = $value["Curenccy_Value"];
    }
    return $resul;

}
 ?>

<?php
include("config/connect.php");
include("functions/functions.php");
if ( isset($_POST["fullName"]) && isset($_POST["email"]) && isset($_POST["mobile"]) &&
isset($_POST["address"]) && isset($_POST["message"]) && isset($_POST["product_id"]) && isset($_POST["amount"])){

if (get_product_price($_POST["product_id"]) == $_POST["amount"]) {
  $AMOUNT = trim($_POST["amount"]);
  $product_id = trim($_POST["product_id"]);
  $fullName = trim($_POST["fullName"]);
  $email = trim($_POST["email"]);
  $mobile = trim($_POST["mobile"]);
  $address = trim($_POST["address"]);
  $message = trim($_POST["message"]);
  $amount = trim($_POST["amount"]);


$stmt = $conn->prepare("INSERT INTO orders (Date_Requested)VALUES(NOW())");
if ($stmt->execute())
$id = $conn->lastInsertId();
$stmt1 = $conn->prepare("INSERT INTO order_details (Order_ID,Product_ID,Date_Requested,Amount,TotalAmount,fullName,client_email,mobile,address,message)
VALUES(:Order_ID , :Product_ID , NOW() , :Amount , :TotalAmount, :fullName , :client_email , :mobile , :address , :message)");
$stmt1->bindParam(":Order_ID",$id,PDO::PARAM_INT);
$stmt1->bindParam(":Product_ID",$_POST["product_id"],PDO::PARAM_INT);
$stmt1->bindParam(":Amount",$AMOUNT,PDO::PARAM_STR);
$stmt1->bindParam(":TotalAmount",$AMOUNT,PDO::PARAM_STR);
$stmt1->bindParam(":fullName",$fullName,PDO::PARAM_STR);
$stmt1->bindParam(":client_email",$email,PDO::PARAM_STR);
$stmt1->bindParam(":mobile",$mobile,PDO::PARAM_STR);
$stmt1->bindParam(":address",$address,PDO::PARAM_STR);
$stmt1->bindParam(":message",$message,PDO::PARAM_STR);
if ($stmt1->execute()) {
  echo "1";
}
}else{
  echo "no match";
}

}


?>

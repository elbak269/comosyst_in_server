<?php

include("config/connect.php");

if (isset($_POST["exchange"]) && isset($_POST["curency_id"])) {
  $stmt = $conn->prepare("select * from exchange WHERE exchange_id = :curency_id");
  $stmt->bindParam(":curency_id",$_POST["curency_id"],PDO::PARAM_STR);
  $stmt->execute();
  $fetch = $stmt->fetchAll();
  echo json_encode($fetch);
}

 ?>

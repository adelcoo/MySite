<?php
session_start();
include '../site_comps/db.php';
include '../site_comps/checkChars.php';

// echo "hi from row_obr.php";
$info = file_get_contents('php://input');
$info = json_decode($info, true);

foreach($info as $key=>$value){
  $info[$key] = checkChars($info[$key]);
}

$idItem = $info["idItem"];
// echo "<br>";
// echo "idItem = $idItem";

/*  unset($_SESSION['cart'][$idItem]['imageSrc']);
  unset($_SESSION['cart'][$idItem]['priceVal']);
  unset($_SESSION['cart'][$idItem]['weightVal']);
  unset($_SESSION['cart'][$idItem]['selectVal']);*/
  unset($_SESSION['cart'][$idItem]);
  
  echo "ok";
?>

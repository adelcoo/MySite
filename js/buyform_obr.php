<?php
session_start();
include '../site_comps/db.php';
include '../site_comps/checkChars.php';


$data = file_get_contents('php://input');
$data = json_decode($data, true);

foreach($data as $key=>$value){
  $data[$key] = checkChars($data[$key]);
}
  
 
   
 $imageSrc = $data['imageSrc']; 
 $priceVal = $data['priceVal'];
 $weightVal = $data['weightVal'];
 $selectVal = $data['selectVal'];
 
 echo "in the buyform obr!";
 $_SESSION['cart'][] = array(
   "imageSrc"=>$imageSrc,
   "priceVal"=>$priceVal,
   "weightVal"=>$weightVal,
   "selectVal"=>$selectVal,
   );
/* $_SESSION['cart'][]["imageSrc"]=$imageSrc;
 $_SESSION['cart'][]["priceVal"]=$priceVal;
 $_SESSION['cart'][]["weightVal"]=$weightVal;
 $_SESSION['cart'][]["selectVal"]=$selectVal;*/
 
 
  
  
?>
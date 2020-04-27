<?php
session_start();
include '../site_comps/db.php';
include '../site_comps/checkChars.php';

echo "hi from row_obr.php";
$info = file_get_contents('php://input');
$info = json_decode($info, true);

foreach($info as $key=>$value){
  $info[$key] = checkChars($info[$key]);
}

$payment = $info["payment"];
$delivery = $info["delivery"];
$email = $info["email"];
$person = $info["person"];
$phone = $info["phone"];
$komments = $info["komments"];
$address = $info["address"];

echo $payment.'-';
echo $delivery.'-';
echo $email.'-';
echo $person.'-';
echo $phone.'-';
echo $komments.'-';
echo $address.'- \n\r';
/*
  unset($_SESSION['cart'][$idItem]['imageSrc']);
  unset($_SESSION['cart'][$idItem]['priceVal']);
  unset($_SESSION['cart'][$idItem]['weightVal']);
  unset($_SESSION['cart'][$idItem]['selectVal']);
*/

$num = count($_SESSION['cart']);
echo $num;
$cart = 'cart';
$price = 'priceVal';
$weight = 'weightVal';
$select = 'selectVal';
// for($i=0; $i<$num; $i++){
  echo $_SESSION[$cart][0][$price].$_SESSION[$cart][0][$weight].$_SESSION[$cart][0][$select];
/*$mysqli->query("INSERT INTO `Orders` (`person`, `email`, `phone`, `address`, `delivery`, `komments`, `payment`, `price`, `weight`, `selects`) VALUES ('$person', '$email', '$phone', '$address', '$delivery', '$komments', '$payment', '$_SESSION[$cart][$num][$price]' ,'$_SESSION[$cart][$num][$weight]', '$_SESSION[$cart][$num][$select]')");*/

$result = $mysqli->query("INSERT INTO `Orders` (`person`, `email`, `phone`, `address`, `delivery`, `komments`,`payment`, `price`, `weight`, `selects`) VALUES ('$person', '$email', '$phone', '$address', '$delivery', '$komments', '$payment', '$_SESSION[$cart][0][$price]', '$_SESSION[$cart][0][$weight]', '$_SESSION[$cart][0][$select]' )");
// }
 exit(var_dump($result));
?>
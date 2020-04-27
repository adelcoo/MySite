<?php
include '../site_comps/db.php';
include '../site_comps/checkChars.php';


$info = file_get_contents('php://input');
$info = json_decode($info, true);

foreach($info as $key=>$value){
  $info[$key] = checkChars($info[$key]);
}


if(empty($info['name']) or empty($info['email']) or empty($info['text'])){
    exit("Не все поля заполнены");
};
 $name = $info['name']; 
 $email = $info['email'];
 $text = $info['text'];
 $time = date("d-m-Y h:i:sa");
 

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  exit("Неверный формат email");
}
 
 // echo var_dump($time)."2x";
    $mysqli->query("INSERT INTO `new users`(`name`, `email`, `text`, `date`) VALUES ('$name', '$email', '$text', '$time')");
    
    $message = ("$time,  $name, $email, $text");
    mail ('adelcoo@yandex.ru', 'Message', $message);

?>
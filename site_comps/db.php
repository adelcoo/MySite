<?php
  $dbhost = "localhost"; // хост базы
  $dbuser = "adelcoo_users"; // юзер
  $dbpass = "gEZ&GvS8"; // пароль юзера 
  $dbname = "adelcoo_users";// имя базы данных
  $mysqli = new mysqli($bdhost, $dbuser, $dbpass, $dbname); // подключение к базе
  if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
  $mysqli -> set_charset("utf-8"); 
?>
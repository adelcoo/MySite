<?php
  function checkChars($str){
    $str = htmlspecialchars(stripslashes(trim($str)));
    return $str;
  }
?>
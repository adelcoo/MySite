<?php
include '../site_comps/db.php';

  $result = $mysqli->query("SELECT * FROM `new users`");
  
 while ($row = mysqli_fetch_array($result)) {
    /*    printf ("ID: %s  Name: %s", $row["id"], $row["name"]);
    }*/
    
  $Html = '<tr>';
  $Html .= '<td>'.$row["date"].'</td>';
  $Html .= '<td>'.$row["name"].'</td>';
  $Html .= '<td>'.$row["email"].'</td>';
  $Html .= '<td>'.$row["text"].'</td>';
//  $Html .= implode('</td><td>', $data);
  $Html .= '</tr>';
  
  echo $Html;
  
}
 mysqli_close($mysqli);
?>
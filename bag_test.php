<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BAG test</title>
</head>
<body>
   <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">IMG</th>
          <th scope="col">Цена</th>
          <th scope="col">Вес</th>
          <th scope="col">Помол</th>
        </tr>
      </thead>
      <tbody>
  <?php 
  session_start();
  //exit(var_dump($_SESSION['cart']));
    $numItem = count($_SESSION['cart']);
    echo $numItem;
    for ($i = 0; $i < $numItem; $i++): ?>
        <tr>
          <th scope="row"><?php echo $i+1; ?></th>
          <td><?php echo $_SESSION['cart'][$i]["imageSrc"];?></td>
          <td><?php echo $_SESSION['cart'][$i]["priceVal"];?></td>
          <td><?php echo $_SESSION['cart'][$i]["weightVal"];?></td>
          <td><?php echo $_SESSION['cart'][$i]["selectVal"];?></td>
        </tr>
        
    <?php endfor;?>
      </tbody>
    </table>
      
</body>
</html>
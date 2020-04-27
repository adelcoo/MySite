<?php 
session_start();
  $title = 'Корзина';
  include 'site_comps/header.php';
  /*include 'js/buyform_obr.php';*/
?>


<!-- Текст по доставке section -->
<main>
  <div class='container mt-2'>
    <h3>Корзина</h3>
    <div class="row">

          <div class="col-12 col-md-6">
              <div class="row text-center mb-2">
                <div class="col-3"><p>Вы выбрали</p></div>
                <div class="col-2"><p>шт.</p></div>
                <div class="col-3"><p>Помол:</p></div>
                <div class="col-2"><p>Вес:</p></div>
                <div class="col-2"><p>Цена:</p></div>
              </div>
                  <?php 
                    session_start();
                    //exit(var_dump($_SESSION['cart']));
                      $numItem = count($_SESSION['cart']);
                      for ($i = 0; $i < $numItem; $i++): ?> 
                  <div class="row text-center mb-2 <?php echo $i; ?>">
                    
                    <div class="col-3">
                      <img src="<?php echo $_SESSION['cart'][$i]["imageSrc"];?>" alt="" width="90" height="130" >
                    </div>
                    <div class="col-2 pl-0">
                      <select class="custom-select custom-select-sm">
                        <option selected></option>
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4</option>
                        <option value="3">5</option>
                      </select>
                    </div>
                    <div class="col-3"><p>
                      <?php echo $_SESSION['cart'][$i]["selectVal"];?></p>
                    </div>
                    <div class="col-2"><p><?php echo $_SESSION['cart'][$i]["weightVal"];?>.</p></div>
                    <div class="col-2"><p><?php echo $_SESSION['cart'][$i]["priceVal"];?>&nbsp р.</p></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true" class="buy_row" id="<?php echo $i; ?>">&times;</span>
                    </button>
                </div>
                    <?php endfor;?>
            
          </div>
              <div class="col-12 col-md-6">
                <div class="row">
                  <div class="col-6">
                    <h4>Оплата</h4>
                     <form name="payment-method" method="post" action="input1.php">
                       <p>
                         <input class='mr-2' type="radio" name="payment" value="cash" checked>Наличные<br>
                         <input class='mr-2' type="radio" name="payment" value="noncash" disabled>Оплата картой<br>
                       </p>
                     </form>
                  </div>
                  <div class="col-6">
                   <h4>Доставка</h4>
                     <form name="delivery-method" method="post" action="input1.php">
                       <p>
                         <input class='mr-2' type="radio" name="delivery" value="selfdelivery" checked>Самовывоз<br>
                         <input class='mr-2' type="radio" name="delivery" value="delivery">Доставка (+500 руб.)<br>
                       </p>
                     </form>
                  </div>
                </div>

                <h4>Данные о получателе</h4>
                <form name="delivery" method="post" action="input1.php">
                    <label for="email">Email</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
                      </div>
                      <input type="text" class="form-control" id="email" aria-describedby="basic-addon3" placeholder="Email">
                    </div>
                    <label for="person">Получатель</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3"><i class="far fa-user"></i></span>
                      </div>
                      <input type="text" class="form-control" id="person" aria-describedby="basic-addon3" placeholder="Получатель">
                    </div>
                    <label for="phone">Телефон<span class='star'>*</span></label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3"><i class="fas fa-phone-volume"></i></span>
                      </div>
                      <input type="text" class="form-control" id="phone" aria-describedby="basic-addon3" placeholder="Телефон">
                    </div>
                    <label for="komments">Комментарий</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3"><i class="far fa-file-alt"></i></span>
                      </div>
                      <input type="text" class="form-control" id="komments" aria-describedby="basic-addon3" placeholder="Комментарий">
                    </div>
                    <h4>Адрес доставки<span class='star'>*</span></h4>
                    <label for="address">Город, улица, дом, кв.</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3"><i class="fas fa-map-marked-alt"></i></span>
                      </div>
                      <input type="text" class="form-control" id="address" aria-describedby="basic-addon3" placeholder="Адрес доставки">
                    </div>
                    <input class="btn btn-secondary btn-sm float-right order-btn" value="Заказать">
                </form>   
              </div>

          
    </div>
   </div>
</main>





<!-- Footer section-->
<?php include 'site_comps/footer.php';?>

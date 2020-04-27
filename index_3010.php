<?php 
  $title = 'Small Coffee Break';
  include 'site_comps/header.php'
?>

  <!-- navbar -->
<!--<div class="wrapper">-->
<div class="container-flex">
<!-- header -->
  <div class="col-sm-12 px-0">
  	<div class="headerWrapper">
  			<div class="header">


      			   	  <div class="description  text-center">
      					  	<h1>Интернет - магазин свежеобжаренного кофе</h1>
      					  		<p>Ближайшая обжарка в эту среду.</p>
      					  		<p>Доставка - в четверг и пятницу.</p>
      					  		<button class="btn btn-outline-secondary btn-lg">Подробнее</button>

      			  		</div>


  			</div>
      </div>
		</div>
  </div>

<!-- about section -->
<div class="about pr-0" id="about">
	<div class="container">
	  <h1 class="text-center">О нас</h1>
		<div class="row justify-content-center">
			<div class="col-sm-12 col-lg-4 col-md-6  my-sm-5 my-lg-0">
				<img src="img/img-5.jpg" class="img-fluid">
				<span class="text-justify mt-sm-1 my-lg-0">Так мы жарим кофе</span>
			</div>
			<div class="col-md-8 col-sm-12 desc">

				<h3>Small Coffee Break</h3>
				<p>
				   Мы закупаем кофе класса Specialty, обжариваем на лучшем оборудовании и доставляем по всей России.</p>
				<p>
					Нам важно, чтобы наш кофе был качественным и вкусным, поэтому мы закупаем только качественное сырье с оценками от 80 баллов SCAA для коммерческих сортов и от 85 баллов для микролотов из стран Океании, Центральной и Южной Америки, Азии, Африки.
				</p>
			</div>
		</div>
	</div>
</div>

<!-- ассортимент кофе , фото и опмсание, цена и объем -->
<div class="portfolio" id="portfolio">
     <h1 class="text-center">Популярные сорта</h1>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12  col-md-6 col-lg-4 my-3">
				<div class="coffee-item  text-center pb-1  shadow rounded">
          <a href="coffee/kenia-spaiks.html" class='info-block'>
            <span class='btn-info'>
              <i class="fas fa-info"></i>
            </span>
            <!-- Описание свойств коффее-  ===============================================  -->
            <!-- <div class="info-block_block" itemprop='description'>
              <div class="params-block">
                <ul>
                  <li class='param-block'>
                    <span class="name">Сладость</span>
                    <span class='progress-bar'style='width:50%'>5</span>
                  </li>
                  <li class='param-block'>
                    <span class="name">Горечь</span>
                    <span class='progress-bar'style='width:30%'>3</span>
                  </li>
                  <li class='param-block'>
                    <span class="name">Плотность</span>
                    <span class='progress-bar'style='width:40%'>4</span>
                  </li>
                </ul>
              </div>
            </div> -->

          </a>
					<img src="img/kenia.jpg" class="img-fluid">
					<p>Кения Спайкс</p>
					<form method='post' class='form-option' action='order.php'>
						<div class = 'options-block'>
							<select name='options[coffee-mil]' class = 'select' id='option-coffee-mil'>
								<option value='grains'>Не молоть (в зернах)</option>
								<option value='aeropress'>Для аэропресса</option>
								<option value='drip-coffee-maker'>Для капельной кофеварки</option>
								<option value='turka'>Для турки</option>
								<option value='espresso'>Для эспрессо</option>
							</select>
						</div>
						<div class = 'options-block m-3'>
								<table class="table table-bordered rounded">
								  <tbody>
								    <tr>
								      <td class='kenia weight'>100 гр</td>
								      <td class='kenia weight'>250 гр</td>
								      <td class='kenia weight'>500 гр</td>
								      <td class='kenia weight'>1000 гр</td>
								    </tr>
								  </tbody>
								</table>
						</div>
						<div class='price-block'>
							<span class='kenia-price'>Цена</span><span> р.</span>
							<!-- <button type="submit" class="btn btn-outline-info ml-5"><i class="fas fa-shopping-basket"></i>  Купить</button> -->
							<button class='btn btn-border ml-5' type='submit' name='action-buy'>
								<i class='shopping-bag'><i class="fas fa-shopping-basket"></i></i>
								<span>Купить</span>
							</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-sm-12  col-md-6 col-lg-4 my-3">
				<div class="coffee-item  text-center pb-1  shadow rounded">
				  <a href="coffee/kenia-spaiks.html" class='info-block'>
            <span class='btn-info'>
              <i class="fas fa-info"></i>
            </span>
            <!-- Описание свойств коффее-  ===============================================  -->
            <!-- <div class="info-block_block" itemprop='description'>
              <div class="params-block">
                <ul>
                  <li class='param-block'>
                    <span class="name">Сладость</span>
                    <span class='progress-bar'style='width:50%'>5</span>
                  </li>
                  <li class='param-block'>
                    <span class="name">Горечь</span>
                    <span class='progress-bar'style='width:30%'>3</span>
                  </li>
                  <li class='param-block'>
                    <span class="name">Плотность</span>
                    <span class='progress-bar'style='width:40%'>4</span>
                  </li>
                </ul>
              </div>
            </div> -->

          </a>
					<img src="img/kenia.jpg" class="img-fluid">
					<p>Гватемала</p>
					<form method='post' class='form-option'>
						<div class = 'options-block'>
							<select name='options[coffee-mil]' class = 'select' id='option-coffee-mil'>
								<option value='grains'>Не молоть (в зернах)</option>
								<option value='aeropress'>Для аэропресса</option>
								<option value='drip-coffee-maker'>Для капельной кофеварки</option>
								<option value='turka'>Для турки</option>
								<option value='espresso'>Для эспрессо</option>
							</select>
						</div>
						<div class = 'options-block m-3'>
								<table class="table table-bordered rounded">
								  <tbody>
								    <tr>
								      <td class='guatemala weight'>100 гр</td>
								      <td class='guatemala weight'>250 гр</td>
								      <td class='guatemala weight'>500 гр</td>
								      <td class='guatemala weight'>1000 гр</td>
								    </tr>
								  </tbody>
								</table>
						</div>
						<div class='price-block'>
							<span class='guatemala-price'>Цена</span><span> р.</span>
							<button class='btn btn-border ml-5' type='submit' name='action-buy' value='cart/add'>
								<i class='shopping-bag'><i class="fas fa-shopping-basket"></i></i>
								<span>Купить</span>
							</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-sm-12  col-md-6 col-lg-4 my-3">
				<div class="coffee-item  text-center pb-1  shadow rounded">
				  <a href="coffee/kenia-spaiks.html" class='info-block'>
            <span class='btn-info'>
              <i class="fas fa-info"></i>
            </span>
            <!-- Описание свойств коффее-  ===============================================  -->
            <!-- <div class="info-block_block" itemprop='description'>
              <div class="params-block">
                <ul>
                  <li class='param-block'>
                    <span class="name">Сладость</span>
                    <span class='progress-bar'style='width:50%'>5</span>
                  </li>
                  <li class='param-block'>
                    <span class="name">Горечь</span>
                    <span class='progress-bar'style='width:30%'>3</span>
                  </li>
                  <li class='param-block'>
                    <span class="name">Плотность</span>
                    <span class='progress-bar'style='width:40%'>4</span>
                  </li>
                </ul>
              </div>
            </div> -->

          </a>
          
					<img src="img/kenia.jpg" class="img-fluid">
					<p>Эфиопия</p>
					<form method='post' class='form-option'>
						<div class = 'options-block'>
							<select name='options[coffee-mil]' class = 'select' id='option-coffee-mil'>
								<option value='grains'>Не молоть (в зернах)</option>
								<option value='aeropress'>Для аэропресса</option>
								<option value='drip-coffee-maker'>Для капельной кофеварки</option>
								<option value='turka'>Для турки</option>
								<option value='espresso'>Для эспрессо</option>
							</select>
						</div>
						<div class = 'options-block m-3'>
								<table class="table table-bordered rounded">
								  <tbody>
								    <tr>
								      <td class='efiopia weight'>100 гр</td>
								      <td class='efiopia weight'>250 гр</td>
								      <td class='efiopia weight'>500 гр</td>
								      <td class='efiopia weight'>1000 гр</td>
								    </tr>
								  </tbody>
								</table>
						</div>
						<div class='price-block'>
							<span class='efiopia-price'>Цена</span><span> р.</span>
							<button class='btn btn-border ml-5' type='submit' name='action-buy' value='cart/add'>
								<i class='shopping-bag'><i class="fas fa-shopping-basket"></i></i>
								<span>Купить</span>
							</button>
						</div>
					</form>
				</div>
			</div>
			
		<!--	<div class="col-sm-12  col-md-6 col-lg-4 my-3">
				<div class="coffee-item  text-center pb-1  shadow rounded">
				  <a href="coffee/kenia-spaiks.html" class='info-block'>
            <span class='btn-info'>
              <i class="fas fa-info"></i>
            </span>-->
            <!-- Описание свойств коффее-  ===============================================  -->
            <!-- <div class="info-block_block" itemprop='description'>
              <div class="params-block">
                <ul>
                  <li class='param-block'>
                    <span class="name">Сладость</span>
                    <span class='progress-bar'style='width:50%'>5</span>
                  </li>
                  <li class='param-block'>
                    <span class="name">Горечь</span>
                    <span class='progress-bar'style='width:30%'>3</span>
                  </li>
                  <li class='param-block'>
                    <span class="name">Плотность</span>
                    <span class='progress-bar'style='width:40%'>4</span>
                  </li>
                </ul>
              </div>
            </div> -->

          <!--</a>-->
          <!-- Блок ниже можно добавить при расширении ассортимента!!!================================= -->
<!--					<img src="img/kenia.jpg" class="img-fluid">
					<p>Кения Спайкс</p>
					<form method='post' class='form-option'>
						<div class = 'options-block'>
							<select name='options[coffee-mil]' class = 'select' id='option-coffee-mil'>
								<option value='grains'>Не молоть (в зернах)</option>
								<option value='aeropress'>Для аэропресса</option>
								<option value='drip-coffee-maker'>Для капельной кофеварки</option>
								<option value='turka'>Для турки</option>
								<option value='espresso'>Для эспрессо</option>
							</select>
						</div>
						<div class = 'options-block m-3'>
								<table class="table table-bordered rounded">
								  <tbody>
								    <tr>
								      <td>100гр</td>
								      <td>250гр</td>
								      <td>500гр</td>
								      <td>1000гр</td>
								    </tr>
								  </tbody>
								</table>
						</div>
						<div class='price-block'>
							<span class='price'>Цена</span>
							<button class='btn btn-border ml-5' type='submit' name='action-buy' value='cart/add'>
								<i class='shopping-bag'><i class="fas fa-shopping-basket"></i></i>
								<span>Купить</span>
							</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-sm-12  col-md-6 col-lg-4 my-3">
				<div class="coffee-item  text-center pb-1  shadow rounded">
				  <a href="coffee/kenia-spaiks.html" class='info-block'>
            <span class='btn-info'>
              <i class="fas fa-info"></i>
            </span>
            <!-- Описание свойств коффее-  ===============================================  -->
            <!-- <div class="info-block_block" itemprop='description'>
              <div class="params-block">
                <ul>
                  <li class='param-block'>
                    <span class="name">Сладость</span>
                    <span class='progress-bar'style='width:50%'>5</span>
                  </li>
                  <li class='param-block'>
                    <span class="name">Горечь</span>
                    <span class='progress-bar'style='width:30%'>3</span>
                  </li>
                  <li class='param-block'>
                    <span class="name">Плотность</span>
                    <span class='progress-bar'style='width:40%'>4</span>
                  </li>
                </ul>
              </div>
            </div> 
            
            
            

          </a>
					<img src="img/kenia.jpg" class="img-fluid">
					<p>Кения Спайкс</p>
					<form method='post' class='form-option'>
						<div class = 'options-block'>
							<select name='options[coffee-mil]' class = 'select' id='option-coffee-mil'>
								<option value='grains'>Не молоть (в зернах)</option>
								<option value='aeropress'>Для аэропресса</option>
								<option value='drip-coffee-maker'>Для капельной кофеварки</option>
								<option value='turka'>Для турки</option>
								<option value='espresso'>Для эспрессо</option>
							</select>
						</div>
						<div class = 'options-block m-3'>
								<table class="table table-bordered rounded">
								  <tbody>
								    <tr>
								      <td>100 гр</td>
								      <td>250 гр</td>
								      <td>500 гр</td>
								      <td>1000 гр</td>
								    </tr>
								  </tbody>
								</table>
						</div>
						<div class='price-block'>
							<span class='price'>Цена</span>
							<button class='btn btn-border ml-5' type='submit' name='action-buy' value='cart/add'>
								<i class='shopping-bag'><i class="fas fa-shopping-basket"></i></i>
								<span>Купить</span>
							</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-sm-12  col-md-6 col-lg-4 my-3">
				<div class="coffee-item  text-center pb-1  shadow rounded">
				  <a href="coffee/kenia-spaiks.html" class='info-block'>
            <span class='btn-info'>
              <i class="fas fa-info"></i>
            </span>
            <!-- Описание свойств коффее-  ===============================================  -->
            <!-- <div class="info-block_block" itemprop='description'>
              <div class="params-block">
                <ul>
                  <li class='param-block'>
                    <span class="name">Сладость</span>
                    <span class='progress-bar'style='width:50%'>5</span>
                  </li>
                  <li class='param-block'>
                    <span class="name">Горечь</span>
                    <span class='progress-bar'style='width:30%'>3</span>
                  </li>
                  <li class='param-block'>
                    <span class="name">Плотность</span>
                    <span class='progress-bar'style='width:40%'>4</span>
                  </li>
                </ul>
              </div>
            </div> 
            
            

          </a>
					<img src="img/kenia.jpg" class="img-fluid">
					<p>Кения Спайкс</p>
					<form method='post' class='form-option'>
						<div class = 'options-block'>
							<select name='options[coffee-mil]' class = 'select' id='option-coffee-mil'>
								<option value='grains'>Не молоть (в зернах)</option>
								<option value='aeropress'>Для аэропресса</option>
								<option value='drip-coffee-maker'>Для капельной кофеварки</option>
								<option value='turka'>Для турки</option>
								<option value='espresso'>Для эспрессо</option>
							</select>
						</div>
						<div class = 'options-block m-3'>
								<table class="table table-bordered rounded">
								  <tbody>
								    <tr>
								      <td>100 гр</td>
								      <td>250 гр</td>
								      <td>500 гр</td>
								      <td>1000 гр</td>
								    </tr>
								  </tbody>
								</table>
						</div>
						<div class='price-block'>
							<span class='price'>Цена</span>
							<button class='btn btn-border ml-5' type='submit' name='action-buy' value='cart/add'>
								<i class='shopping-bag'><i class="fas fa-shopping-basket"></i></i>
								<span>Купить</span>
							</button>
						</div>
					</form>
				</div>
			</div> -->


        <!--Здесь заканчисвется блок ассортимента-->




    		</div>
    	</div>
    </div>    	
  </div>
</div>


<!-- Posts section -->
<div class="blog" id="blog">
	<div class="container">
	<h1 class="text-center">Интересное о кофе</h1>
		<div class="row justify-content-center">
			<div class="col-sm-12  col-md-6 col-lg-4 my-sm-2 my-lg-0">
				<div class="card">
					<div class="card-img">
						<img src="img/coffeeChoice.jpg" class="img-fluid">
					</div>

					<div class="card-body">
					<h4 class="card-title">Как выбрать кофе?</h4>
						<p class="card-text">
							Зерна кофе, обжаренные для приготовления эспрессо также отлично подходят для приготовления в гейзерных кофеварках, а зерна,
							предназначенные для заваривания через фильтр отлично раскроются и при других способах заваривания – в капельной кофеварке,
							френч-прессе, турке, пуровере и аэропрессе.
						</p>
					</div>
					<div class="card-footer">
						<a href="" class="card-link">Узнать больше</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12  col-md-6 col-lg-4 my-sm-2 my-lg-0">
				<div class="card">
					<div class="card-img">
						<img src="img/howToMakeCoffee.jpg" class="img-fluid">
					</div>

					<div class="card-body">
					   <h4 class="card-title">Что нужно знать о приготовлении кофе?</h4>
						<p class="card-text">
							Далеко не все люди заморачиваются способами приготовления кофе, просто заливая молотые зерна крутым кипятком. Конечно,
							 это быстро и просто, но такой способ никогда не раскроет настоящего вкуса и уникальных кофейных ноток. Именно поэтому
							 ценители кофе соблюдают особую технологию и используют специальные приборы для кофе.
						</p>
					</div>
					<div class="card-footer">
						<a href="#" class="card-link">Узнать больше</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 my-sm-2 my-lg-0">
				<div class="card">
					<div class="card-img">
						<img src="img/french-pres.jpg" class="img-fluid">
					</div>

					<div class="card-body">
					<h4 class="card-title">Рекомендации по приготовлению кофе во френч-прессе.</h4>
						<p class="card-text">
							Одним из наиболее простых и известных способов приготовления кофе является френч-пресс. Френч-пресс кофе обладает насыщенным
							крепким вкусом и богатым ароматом, но сильно отличается от эспрессо и кофе по-восточному. Консистенция такого кофе – не тягучая,
							менее плотная. Во вкусе практически отсутствует горчинка.
						</p>
					</div>
					<div class="card-footer">
						<a href="#" class="card-link">Узнать больше</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Contacts -->
  <div class="contact-form" id="contact">
  	<div class="container">
  		<form>
  			<div class="row justify-content-center">
  				<div class="col-sm-12 col-lg-4 col-md-6">
  				  <h1>Написать нам</h1>
  				</div>
  				<div class="col-sm-12 col-md-8    right">
  				   <div class="form-group">
  				   	 <input type="text" class="form-control form-control-lg" placeholder="Ваше Имя" name="">
  				   </div>
  				   <div class="form-group">
  				   	 <input type="email" class="form-control form-control-lg" placeholder="ВашаПочта@email.com" name="email">
  				   </div>
  				   <div class="form-group">
  				   	 <textarea class="form-control form-control-lg">
  
  				   	 </textarea>
  				   </div>
  				   <input type="submit" class="btn btn-secondary btn-block" value="Отправить" name="">
  				</div>
  			</div>
  		</form>
  	</div>
  </div>

<!-- Footer section-->
<?php include 'site_comps/footer.php'?>

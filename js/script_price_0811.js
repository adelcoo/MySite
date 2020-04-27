
// $( document ).ready(function() {
    

    function makeCoffee(name, weight, price) {
      return {
        name: name,
        weight: weight ,
        price: price,
      };
    }
    
    let Weight = [100, 250, 500, 1000];
    
    let keniaPrice = [250, 350, 500, 800];
    let kenia = makeCoffee("Кения", Weight, keniaPrice);
    
    let guatemalaPrice = [300, 400, 650, 1000];
    let guatemala = makeCoffee('Гватемала', Weight, guatemalaPrice);
    
    let efiopiaPrice = [300, 450, 700, 1200];
    let efiopia = makeCoffee('Эфиопия', Weight, efiopiaPrice);
  
    let coffeeClasses = ['kenia', 'guatemala', 'efiopia']; // здесь все классы кофе с которыми они в html
    
   /*    if(strIn == 100){
      $('.out').text(kenia.price[0]);
    }*/
    
    
    
    let price = 0;
    
    $('.weight').click(function(){
      let weight = $(this).text();
      let arrWeight = weight.split(' ');
      weight = +arrWeight[0];
      let thisItem = '';
      // .hasClass( "selected" ).toString() 
      
      for (let item of coffeeClasses) {
        if($(this).hasClass(item))
      thisItem = item;
      }
      
      console.log($(this).data());
      // alert(thisItem.weight[0]);
    

/*        switch(weight){
          case thisItem.weight[0]:
            price =  thisItem.price[0];
            break;
          case kenia.weight[1]:
            price =  thisItem.price[1];
            break;
          case kenia.weight[2]:
            price =  thisItem.price[2];
            break;
          case kenia.weight[3]:
            price =  thisItem.price[3];
            break;
        }*/
        /*
        $('.kenia-price').text(price);
      } else if($(this).hasClass("guatemala")){
        switch(weight){
          case guatemala.weight[0]:
            price =  guatemala.price[0];
            break;
          case guatemala.weight[1]:
            price =  guatemala.price[1];
            break;
          case guatemala.weight[2]:
            price =  guatemala.price[2];
            break;
          case guatemala.weight[3]:
            price =  guatemala.price[3];
            break;
        }
        $('.guatemala-price').text(price);
      } else if($(this).hasClass("efiopia")){
        switch(weight){
          case efiopia.weight[0]:
            price =  efiopia.price[0];
            break;
          case efiopia.weight[1]:
            price =  efiopia.price[1];
            break;
          case efiopia.weight[2]:
            price =  efiopia.price[2];
            break;
          case efiopia.weight[3]:
            price =  efiopia.price[3];
            break;
        }*/
        $('.efiopia-price').text(price);
      });
      
      
   
    
    
    
    
    
    
    
// });

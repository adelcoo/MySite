
$(document).ready(function() {
  
/*  let Coffee{
    let name;
    let weight = [];
    let price = [];
  }*/
    

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
  
    
   /*    if(strIn == 100){
      $('.out').text(kenia.price[0]);
    }*/
    
    price = 0;
    
    $('.weight').click(function(){

      let weight = +$(this).text();
      if($(this).hasClass("kenia")){
        switch(weight){
          case kenia.weight[0]:
            price =  kenia.price[0];
            break;
          case kenia.weight[1]:
            price =  kenia.price[1];
            break;
          case kenia.weight[2]:
            price =  kenia.price[2];
            break;
          case kenia.weight[3]:
            price =  kenia.price[3];
            break;
        }
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
        }
        $('.efiopia-price').text(price);
      }
      
      
    });
    
    
    
    
    
    
    
});

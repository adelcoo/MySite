
// $( document ).ready(function() {
    
  class Coffee{
    constructor(name, weight, price){
      this.name = name;
      this.weight = weight;
      this.price = price;
      
    }
  }
  

  
/*    function makeCoffee(name, weight, price) {
      return {
        name: name,
        weight: weight ,
        price: price,
      };
    }*/
    
    let Weight = [100, 250, 500, 1000];
    
    let keniaPrice = [250, 350, 500, 800];
  //  let kenia = makeCoffee("kenia", Weight, keniaPrice);
    
    let guatemalaPrice = [300, 400, 650, 1000];
 //   let guatemala = makeCoffee("guatemala", Weight, guatemalaPrice);
    
    let efiopiaPrice = [300, 450, 700, 1200];
//    let efiopia = makeCoffee("efiopia", Weight, efiopiaPrice);
  
    
   /*    if(strIn == 100){
      $('.out').text(kenia.price[0]);
    }*/
    
      let kenia = new Coffee("kenia", Weight, keniaPrice);
      let guatemala = new Coffee("guatemala", Weight, guatemalaPrice);
      let efiopia = new Coffee("efiopia", Weight, efiopiaPrice);
      let arr = [kenia, guatemala, efiopia];
    
    price = 0;
    
    $('.weight').click(function(){
      arr.forEach(function(item){
      $("."+item.name).removeClass('active');
        });
     $(this).addClass("active");
     console.log($(this));
      let weight = $(this).text();
      let arrWeight = weight.split(' ');
      weight = +arrWeight[0];
      // console.log(weight);
      let thisItem = this;
      
      arr.forEach(function(item){
       // console.log(item.name);
       // console.log($(thisItem).hasClass(item.name));
        let textPrice = $("."+item.name+"-price");
        // console.log(textPrice);
        if($(thisItem).hasClass(item.name)){
        //   console.log(item.name);
          for(let i=0; i<item.weight.length; i++){
           // console.log(item.weight[i]);
            if(item.weight[i] == weight){
              price = item.price[i];
              textPrice.text(price);
            }
          }
      }
    });
  });
  
let imageSrc, selectVal, priceVal, weightVal;

$('.btn[name="action-buy"]').click(function(event){
  event.preventDefault();
  let thisItem = this;
  arr.forEach(function(item){
    if($(thisItem).hasClass(item.name+"-button")){
     imageSrc = $("."+item.name+"-img").attr('src');
     priceVal = $("."+item.name+"-price").text();
     weightVal = $("."+item.name+".active").text();
     selectVal = $("."+item.name+"-select :selected").text();
     console.log(imageSrc);
     console.log(priceVal);
     console.log(weightVal);
     console.log(selectVal);
     sentForm(imageSrc, priceVal, weightVal, selectVal);
   }
  });
});

function sentForm(imageSrc, priceVal, weightVal, selectVal){

let data = {
  imageSrc: imageSrc,
  priceVal: priceVal,
  weightVal: weightVal,
  selectVal: selectVal,
};
    
$.ajax({
    type:'POST',
    url: 'js/buyform_obr.php',
    data: JSON.stringify(data),
    success: function(data){
      console.log(data);
    },
});
    
    
}   
    
    
    
// });

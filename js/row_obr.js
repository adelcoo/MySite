let idItem;
let delBt;
$('.buy_row').click(function(){
  delBt = this;
  idItem = $(delBt).attr('id');
  
 // alert("id = "+idItem);
 sent(idItem);
});

function sent(idItem){
  let data = {
    idItem: idItem,
  };
  
$.ajax({
    type:'POST',
    url: 'js/row_obr.php',
    data: JSON.stringify(data),
    success: function(data){
      if(data == "ok"){
       console.log(delBt);
       // delBt.parent('.row').remove();
        $(delBt).closest(".row").remove();
         // window.location.href = window.location.href;
      }
      console.log(data);
    }
 });
}
 
  

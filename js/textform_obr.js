
$('.btn-text').click(sent);

function sent(event){
 
  event.preventDefault();
 //  let now = new Date();
  
  let data ={
  name:$('input[name="form_name"]').val(),
  email:$('input[name="form_email"]').val(),
  text:$('textarea[name="form_text"]').val(),
 // time:$(now), 
  };
  
 // $('#contact').fadeOut(1000);
  
 $.ajax({
    type:'POST',
    url: 'js/textform_obr.php',
    data: JSON.stringify(data),
    success: function(data){
    switch(data){
    case 'Не все поля заполнены':
      $('input[name="form_name"]').css({border: "1px solid red" });
      $('input[name="form_email"]').css({border: "1px solid red" });
      $('textarea[name="form_text"]').css({border: "1px solid red" });
      break;
    case "Неверный формат email":      
      $('input[name="form_name"]').css({border: "1px solid green" });
      $('textarea[name="form_text"]').css({border: "1px solid green" });
      $('input[name="form_email"]').css({border: "2px solid red" });
      break;
    default:
    $('#contact').fadeOut(1000);
  }
}
});

  
}
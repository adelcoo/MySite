let orderBtn = $(".order-btn");
orderBtn.click(function(event){
  
//   $("select option").val();
  let payment = $("input[name='payment']").val();
  let delivery = $("input[name='delivery']").val();
  let email = $('#email').val();
  let person = $('#person').val();
  let phone = $('#phone').val();
  let komments = $('#komments').val();
  let address = $('#address').val();
  
  /*console.log(payment);
  console.log(delivery);
  console.log(email);
  console.log(person);
  console.log(phone);
  console.log(komments);
  console.log(address);*/
  
  let data = {
    payment: payment,
    delivery: delivery,
    email: email,
    person: person,
    phone: phone,
    komments: komments,
    address: address,
  };
  
  $.ajax({
    type:'POST',
    url: 'js/order.php',
    data: JSON.stringify(data),
    success: function(data){
      console.log(data);
    }
 });
  
});
$(document).ready(function(){

  var pdr_id = $("#pdr_id").val();
  var prod_price = $("#prod_price").val();




change_currency();







  function exchange_money(curency){
    var result = "";
    $.ajax({
      dataType:"json",
      url:"exchange.php",
      method:"post",
      async:false,
      data:{exchange:"excange",curency_id:curency},
      success:function(data){

      for (var i = 0; i < data.length; i++) {
        result = data[i].Curenccy_Value;
      }

      },
      error:function(error){

      }

    })
    return result;
  }






$("#btn_submit").click(function(){

  var do_ = $(this).val();

  var fullName = $("#full_name").val();
  var email = $("#email").val();
  var mobile = $("#mobile").val();
  var address = $("#address").val();
  var message = $("#message").val();

if (fullName == "" || fullName == null) {
  $(".alert").removeClass("alert-success");
  $(".alert").addClass("alert-danger");
  $(".alert").text(mylang("cant_lastname"));
  $(".alert").show(1000);

  $('html, body').animate({
       scrollTop: $(".alert").offset().top
   }, 1000);
   setTimeout(function(){
     $('html, body').animate({
          scrollTop: $("#full_name").offset().top
      }, 1000);
      $("#full_name").focus();
   },3000)

}

else if (email == "" || email == null) {
  $(".alert").removeClass("alert-success");
  $(".alert").addClass("alert-danger");
  $(".alert").text(mylang("emailCant"));
  $(".alert").show(1000);

  $('html, body').animate({
       scrollTop: $(".alert").offset().top
   }, 1000);
   setTimeout(function(){
     $('html, body').animate({
          scrollTop: $("#email").offset().top
      }, 1000);
      $("#email").focus();
   },3000)

}


else if (mobile == "" || mobile == null) {
  $(".alert").removeClass("alert-success");
  $(".alert").addClass("alert-danger");
  $(".alert").text(mylang("mobileCantEmpty"));
  $(".alert").show(1000);

  $('html, body').animate({
       scrollTop: $(".alert").offset().top
   }, 1000);
   setTimeout(function(){
     $('html, body').animate({
          scrollTop: $("#mobile").offset().top
      }, 1000);
      $("#mobile").focus();
   },3000)

}

else if (address == "" || address == null) {
  $(".alert").removeClass("alert-success");
  $(".alert").addClass("alert-danger");
  $(".alert").text(mylang("adressCantEmpty"));
  $(".alert").show(1000);

  $('html, body').animate({
       scrollTop: $(".alert").offset().top
   }, 1000);
   setTimeout(function(){
     $('html, body').animate({
          scrollTop: $("#address").offset().top
      }, 1000);
      $("#address").focus();
   },3000)

}


else if (message == "" || message == null) {
  $(".alert").removeClass("alert-success");
  $(".alert").addClass("alert-danger");
  $(".alert").text(mylang("adressCantEmpty"));
  $(".alert").show(1000);

  $('html, body').animate({
       scrollTop: $(".alert").offset().top
   }, 1000);
   setTimeout(function(){
     $('html, body').animate({
          scrollTop: $("#message").offset().top
      }, 1000);
      $("#message").focus();
   },3000)
}
else{
  $.ajax({
    url:"order.php",
    method:"post",
    data:{ product_id:pdr_id,fullName:fullName,email:email,mobile:mobile,address:address,message:message,amount:prod_price},
    success:function(data){
        if (data == 1) {
          $(".alert").removeClass("alert-danger");
          $(".alert").addClass("alert-success");
          $(".alert").text(mylang("successfulPreogress"));
          $(".alert").show(1000);

          $('html, body').animate({
               scrollTop: $(".alert").offset().top
           }, 1000);
           setTimeout(function(){
              window.location.href = "index.php";

           },3000)


        }else{

          $(".alert").removeClass("alert-success");
          $(".alert").addClass("alert-danger");
          $(".alert").text(mylang("failedProgress"));
          $(".alert").show(1000);

          $('html, body').animate({
               scrollTop: $(".alert").offset().top
           }, 1000);
           setTimeout(function(){

              window.location.href = "index.php";
           },3000)


        }

    },
    error:function(error){
                $(".alert").removeClass("alert-success");
                $(".alert").addClass("alert-danger");
                $(".alert").text(mylang("failedProgress"));
                $(".alert").show(1000);

                $('html, body').animate({
                     scrollTop: $(".alert").offset().top
                 }, 1000);
                 setTimeout(function(){
                    window.location.href = "index.php";
                 },3000)


    }

  })
}


})


function mylang(word){
   var dat;
  $.ajax({
    dataType: "json",
    async:false,
    url:"config/languages/lang.php",
    method:"GET",
    data:{lang:word},
    success:function(data){
      dat =  data;
    }
    })
    return dat;
}


$("#select_currency").on("change",function(){
localStorage.setItem("currency", $(this).val());
$(this).val(localStorage.getItem("currency"));
change_currency();
})

function change_currency(){
  $.ajax({
    dataType:"json",
    url:"products.php",
    method:"post",
    async:false,
    data:{Product_id:pdr_id,get_price:"get_price"},
    success:function(data){
      for (var i = 0; i < data.length; i++) {
      var tota_pr;
      if ($("#select_currency").val() ==1) {
        tota_pr = data[i].Price ;
      }else{
        tota_pr = data[i].Price / exchange_money(localStorage.getItem("currency"))
      }
        var currency =  $("#select_currency option:selected").text();
        $("#pric_spa").text(Math.floor(tota_pr)+" "+currency);
      }
    },
    error:function(error){

    }
  })
}

// START PAYPAL
/*
var price  = $("#inpu_price").val();
var total_price = price / exchange_money(2);

  function initPayPalButton() {
    paypal.Buttons({
      style: {
        shape: 'rect',
        color: 'gold',
        layout: 'vertical',
        label: 'pay',

      },

      createOrder: function(data, actions) {
        return actions.order.create({
          purchase_units: [{"amount":{"currency_code":"EUR","value":total_price}}]
        });
      },

      onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
          alert('Transaction completed by ' + details.payer.name.given_name + '!');
        });
      },

      onError: function(err) {
        console.log(err);
      }
    }).render('#paypal-button-container');
  }

  initPayPalButton();
*/

function initPayPalButton() {
  var price  = $("#inpu_price").val();
  var total_price = price / exchange_money(2);
  var  tl_math = Math.floor(total_price);

  paypal.Buttons({
    style: {
      shape: 'rect',
      color: 'gold',
      layout: 'vertical',
      label: 'buynow',

    },

    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{"amount":{"currency_code":"EUR","value":tl_math}}]
      });
    },

    onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
        alert('Transaction completed by ' + details.payer.name.given_name + '!');
      });
    },

    onError: function(err) {
      console.log(err);
    }
  }).render('#paypal-button-container');
}
initPayPalButton();

// END PAYAPL

})

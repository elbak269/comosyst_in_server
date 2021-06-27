


$(document).ready(function(){

  var img_url = $("#img__in").val();


if (localStorage.getItem("currency") == 1) {
  $(".price_st").text($(".price_st").text()*2);
}else{
  $(".price_st").text($(".price_st").text()*2);

}

get_product();
function get_product(){

  $.ajax({
    dataType:"json",
    url:"products.php",
    method:"post",
    data:{get_offers_:"get_offers_",get_products:"get_products"},
    success:function(data){
      var res ="";
      for (var i = 0; i < data.length; i++) {
      res +='<div class="col-sm-12 col-md-6 col-lg-5">';
      res += '<div class="div_inside_col_ofers" data-col_ofer="dv_of'+data[i].Product_ID+'">';

          res += '<a href="info_product.php?Product=prd&product_id='+data[i].Product_ID+'&WEBSITE=1&offer=5685d">';
      res += '<div class="card border-success mb-3 card_offer__" style="max-width: 18rem;">';
      res += '<div class="card-header text-center">'+data[i].Product_Name+'</div>';
      res += '<div class="card-body text-success">';
      res += '<ul>';
      res += '<li>nombre De Pages '+data[i].Pages+' Pages</li>';
      res += '<li>Sécurise '+data[i].Secure_Name+'</li>';
      res += '<li>Hébergement gratuit pendant '+data[i].Month_Free_Hosting +' Mois</li>';
      res += '<li>domaine gratuit Pendant '+data[i].Month_Free_Domain +' Mois</li>';
      var tota_pr;
      if ($("#select_currency").val() ==1) {
        tota_pr = data[i].Price ;
      }else{
        tota_pr = data[i].Price / exchange_money(localStorage.getItem("currency"))
      }

         var cur = $("#select_currency option:selected").text();
        res += '<div class="div_pric_web">';
         res += '<h4 class="text-center"> <strong> '+Math.floor(tota_pr)+" "+cur+' </strong> </h4>';
        res += "</div>";

    //  res += '<li>Sécurise '+data[i].Pages+' pages</li>';
      res +=  '</ul>';
      res += '</div>';
      res += '</div>';
      res += '</div>';
      res += '</a>';
      res += '</div>';
      res +='</div>';
      }
      $(".row_ofers__").empty();
      $(".row_ofers__").append(res);

      $(".card_offer__").mouseenter(function(){
        $(this).css("background-color","#5ae4a8");
        $(this).find("li , h3").css("color","white");
        $(this).find(".card-header").css("background-color","white","!important");




      });

      $(".card_offer__").mouseleave(function(){
        $(this).css("background-color","white");
        $(this).find("li , h3").css("color","#1b2e35");
        $(this).find(".card-header").css("background-color","#5ae4a8","!important");


      });
    },
    error:function(error){
    }
  })

}





$("#select_currency").on("change",function(){
localStorage.setItem("currency", $(this).val());
$(this).val(localStorage.getItem("currency"));
$("#select_currency").val(localStorage.getItem("currency"));

get_offers_cams();
get_product();
get_erp_products();
})


exchange_money(localStorage.getItem("currency"));

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


get_offers_cams();

function get_offers_cams(){
  $.ajax({
    dataType:"json",
    url:"products.php",
    method:"post",
    async:false,
    data:{get_cams_offer:"get_cams_offer"},
    success:function(data){
    var res ="";
 for (var i = 0; i < data.length; i++) {

   res  += '<div class="card border-success mb-3 text-center" style="max-width: 18rem;">';
   res  += '<div class="card-header text-center">'+data[i].Product_Name+'</div>';
   res  += '<a href="info_product.php?Product=prd&product_id='+data[i].Product_ID+'&cams=1&offer=5685d">';
   res  += '<div class="card-body text-success">';
   res  += '<div class="div_img">';
   res  += ' <img src="'+$("#img__in").val()+data[i].Product_Img+'"  class="img_cams" alt="">';
   res  += '</div>';
      var cur = $("#select_currency option:selected").text();

   res  += '<p> <strong>'+data[i].Description+'</strong></p>';
   res  += '<div class="div_prc">';
    var tota_pr ;
   if ($("#select_currency").val() ==1) {
     tota_pr = data[i].Price ;
   }else{
     tota_pr = data[i].Price / exchange_money(localStorage.getItem("currency"))
   }
   //var tota_pr = data[i].Price *exchange_money(localStorage.getItem("currency"));
   res  += '<h4 > <strong class="price_st">'+Math.floor(tota_pr)+" "+cur+'</strong></h4>';
   res  += '</div>';
   res  += '</a>';
   res  += '</div>';
   res  +='</div>';
 }
 $(".div_row").empty();
 $(".div_row").append(res);

    },
    error:function(error){

    }

  })

}

get_erp_products();
function get_erp_products(){
  $.ajax({
    dataType:"json",
    url:"products.php",
    method:"post",
    async:false,
    data:{get_erp_products:"get_erp_products"},
    success:function(data){
    var res ="";
 for (var i = 0; i < data.length; i++) {
   res += '  <div class="col-sm-12 col-md-6 col-lg-4 col-lg-3 col_erdp">';
   res += '<a href="info_product.php?ERP=comoapp&product_id='+data[i].Product_ID +'">';
   res += '    <div class="card border-secondary mb-3" style="max-width: 18rem;">'
   res += '      <div class="card-header text-center">comoapp</div>';
   res +=  '      <div class="card-body text-secondary">';
   res += '        <div class="div_img_erd_">';
   res += '           <img src="'+$("#img__in").val()+data[i].Product_Img+'"  class="rdp_img"alt="">';
   res += '        </div>';
   res += '        <div class="">';
   res += '          <p>';
   res += '            '+data[i].Description+' ';
   res += '            <div class="div_pric_erp">';
   var tota_pr;
   if ($("#select_currency").val() ==1) {
     tota_pr = data[i].Price;
   }else{
     tota_pr = data[i].Price / exchange_money(localStorage.getItem("currency"));
   }
//   var tota_pr = data[i].Price *exchange_money(localStorage.getItem("currency"));
   var cur = $("#select_currency option:selected").text();

   res += '              <h4 class="text-center"> <strong >'+Math.floor(tota_pr)+" "+cur+' </strong> </h4>';

   res += '            </div>';
   res += '          </p>';
   res += '        </div>';
   res += '      </div>';
   res += '    </div>';
   res += '  </a>';
   res += '  </div>';



 }
  $(".row_erp").empty();
 $(".row_erp").append(res);

    },
    error:function(error){

    }

  })

}


});


$(window).on("load",function(){
  $(".pare_spin").fadeOut(2000,function(){
    $("body").css("overflow","auto");
    $(this).remove();
  })





})

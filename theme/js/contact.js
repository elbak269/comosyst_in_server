$(document).ready(function(){
/*
  let map;

  function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
      center: { lat: -34.397, lng: 150.644 },
      zoom: 8,
    });
  }
 */

  $("#btn_send").click(function(){


      var subject    = $("#subject").val().trim();
      var message    = $("#message").val().trim();
      var email      = $("#email").val().trim();
      var Phone      = $("#phone").val().trim();
      var Adress     = $("#address").val().trim();

    if(subject == "" || subject  == null){

             $(".inside_alert").text(mylang("subjCant"));
          $(".inside_alert").show(1000);
          $(".inside_alert").css("display","flex");
          $(".inside_alert").css("z-index","99999");

       setTimeout(function(){
                $(".inside_alert").hide(1000);
                $("#subject").focus();
               }, 3000);


    }else if(message == "" || message == null){
      $(".inside_alert").text(mylang("emailCant"));
      $(".inside_alert").show(1000);
      $(".inside_alert").css("z-index","99999");
       $("#message").focus();
       $(".inside_alert").text(mylang("emailCant"));
       setTimeout(function(){
                $(".inside_alert").hide(1000);
                $("#message ").focus();
               }, 3000);
    }else if(email == "" || email == null){
      $(".inside_alert").text(mylang("messageCant"));
      $(".inside_alert").show(1000);
      $(".inside_alert").css("z-index","99999");
       $("#email").focus();

       setTimeout(function(){
                $(".inside_alert").hide(1000);
                $("#email").focus();
               }, 3000);
    }
    else if(Phone == "" || Phone == null){
      $(".inside_alert").text(mylang("messageCant"));
      $(".inside_alert").show(1000);
      $(".inside_alert").css("z-index","99999");
       $("#Phone").focus();

       setTimeout(function(){
                $(".inside_alert").hide(1000);
                $("#Phone").focus();
               }, 3000);
    }
    else if(Adress == "" || Adress == null){
      $(".inside_alert").text(mylang("messageCant"));
      $(".inside_alert").show(1000);
      $(".inside_alert").css("z-index","99999");
       $("#address").focus();

              setTimeout(function(){
                       $(".inside_alert").hide(1000);
                       $("#address").focus();
                      }, 3000);

    }else{
      $.ajax({
        method:"post",
        url:"fetch_data.php",
        data:{Subject:subject,Message:message,Email:email,
          Phone:Phone,Adress:Adress},
        success:function(success){
        if (success == "1") {
          $(".inside_alert_sucs").text(mylang("successfulPreogress"));
          $(".inside_alert_sucs").show(1000);
          $(".inside_alert_sucs").css("z-index","99999");

                  setTimeout(function(){
                           $(".inside_alert_sucs").hide(1000);

                        }, 3000);
        }

        },
        error:function(error){
        
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

})

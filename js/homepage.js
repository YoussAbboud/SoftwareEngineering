$(document).ready(function() {
    $('.carousel').carousel({
      interval: 3500
    })
 



  $("#login_btt").click(function(){
    
    var l_email = $("#l-email").val();
    var l_password = $("#l-password").val();

    $.ajax({
      url: "./verification/verification.php",
      data: {
        "email": l_email,
        "password": l_password,
      },
      type: "POST",
      success: function(data){ 
      
          console.log(data);
          if(data == "admin")
          {
            alert("Welcome Admin");
              window.location.replace("./admin.php");
          }
          if(data == "falsepass")
          {
              alert("Wrong password");
          }
          else if(data == "falseemail")
          {
              alert("Wrong Email Try Again");
          }
          else if(data == "true")
          {
              alert("Logged In");
              window.location.replace("./index2.php");
          }
        }
    });       
  });



  $("#register_btt").click(function(){
    
    var r_email = $("#r-email").val();
    var r_password = $("#r-password").val();
    var r_firstname = $("#r-first").val();
    var r_lastname = $("#r-last").val();

    $.ajax({
      url: "./verification/signup.php",
      data: {
        "email":r_email,
        "password":r_password,
        "firstname":r_firstname,
        "lastname": r_lastname, 
      },
      type: "POST",
      success: function(data){
          console.log(data);
          if(data == "already exists")
          {
              alert("Email Already Exists");
          }
          else if(data == "error in fields")
          {
            alert("Field Missing, try Again")
          }
          else if(data == "true")
          {
              alert("Registered Successfully!");
              window.location.replace("./index2.php");
          }
        }
    });       
  });

});


$("#logout").click(function(){

  $.ajax({
    url: "./verification/verification.php",
    data: {
      "action": "unsetsession",
    },
    type: "POST",
    success: function(data){ 
    
        console.log(data);
        if(data == "true")
        {
            window.location.replace("./index2.php");
        }
      }
  });       
});



function logout() {
  $.ajax({
    url: "./verification/logout.php",
    data: {
      "action": "unsetsession",
    },
    type: "POST",
    success: function(data){ 
    
        console.log(data);
        if(data == "true")
        {
            window.location.replace("./index.php");
        }
      }
  });
}

function reservation_bp(){

var reserved_id = $("#item_id").val();

  $.ajax({
    url: "../verification/reservationbp.php",
    data: {
      "res_id": reserved_id,
    },
    type: "POST",
    success: function(data){ 
    
        console.log(data);
        if(data == "true")
        {
          alert("Item Resereved");
            window.location.replace("babyprods.php");
        }
        else if(data =="notavailable")
        {
          alert("Item Not Available");
        }
        else
        alert("Server Error");
      }
  });
}

  function reservation_bt(){

    var reserved_id = $("#item_id").val();
    
      $.ajax({
        url: "../verification/reservationbt.php",
        data: {
          "res_id": reserved_id,
        },
        type: "POST",
        success: function(data){ 
        
            console.log(data);
            if(data == "true")
            {
              alert("Item Resereved");
                window.location.replace("babytoils.php");
            }
            else if(data =="notavailable")
            {
              alert("Item Not Available");
            }
            else
            alert("Server Error");
          }
      });
  }
  

  function reservation_c(){

    var reserved_id = $("#item_id").val();
    
      $.ajax({
        url: "../verification/reservationc.php",
        data: {
          "res_id": reserved_id,
        },
        type: "POST",
        success: function(data){ 
        
            console.log(data);
            if(data == "true")
            {
              alert("Item Resereved");
                window.location.replace("cosmetics.php");
            }
            else if(data =="notavailable")
            {
              alert("Item Not Available");
            }
            else
            alert("Server Error");
          }
      });
  }

  function reservation_d(){

    var reserved_id = $("#item_id").val();
    
      $.ajax({
        url: "../verification/reservationd.php",
        data: {
          "res_id": reserved_id,
        },
        type: "POST",
        success: function(data){ 
        
            console.log(data);
            if(data == "true")
            {
              alert("Item Resereved");
                window.location.replace("dental.php");
            }
            else if(data =="notavailable")
            {
              alert("Item Not Available");
            }
            else
            alert("Server Error");
          }
      });
  }

  function reservation_p(){

    var reserved_id = $("#item_id").val();
    
      $.ajax({
        url: "../verification/reservationp.php",
        data: {
          "res_id": reserved_id,
        },
        type: "POST",
        success: function(data){ 
        
            console.log(data);
            if(data == "true")
            {
              alert("Item Resereved");
                window.location.replace("parameds.php");
            }
            else if(data =="notavailable")
            {
              alert("Item Not Available");
            }
            else
            alert("Server Error");
          }
      });
  }

  function reservation_sn(){

    var reserved_id = $("#item_id").val();
    
      $.ajax({
        url: "../verification/reservationsn.php",
        data: {
          "res_id": reserved_id,
        },
        type: "POST",
        success: function(data){ 
        
            console.log(data);
            if(data == "true")
            {
              alert("Item Resereved");
                window.location.replace("sportnut.php");
            }
            else if(data =="notavailable")
            {
              alert("Item Not Available");
            }
            else
            alert("Server Error");
          }
      });
  }

  function reservation_s(){

    var reserved_id = $("#item_id").val();
    
      $.ajax({
        url: "../verification/reservations.php",
        data: {
          "res_id": reserved_id,
        },
        type: "POST",
        success: function(data){ 
        
            console.log(data);
            if(data == "true")
            {
              alert("Item Resereved");
                window.location.replace("supplements.php");
            }
            else if(data =="notavailable")
            {
              alert("Item Not Available");
            }
            else
            alert("Server Error");
          }
      });
  }
  
  


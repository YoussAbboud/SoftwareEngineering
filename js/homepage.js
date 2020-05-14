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

function logout2() {
  $.ajax({
    url: "../verification/logout.php",
    data: {
      "action": "unsetsession",
    },
    type: "POST",
    success: function(data){ 
    
        console.log(data);
        if(data == "true")
        {
            window.location.replace("../index.php");
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
  
  

  function addbtt(){
    
    var e_email = $("#e-email").val();
    var e_password = $("#e-password").val();
    var e_firstname = $("#e-first").val();
    var e_lastname = $("#e-last").val();
    var e_nbr = $("#e-nbr").val();


    $.ajax({
      url: "./verification/addemployee.php",
      data: {
        "email":e_email,
        "password":e_password,
        "firstname":e_firstname,
        "lastname": e_lastname, 
        "nbr":e_nbr,
      },
      type: "POST",
      success: function(data){
          console.log(data);
          if(data == "error")
          {
              alert("Employee Already Exists");
          }
          else if(data == "true")
          {
              alert("Added Successfully!");
              window.location.replace("admin.php");
          }
        }
    });
  }

  function removefirst(){
    
    var remove_firstname = $("#remove-first").val();


    $.ajax({
      url: "./verification/remove.php",
      data: {
        "remove_firstname":remove_firstname,
        
      },
      type: "POST",
      success: function(data){
          console.log(data);
          if(data == "error")
          {
              alert("Employee Already Exists");
              window.location.replace("admin.php");
          }
          else if(data == "true")
          {
              alert("Added Successfully!");
              window.location.replace("admin.php");
          }
          else if(data == "noemp")
          {
            alert("No Employee");
            window.location.replace("admin.php");
          }
        }
    });
  }

  function removelast(){
    
    var remove_firstname = $("#remove-last").val();


    $.ajax({
      url: "./verification/remove.php",
      data: {
        "remove_lastname":remove_lastname,
        
      },
      type: "POST",
      success: function(data){
          console.log(data);
          if(data == "error")
          {
              alert("Error in Fields");
              window.location.replace("admin.php");
          }
          else if(data == "true")
          {
              alert("Removed Successfully!");
              window.location.replace("admin.php");
          }
          else if(data == "noemp")
          {
            alert("No Employee");
            window.location.replace("admin.php");
          }
        }
    });
  }

  function removeNbr(){
    
    var remove_Nbr = $("#remove-Nbr").val();


    $.ajax({
      url: "./verification/remove.php",
      data: {
        "remove_Nbr":remove_Nbr,
        
      },
      type: "POST",
      success: function(data){
          console.log(data);
          if(data == "error")
          {
              alert("Error in Fields");
              window.location.replace("admin.php");
          }
          else if(data == "true")
          {
              alert("Removed Successfully!");
              window.location.replace("admin.php");
          }
          else if(data == "noemp")
          {
            alert("No Employee");
            window.location.replace("admin.php");
          }
        }
    });
  }

  function removeemail(){
    
    var remove_email = $("#remove-email").val();


    $.ajax({
      url: "./verification/remove.php",
      data: {
        "remove_email":remove_email,
        
      },
      type: "POST",
      success: function(data){
          console.log(data);
          if(data == "error")
          {
              alert("Error in Fields");
              window.location.replace("admin.php");
          }
          else if(data == "true")
          {
              alert("Removed Successfully!");
              window.location.replace("admin.php");
          }
          else if(data == "noemp")
          {
            alert("No Employee");
            window.location.replace("admin.php");
          }
        }
    });
  }

  function addbtt(){
    
    var c_email = $("#c-email").val();
    var c_password = $("#c-password").val();
    var c_firstname = $("#c-first").val();
    var c_lastname = $("#c-last").val();


    $.ajax({
      url: "./verification/addcustomer.php",
      data: {
        "email":c_email,
        "password":c_password,
        "firstname":c_firstname,
        "lastname": c_lastname, 
      },
      type: "POST",
      success: function(data){
          console.log(data);
          if(data == "error")
          {
              alert("Customer Already Exists");
              window.location.replace("admin.php");
          }
          else if(data == "true")
          {
              alert("Added Successfully!");
              window.location.replace("admin.php");
          }
          else if(data == "error in fields")
          {
            alert("Error in Fields");
              window.location.replace("admin.php");
          }
        }
    });
  }

  function removecfirst(){
    
    var remove_cfirstname = $("#remove-cfirst").val();


    $.ajax({
      url: "./verification/removecustomer.php",
      data: {
        "remove_firstname":remove_cfirstname,
        
      },
      type: "POST",
      success: function(data){
          console.log(data);
          if(data == "error")
          {
              alert("Customer Already Exists");
              window.location.replace("admin.php");
          }
          else if(data == "true")
          {
              alert("Added Successfully!");
              window.location.replace("admin.php");
          }
          else if(data == "noemp")
          {
            alert("No Customer Found");
            window.location.replace("admin.php");
          }
        }
    });
  }

  function removeclast(){
    
    var remove_clast = $("#remove-clast").val();


    $.ajax({
      url: "./verification/removecustomer.php",
      data: {
        "remove_lastname":remove_clast,
        
      },
      type: "POST",
      success: function(data){
          console.log(data);
          if(data == "error")
          {
              alert("Customer Already Exists");
              window.location.replace("admin.php");
          }
          else if(data == "true")
          {
              alert("Added Successfully!");
              window.location.replace("admin.php");
          }
          else if(data == "noemp")
          {
            alert("No Customer Found");
            window.location.replace("admin.php");
          }
        }
    });
  }

  function removecemail(){
    
    var remove_cemail = $("#remove-cemail").val();


    $.ajax({
      url: "./verification/removecustomer.php",
      data: {
        "remove_email":remove_cemail,
        
      },
      type: "POST",
      success: function(data){
          console.log(data);
          if(data == "error")
          {
              alert("Customer Already Exists");
              window.location.replace("admin.php");
          }
          else if(data == "true")
          {
              alert("Added Successfully!");
              window.location.replace("admin.php");
          }
          else if(data == "noemp")
          {
            alert("No Customer Found");
            window.location.replace("admin.php");
          }
        }
    });
  }

  function removecpass(){
    
    var remove_cpass = $("#remove-cpass").val();


    $.ajax({
      url: "./verification/removecustomer.php",
      data: {
        "remove_pass":remove_cpass,
        
      },
      type: "POST",
      success: function(data){
          console.log(data);
          if(data == "error")
          {
              alert("Customer Already Exists");
              window.location.replace("admin.php");
          }
          else if(data == "true")
          {
              alert("Added Successfully!");
              window.location.replace("admin.php");
          }
          else if(data == "noemp")
          {
            alert("No Customer Found");
            window.location.replace("admin.php");
          }
        }
    });
  }

  function additem(){
    
    var i_product = $("#product").val();
    var i_brand = $("#brand").val();
    var i_desct = $("#desct").val();
    var i_qty = $("#qty").val();
    var i_price = $("#price").val();


    $.ajax({
      url: "../verification/a_item.php",
      data: {
        "product":i_product,
        "brand":i_brand,
        "desct":i_desct,
        "qty": i_qty,
        "price":i_price,  
      },
      type: "POST",
      success: function(data){
          console.log(data);
          if(data == "error")
          {
              alert("Customer Already Exists");
              window.location.replace("admin.php");
          }
          else if(data == "true")
          {
              alert("Added Successfully!");
              window.location.replace("../admin.php");
          }
          else if(data == "error in fields")
          {
            alert("Error in Fields");
              window.location.replace("../admin.php");
          }
        }
    });
  }

  function removeitem(){
    
    var i_product = $("#product").val();
    var i_brand = $("#brand").val();
    var i_desct = $("#desct").val();
    var i_price = $("#price").val();


    $.ajax({
      url: "../verification/r_item.php",
      data: {
        "product":i_product,
        "brand":i_brand,
        "desct":i_desct,
        "price":i_price,  
      },
      type: "POST",
      success: function(data){
          console.log(data);
          if(data == "true")
          {
              alert("Removed Successfully!");
              window.location.replace("../admin.php");
          }
          else if(data == "error in fields")
          {
            alert("Error in Fields");
              window.location.replace("../admin.php");
          }
        }
    });
  }

  function updtbtt(){

    var first_name = $("#e-first").val();
    var last_name = $("#e-last").val();
    var new_email = $("#e-newemail").val();
    var new_phonenumber = $("#e-newnbr").val();
    
      $.ajax({
        url: "../verification/reservationbp.php",
        data: {
          "firstname": first_name,
          "lastname":last_name,
          "n-email":new_email,
          "n-nbr":new_phonenumber,
        },
        type: "POST",
        success: function(data){ 
        
            console.log(data);
            if(data == "true")
            {
              alert("Employee Updated");
                window.location.replace("admin.php");
            }
            else if(data =="error")
            {
              alert("Couldnt Update");
            }
          }
      });
    }

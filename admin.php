<?php
session_start();
if(!isset($_SESSION["admin"]))
{
    echo "Access not authorized.";
    exit();
}
 require("./connection/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="google-signin-client_id"
    content="361584695413-p0l4bdov2nkk0vl1gj4o6rp4er1rnf51.apps.googleusercontent.com">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="./css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans:700,700i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script src="./js/homepage.js" type="text/javascript"></script>

  <title>Admin</title>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container">
      <a class="navbar-brand mx-auto" href="#" style="color: black; font-weight: bold; font-family: 'Roboto', sans-serif; font-size: 25px;"> <img src="./img/logo.png" alt="logo" height="42" width="42" id="img1"> Rahbani</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <div class="container">
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style=" font-size: large;">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
          <?php if(isset($_SESSION['email']))
      {
        ?>
  <a class="nav-link" href="index2.php" style="color: black; ">
              Home </a>

<?php } 

      else
      { ?>
            <a class="nav-link" href="index.php" style="color: black; ">
              Home </a>
      <?php } ?>  
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" style="color: black; font-weight: bold;"> Shop </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" style="color: black">
              Items
            </a>

            <div class="dropdown-content dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="./items/parameds.php">Para Medicals</a>
              <a class="dropdown-item" href="./items/babyprods.php">Baby products</a>
              <a class="dropdown-item" href="./items/babytoils.php">Baby Toiletries</a>
              <a class="dropdown-item" href="./items/dental.php">Dental Products</a>
              <a class="dropdown-item" href="./items/sportnut.php">Sport Nutrition</a>
              <a class="dropdown-item" href="./items/cosmetics.php">Cosmetics</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="./items/supplements.php">Supplements</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./about/about.php" style="color: black;"> About </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./contact/contact.php" style="color: black;"> Contact </a>
          </li>

          <?php if(isset($_SESSION["admin"]))
          {

          ?>
          <li class="nav-item">
            <a class="nav-link" href="admin.php" style="color: black;"> Admin </a>
          </li>
<?php } ?>

        </ul>
      </div>

      <div class="container">

      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
  <ul class="navbar-nav ml-auto">

  <?php if(isset($_SESSION["email"]))
{ ?>
    <li class="nav-item dropdown">
      <a class="nav-link" role="button" aria-haspopup="true" aria-expanded="false" style="color: black">
      <button class="btn" onClick="logout()">Log Out</button> 
      </a>
    </li>
    <?php } ?>
  </ul>
</div>


</div>

    </div>

    

    </div>
    </div>
  </nav>
 
  <div class="container-fluid">
  <div class="row">  
<div class="col-lg-3">
<div class="container">
            <div class="row">

              

                <h3 style="font-family: 'Archivo black' ; margin-top: 10px">Add an Employee:</h3>
                
                <div class="col-lg-12">
                  <input type="name" name="first" id="e-first" placeholder="First Name" style="font-family: 'Lato'">
                  <input type="name" name="last" id="e-last" placeholder="Last Name">
                </div>
                <div class="col-lg-12">
                  <input type="email" name="email" id="e-email" placeholder="Email address">
                </div>
                <div class="col-lg-12">
                  <input type="password" name="pass" id="e-password" placeholder="Password">
                </div>
                <div class="col-lg-12">
                  <input type="tel" name="phonenbr" id="e-nbr" placeholder="Phone Nbr">
                </div>
                <div class="col-12">
                  <button class="btn btn-lg btn-primary btn-block text-uppercase" onClick="addbtt()" type="button" id="add_btt">Add am Employee</button>
                </div>
                <div class="col-lg-12">
                  <input type="email" name="first" id="e-newemail" placeholder="New Email" style="font-family: 'Lato'">
                  <input type="tel" name="last" id="e-newnbr" placeholder="New Phone Number">
                </div>
                <div class="col-12">
                  <button class="btn btn-lg btn-primary btn-block text-uppercase" onClick="updtbtt()" type="button" id="add_btt">Update Employee</button>
                </div>

            </div>
          </div>

</div>
<div class="col-lg-3">
    <div class="container">
    <div class="row">
    <h3 style="font-family: 'Archivo black' ; margin-top: 10px">Remove an Employee:</h3>

<div class="col-lg-12">
<input type="tel" name="nbr" id="remove-nbr" placeholder="Phone Number" style="font-family: 'Lato'">
<button class="btn btn-lg btn-primary btn-block text-uppercase" onClick="removeNbr()" type="button" id="add_btt">Remove by Phone Number</button>
</div>

<div class="col-lg-12">
<input type="email" name="email" id="remove-nbr" placeholder="Email" style="font-family: 'Lato'">
<button class="btn btn-lg btn-primary btn-block text-uppercase" onClick="removeemail()" type="button" id="add_btt">Remove by Email</button>
</div>
<h3 style="font-family: 'Archivo black' ; margin-top: 10px">Remove a Customer:</h3>
    <div class="col-lg-12">
<input type="email" name="email" id="remove-cemail" placeholder="Email" style="font-family: 'Lato'">
<button class="btn btn-lg btn-primary btn-block text-uppercase" onClick="removecemail()" type="button" id="add_btt">Remove by Email</button>

    </div>

    </div>
    </div> 
</div>
<div class="col-lg-3">
<div class="container">
            <div class="row">

              

                <h3 style="font-family: 'Archivo black' ; margin-top: 10px">Add a Customer:</h3>
                
                <div class="col-lg-12">
                  <input type="name" name="first" id="c-first" placeholder="First Name" style="font-family: 'Lato'">
                  <input type="name" name="last" id="c-last" placeholder="Last Name">
                </div>
                <div class="col-lg-12">
                  <input type="email" name="email" id="c-email" placeholder="Email address">
                </div>
                <div class="col-lg-12">
                  <input type="password" name="pass" id="e-password" placeholder="Password">
                </div>
                  <div class="col-12">
                  <button class="btn btn-lg btn-primary btn-block text-uppercase" onClick="addcust()" type="button" id="add_btt">Add a Customer</button>
                </div>

<div class="col-12" style="margin-top: 20px">
                <a href="./items/additem.php" style="color: black;" type="button"> Add Item </a>
</div>

<div class="col-12" style="margin-top: 20px">
                <a href="./items/removeitem.php" style="color: black;" type="button"> Remove Item </a>
</div>

<div class="col-12" style="margin-top: 20px">
                <a href="./items/res.php" style="color: black;" type="button">Reservations</a>
</div>


            </div>
          </div>




</div>











    </div>
</div>

  <?php
$sql = 'SELECT email, first_name , last_name , Phone_nb , pass  FROM employees';
$result = mysqli_query($connection , $sql);
?>
<div class="container-fluid" style="margin-top: 20px">
<div class="row">
<div class="col-lg-6">

      <div class="container-fluid">
      <p style="font-weight: bold ; font-family: 'Roboto' ; margin-top: 10px">&nbsp &nbsp &nbsp Employees</p>
      <div class="row">
      
      <?php while($rows = mysqli_fetch_assoc($result))
                                {

                                     ?>    
                        <div class="col-lg-3 col-sm-4">

                        <div class="card text-center" style="height: 350px ; width: 230px ; margin-bottom: 20px; margin-left: 15px">
                        <img class="card-img-top" src="<?php echo($image_show) ?>" alt="Card image" style="height: 170px ; width: 190px ; margin-left: 15px ; margin-top: 10px">

    <div class="card-body text-center">
        <tr>
            
        <input type=hidden name="description" value="<?php echo $rows['first_name']; ?>"/>
                      <?php echo $rows['first_name']; ?></br>
  
                          <td><?php echo $rows['last_name']?></td></br>
                          <td>Phone Nb:</t> <?php echo $rows['Phone_nb'] ?></td></br>
                          <td>Pass: </t><?php echo $rows['pass'] ?></td>&nbsp&nbsp&nbsp if any </br>
                      </tr>
    </div>
</div>
</div>
<?php
                                }
                            ?>
</div>
</div>
</div>
<?php
$sql2 = 'SELECT c_email, f_name , l_name , c_pass  FROM customer';
$result2 = mysqli_query($connection , $sql2);
?>
<div class="col-lg-6">

<div class="container-fluid">
      <p style="font-weight: bold ; font-family: 'Roboto' ; margin-top: 10px">&nbsp &nbsp &nbsp Customers</p>
      <div class="row">
      
      <?php while($rows = mysqli_fetch_assoc($result2))
                                {

                                     ?>    
                        <div class="col-lg-3 col-sm-4">

                        <div class="card text-center" style="height: 350px ; width: 230px ; margin-bottom: 20px; margin-left: 15px">
                        <img class="card-img-top" src="<?php echo($image_show) ?>" alt="Card image" style="height: 170px ; width: 190px ; margin-left: 15px ; margin-top: 10px">

    <div class="card-body text-center">
        <tr>
            
        <input type=hidden name="description" value="<?php echo $rows['f_name']; ?>"/>
                      <?php echo $rows['f_name']; ?></br>
  
                          <td><?php echo $rows['l_name']?></td></br>
                          <td>Email:</t> <?php echo $rows['c_email'] ?></td></br>
                          <td>Pass: </t><?php echo $rows['c_pass'] ?></td></br>
                      </tr>
    </div>
</div>
</div>
<?php
                                }
                            ?>
</div>
</div>




</div>
</div>
</div>



  <footer>
    <div class="container-fluid bg-light">
        
      <div class="row  ml-auto" >

        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

          <div>
            <h3 class="footer-heading mb-4">About Us</h3>
            <p style="font-family: 'Ubuntu', sans-serif;">Under Dr Rahbani’s leadership, Rahbani Pharmacy has been providing patients with professional counseling and unique treatment solutions since 1985. As it expanded and grew, people from all over Lebanon started purposely going to pharmacy Rahbani as it has it all & most importantly imports medicines that one cannot find in Lebanon.</p>
         
          </div>

        </div>
        <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
          <h3 class="footer-heading mb-4">Quick Links</h3>
          <ul class="list-unstyled">
            <li><a href="shop.php">Shop</a></li>
            <li><a href="../items/parameds.php">Para Medicals</a></li>
            <li><a href="../index.php">Home</a></li>
          </ul>
        </div>

        <div class="col-md-6 col-lg-3" >
          <div class="block-5 mb-5">
            <h3 class="footer-heading mb-4">Contact Info</h3>
            <ul class="list-unstyled">
              <li class="address">Jbeil, Lebanon</li>
              <li class="phone"><a href="tel://+961-9-946100">+961-9-946100</a></li>
              <li class="email">farmarah@gmail.com</li>
            </ul>
          </div>


        </div>
    
    </div>

    <div class="container-fluid bg-light">
      <div class="row">
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

        </div>
        <div class="col-lg-3 mx-auto mb-5 mb-lg-0" >
          <p style="font-size: small;"><a href="./Privacy/Privacy.php" id="priv">Privacy Policies </a></p>
        </div>
        <div class="col-md-6 col-lg-3">

        </div>
      </div>
    </div>
</footer>




</body>




</html>
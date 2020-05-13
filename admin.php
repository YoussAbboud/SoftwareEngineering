<?php
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

  <title>Pharmacy Rahbani</title>

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
            <a class="nav-link" href="./index.php" style="color: black; ">
              Home </a>
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



        </ul>
      </div>

      <div class="container">

<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
  <ul class="navbar-nav ml-auto">

    <li class="nav-item dropdown">
    <a class="nav-link" href="index2.php" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black">
        
        <p style="font-family: 'Ubuntu'">Log Out <i class="fas fa-user" style="margin-top: 25px;"></i></p>
        </a>

    </li>
  </ul>
</div>


</div>

    </div>

    

    </div>
    </div>
  </nav>
 
  <div class="container-fluid">
  <div class="row">  
<div class="col-lg-6">
    






</div>
<div class="col-lg-6">
    







</div>
    </div>
</div>









  <?php
$sql = 'SELECT email, first_name , last_name , Phone_nb , pass  FROM employees';
$result = mysqli_query($connection , $sql);

?>

<p style="font-weight: bold ; font-family: 'Roboto' ; margin-top: 10px">&nbsp &nbsp &nbsp Employees</p>
      <div class="container">
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
                          <td>Pass: </t><?php echo $rows['pass'] ?></td> LBP</br>
                      </tr>
    </div>
</div>
</div>
<?php
                                }
                            ?>
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
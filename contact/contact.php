<?php
session_start();
 require("../connection/connection.php");
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

  <link rel="stylesheet" href="../css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans:700,700i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script src="../js/homepage.js" type="text/javascript"></script>

  <title>Pharmacy Rahbani</title>

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container">
      <a class="navbar-brand mx-auto" href="#" style="color: black; font-weight: bold; font-family: 'Roboto', sans-serif; font-size: 25px;"> <img src="../img/logo.png" alt="logo" height="42" width="42" id="img1"> Rahbani</a>
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
  <a class="nav-link" href="../index2.php" style="color: black; ">
              Home </a>

<?php } 

      else
      { ?>
            <a class="nav-link" href="../index.php" style="color: black; ">
              Home </a>
      <?php } ?>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Shop/shop.php" style="color: black;"> Shop </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" style="color: black">
              Items
            </a>

            <div class="dropdown-content dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../items/parameds.php">Para Medicals</a>
              <a class="dropdown-item" href="../items/babyprods.php">Baby products</a>
              <a class="dropdown-item" href="../items/babytoils.php">Baby Toiletries</a>
              <a class="dropdown-item" href="../items/dental.php">Dental Products</a>
              <a class="dropdown-item" href="../items/sportnut.php">Sport Nutrition</a>
              <a class="dropdown-item" href="../items/cosmetics.php">Cosmetics</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../items/supplements.php">Supplements</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../about/about.php" style="color: black;"> About </a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="contact.php" style="color: black;  font-weight: bold;"> Contact </a>
          </li>



        </ul>
      </div>

      
      

      

    </div>

    

    </div>
    </div>
  </nav>

  <?php 
if(isset($_POST["submit"]))
{
if(isset($_POST["message"]) && isset($_POST["email"]) && isset($_POST["name"]) && isset($_POST["subject"]))
{
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$subject = $_POST["subject"];

$to = 'yousboud@hotmail.com';

$headers = "From: ".$name."\r\n";
$send = mail($to, $subject, $message, $headers);

if($send)
{
echo '<br>';
echo 'Thank You for Contacting our Support, will get to you shortly';
echo '<br>';
mail($email,"Customer Support","Thank you For Contacting Customer Support, Will get to you shortly", "Customer Support at Pharmacy Rahbani");

}
else
{
?>
<span class="popuptext" id="myPopup">Try Again Later</span>
<?php
}
}
}
?>

  <h1 style="margin-top: 20px; margin-bottom: 20px;">Contact us</h1>
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-2 ml-auto">

      <form method="post" action="contact.php">
        <input type="text" name="name" id="input-name" placeholder="Name">
        <input type="email" name="email" id="input-email" placeholder="Email address">
        <input type="text" name="subject" id="input-subject" placeholder="Subject">
      </div>
      <div class="col-lg-3 col-md-6 mr-auto">
        <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
      </div>
      
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-3 mx-auto">
        <input type="submit" name="submit" value="Submit" id="input-submit">
      </div>
    </div>
  </div>

</form>


  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8 col-sm-2 mx-auto">
        <p style="margin-top: 20px; border-radius: 5px ; margin-left:70px"><iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13211.645419030117!2d35.64317344001246!3d34.12301905285936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f5caa39f11045%3A0x92d1cc8bb2421051!2sRahbani%20-%20Pharmacy!5e0!3m2!1sen!2slb!4v1582541075982!5m2!1sen!2slb"
            width="1200" height="600" frameborder="0" style="border:1;" allowfullscreen="1"></iframe></p>
      </div>
    </div>
  </div>

  <footer>
    <div class="container-fluid bg-light">

      <div class="row  ml-auto">

        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

          <div>
            <h3 class="footer-heading mb-4">About Us</h3>
            <p style="font-family: 'Ubuntu', sans-serif;">Under Dr Rahbani’s leadership, Rahbani Pharmacy has been providing patients with professional counseling and unique treatment solutions since 1985. As it expanded and grew, people from all over Lebanon started purposely going to pharmacy Rahbani as it has it all & most importantly imports medicines that one cannot find in Lebanon.</p>
         
          </div>

        </div>
        <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
          <h3 class="footer-heading mb-4">Quick Links</h3>
          <ul class="list-unstyled">
            <li><a href="../Shop/shop.php">Shop</a></li>
            <li><a href="../items/parameds.php">Para Medicals</a></li>
            <li><a href="../index.php">Home</a></li>
          </ul>
        </div>

        <div class="col-md-6 col-lg-3">
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
            <p style="font-size: small;"><a href="../Privacy/Privacy.php" id="priv">Privacy Policies </a></p>
          </div>
          <div class="col-md-6 col-lg-3">
  
          </div>
        </div>
      </div>
  </footer>




</body>




</html>
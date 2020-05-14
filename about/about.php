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
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
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
            <a class="nav-link disabled" href="about.php" style="color: black; font-weight: bold;"> About </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contact/contact.php" style="color: black;"> Contact </a>
          </li>

          <?php if(isset($_SESSION["admin"]))
          {

          ?>
          <li class="nav-item">
            <a class="nav-link" href="../admin.php" style="color: black;"> Admin </a>
          </li>
<?php } ?>

        </ul>
      </div>

      <?php if(isset($_SESSION["email"]))
{ ?>
    <li class="nav-item dropdown">
      <a class="nav-link" role="button" aria-haspopup="true" aria-expanded="false" style="color: black">
      <button class="btn" onClick="logout2()">Log Out</button> 
      </a>
    </li>
    <?php } ?>

    </div>

    

    </div>
    </div>
  </nav>


  <div class="container" style="margin-top: 20px;">
    <div class="row">
      <div class="col-6">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="../img/unnamed.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../img/random1.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../img/inside5.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-6">
        <h2 style="font-family: 'Archivo black'; font-size: 90px; font-weight: bold; color: black;">ABOUT US
        </h2>
        <p style="font-family: 'Noto Sans', sans-serif; color: black; font-size: xx-large;">Welcome To Rahbani</p>
        <p>
          <a href="../Shop/shop.php" class="btn btn-primary px-5 py-3" style="font-family: 'Noto Sans'">Shop Now</a>
        </p>
      </div>
    </div>
    <div class="col-12" style="margin-top: 20px; margin-bottom: 20px;">
      <p style="font-family: 'Ubuntu', sans-serif;">
        Founded in 1988, Pharmacy Rahbani has been the pharmacy to go to in its region. As it expanded and grew, people from all over Lebanon started purposely going to pharmacy Rahbani as it has it all & most importantly imports medicines that one cannot find in Lebanon.
        Let’s talk about Dr. Sonia Rahbani, the founder and CEO of the pharmacy, as without her the pharmacy would cease to exist. </p>
        <span></span>
        <p style="font-family: 'Ubuntu', sans-serif;">Dr Sonia Rahbani is a seasoned pharmacist, an anti-aging doctor and an avid entrepreneur.
        She is the founder and general manager of Rahbani Pharmacy, Rahbani Laser Clinics and Dermapro anti-aging center in Lebanon. She received her PharmD from St Joseph University, Lebanon and her PhD in anti-aging medicine from Institute of Bioregulation and Gerontology, St Petersburg under the direction of Professor Vladimir Khavinson. Dr Rahbani currently sits on the board of Directors of the World Council of Preventive Medicine (WOCPM) dedicated to the advancement and combination of preventive, regenerative and anti-aging medicine into one integrated clinical and holistic approach.</p>
        <span></span>
        <p style="font-family: 'Ubuntu', sans-serif;">Under Dr Rahbani’s leadership, Rahbani Pharmacy has been providing patients with professional counseling and unique treatment solutions since 1985. Rahbani Laser Clinics and Dermapro were inaugurated shortly after, introducing a new concept of wellbeing, global wellness and anti-aging care in Lebanon and the region. The group is fully committed to offering the most comprehensive range of treatments, and is continuously expanding and innovating in order to cater to its wide customer base by offering bespoke services tailored to individual needs.
        To ensure customer’s satisfaction – key element in the success of her ventures – Dr Rahbani works closely with a dedicated strong and knowledgeable team of doctors, pharmacists, dieticians and cosmetic professionals. When asked about the mission that motivates her and her team, Dr Rahbani said “We are committed to the care and improvement of human life. We strive to deliver a complete range of high quality medical and wellness solutions to individuals of all ages because we understand the complex interactions of body, mind and soul as one”</p>
      </p>
    </div>
  </div>
  </div>
  <h1 style="font-family: 'Archivo black'; font-weight: bold; color: black;">Our Team</h1>
  <div class="container" style="margin-top: 30px">
    <div class="row mx-auto">
      
      <div class="col-lg-6 col-sm-12">
        <div class="flip-card" style="width:200px;height:200px; margin-left: 100px;">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../img/sonia.jpg" alt="Avatar" style="border-radius: 5px;">
            </div>
            <div class="flip-card-back">

              <span>Dr Sonia Rahbani</span>
              <p>Ceo and owner of pharmacy rahbani & rahbani laser center dermapro</p>
              <p></p>
              <p>Pharmacist</p>
              <span>Info: 03 637 937</span>

            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-sm-12">
        <div class="flip-card" style="width:200px;height:200px; margin-left: 200px;">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../img/maria.jpg" alt="Avatar" style="border-radius: 5px;">
            </div>
            <div class="flip-card-back">

              <span>Maria Souki</span>
              <p>Upper Management</p>
              <p></p>
              <p>Pharma D</p>
              <p></p>
              <p>Pharmacist</p>
              <span>Info: 03 686 770</span>

            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-sm-12">
        <div class="flip-card" style="width:200px;height:200px; margin-left: 100px; margin-top: 10px;">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../img/pamela.jpg" alt="Avatar" style="border-radius: 5px;">
            </div>
            <div class="flip-card-back">
              <span>Pamela Antar</span>
              <p>Accounting Manager</p>
              <p></p>
              <p>Accountant</p>
              <span>Info: 03 965 117</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-sm-12">
        <div class="flip-card" style="width:200px;height:200px; margin-left: 200px;margin-top: 10px;">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../img/hala.jpg" alt="Avatar" style="border-radius: 5px;">
            </div>
            <div class="flip-card-back">
              <span>Hala taysoun</span>
              <p>Food sup Responsable</p>
              <p></p>
              <p>Pharma D</p>
              <p></p>
              <p>Pharmacist</p>
              <span>Info: 03 335 334</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-sm-12">
        <div class="flip-card" style="width:200px;height:200px; margin-left: 100px;margin-top: 10px;">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../img/elsy.jpg" alt="Avatar" style="border-radius: 5px;">
            </div>
            <div class="flip-card-back">
              <span>Elsy Gerges</span>
              <p>Dietitian Manager</p>
              <p></p>
              <p>Dietitian</p>
              <span>Info: 76 014 914</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-sm-12">
        <div class="flip-card" style="width:200px;height:200px; margin-left: 200px;margin-top: 10px;">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../img/manal.jpg" alt="Avatar" style="border-radius: 5px;">
            </div>
            <div class="flip-card-back">
              <span>Manal Malek</span>
              <p>Dermatologist specialist</p>
              <p></p>
              <span>Info: 03 226 547</span>
            </div>
          </div>
        </div>
      </div>

     

      


    </div>
  </div>


  <footer>
    <div class="container-fluid bg-light">

      <div class="row mx-auto" style="padding-top: 40px;">

        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

          <div>
            <h3 class="footer-heading mb-4">About Us</h3>
            <p style="font-family: 'Ubuntu', sans-serif;">Under Dr Rahbani’s leadership, Rahbani Pharmacy has been providing patients with professional counseling and unique treatment solutions since 1985. As it expanded and grew, people from all over Lebanon started purposely going to pharmacy Rahbani as it has it all & most importantly imports medicines that one cannot find in Lebanon.</p>
          </div>

        </div>
        <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
          <h3 class="footer-heading mb-4">Quick Links</h3>
          <ul class="list-unstyled">
            <li><a href="./Shop/shop.php">Shop</a></li>
            <li><a href="/items/parameds.php">Para Medicals</a></li>
            <li><a href="./index.php">Home</a></li>
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
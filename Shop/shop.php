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
            <a class="nav-link disabled" href="#" style="color: black; font-weight: bold;"> Shop </a>
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
            <a class="nav-link" href="../contact/contact.php" style="color: black;"> Contact </a>
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
    </div>
  </nav>

<?php
 $sql7 = 'SELECT descpt, brand, qty, price , logo FROM para_medicals ORDER BY RAND()';

 $result7 = mysqli_query($connection , $sql7);

?>


  <div class="cover-container" >
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-7 mx-auto order-lg-2 align-self-center" style="margin-top: 20px; background-image: url('../img/inside2.jpeg'); height: 500px; border-radius: 5px">
          <div class="cover-content text-center">
            <h3 class="sub-title" style="font-family: 'Noto sans' ; font-weight: bold; margin-top: 190px;">Welcome To Rahbani</h3>
            
          </div>
        </div>
        <div class="col-lg-4 mx-auto order-lg-2 align-self-center" style=" background-color: rgb(224,224,224) ; border-radius: 5px; height: 500px; margin-top: 20px">

        <p style="font-weight: bold ; font-family: 'Roboto' ; margin-top: 10px">Para Medicals</p>
      <div class="container-fluid">
      <div class="row">
          <?php
          for ($i = 0; $i <= 3; $i++)
          {
          $rows7 = mysqli_fetch_assoc($result7);
          $image_fields =  trim($rows7['logo']);
          $image_show = "../img/$image_fields"
             ?>

<div class="column">
 <div class="card text-center" style="height: 350px ; width: 130px ; margin-bottom: 20px; margin-left: 30px">
 <img class="card-img-top" src="<?php echo($image_show) ?>" alt="Card image" style="height: 130px ; width: 125px">
                  <div class="card-body text-center">
                      <tr>
                          
                      <input type=hidden name="description" value="<?php echo $rows7['descpt']; ?>"/>
                      <?php echo $rows7['descpt']; ?>
  
                          <td><?php echo $rows7['brand']?></td></br>
                          <td>Quantity:</t> <?php echo $rows7['qty'] ?></td></br>
                          <td>Price: </t><?php echo $rows7['price'] ?></td> LBP</br>
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
  </div>

 
  <?php 
 

  $sql = 'SELECT descpt, brand, qty, price , logo FROM baby_products ORDER BY RAND()';
  $sql2 = 'SELECT descpt, brand, qty, price , logo FROM baby_toiletries ORDER BY RAND()';
  $sql3 = 'SELECT descpt, brand, qty, price , logo FROM cosmetics ORDER BY RAND()';
  $sql4 = 'SELECT descpt, brand, qty, price , logo FROM dental_products ORDER BY RAND()';
  $sql5 = 'SELECT descpt, brand, qty, price , logo FROM sport_nutrition ORDER BY RAND()';
  $sql6 = 'SELECT descpt, brand, qty, price ,logo FROM supplements ORDER BY RAND()';
  
  $result1 = mysqli_query($connection , $sql);
  $result2 = mysqli_query($connection , $sql2);
  $result3 = mysqli_query($connection , $sql3);
  $result4 = mysqli_query($connection , $sql4);
  $result5 = mysqli_query($connection , $sql5);
  $result6 = mysqli_query($connection , $sql6);

                              ?>

  <div class="container-fluid" style="margin-top: 30px">
      <div class="row">
      
      <div class="col-lg-4 col-sm-6 mx-auto ">
      <p style="font-weight: bold ; font-family: 'Roboto' ; margin-top: 10px">Baby Products</p>
      <div class="container-fluid">
      <div class="row">
          <?php
          for ($i = 0; $i <= 3; $i++)
          {
          $rows = mysqli_fetch_assoc($result1);
                       $image_fields =  trim($rows['logo']);
                       $image_show = "../img/$image_fields"
                          ?>
          
  <div class="column">
              <div class="card text-center" style="height: 350px ; width: 230px ; margin-bottom: 20px; margin-left: 15px">
              <img class="card-img-top" src="<?php echo($image_show) ?>" alt="Card image" style="height: 150px ; width: 200px ; margin-left: 15px ; margin-top: 10px">
  
                  <div class="card-body text-center">
                      <tr>
                          
                      <input type=hidden name="description" value="<?php echo $rows['descpt']; ?>"/>
                      <?php echo $rows['descpt']; ?>
  
                          <td><?php echo $rows['brand']?></td></br>
                          <td>Quantity:</t> <?php echo $rows['qty'] ?></td></br>
                          <td>Price: </t><?php echo $rows['price'] ?></td> LBP</br>
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

      <div class="col-lg-4 col-sm-6">
      <p style="font-weight: bold ; font-family: 'Roboto' ; margin-top: 10px">Cosmetics</p>
      <div class="container-fluid">
      <div class="row">
          <?php
          for ($i = 0; $i <= 3; $i++)
          {
          $rows3 = mysqli_fetch_assoc($result3);
          $image_fields =  trim($rows3['logo']);
                       $image_show = "../img/$image_fields"
                          ?>
          
  <div class="column">
              <div class="card text-center" style="height: 350px ; width: 230px ; margin-bottom: 20px; margin-left: 15px">
              <img class="card-img-top" src="<?php echo($image_show) ?>" alt="Card image" style="height: 150px ; width: 200px ; margin-left: 15px ; margin-top: 10px">
  
                  <div class="card-body text-center">
                      <tr>
                          
                      <input type=hidden name="description" value="<?php echo $rows3['descpt']; ?>"/>
                      <?php echo $rows3['descpt']; ?>
  
                          <td><?php echo $rows3['brand']?></td></br>
                          <td>Quantity:</t> <?php echo $rows3['qty'] ?></td></br>
                          <td>Price: </t><?php echo $rows3['price'] ?></td> LBP</br>
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
      
      <div class="col-lg-4 col-sm-6">
      <p style="font-weight: bold ; font-family: 'Roboto' ; margin-top: 10px">Baby Toileteries</p>
      <div class="container-fluid">
      <div class="row">
      <?php    
      for ($i = 0; $i <= 3; $i++)
        {
 $rows2 = mysqli_fetch_assoc($result2);
 $image_fields =  trim($rows2['logo']);
 $image_show = "../img/$image_fields"
    ?>

<div class="column">
<div class="card text-center" style="height: 350px ; width: 230px ; margin-bottom: 20px; margin-left: 15px">
<img class="card-img-top align-center" src="<?php echo($image_show) ?>" alt="Card image" style="height: 150px ; width: 200px ; margin-left: 15px ; margin-top: 10px">
  
                  <div class="card-body text-center">
                    <form action="./cars3.php" method="POST">
                      <tr>
                          
                      <input type=hidden name="description" value="<?php echo $rows2['descpt']; ?>"/>
                      <?php echo $rows2['descpt']; ?>
  
                          <td><?php echo $rows2['brand']?></td></br>
                          <td>Quantity:</t> <?php echo $rows2['qty'] ?></td></br>
                          <td>Price: </t><?php echo $rows2['price'] ?></td> LBP</br>
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

<div class="container-fluid">
<div class="row">

<div class="col-lg-4 col-sm-6">
      <p style="font-weight: bold ; font-family: 'Roboto'">Dental Products</p>
      <div class="container-fluid">
      <div class="row">
          <?php
          for ($i = 0; $i <= 3; $i++)
          {
          $rows4 = mysqli_fetch_assoc($result4);
          $image_fields =  trim($rows4['logo']);
          $image_show = "../img/$image_fields"
             ?>

<div class="column">
 <div class="card text-center" style="height: 350px ; width: 230px ; margin-bottom: 20px; margin-left: 15px">
 <img class="card-img-top" src="<?php echo($image_show) ?>" alt="Card image" style="height: 150px ; width: 200px ; margin-left: 15px ; margin-top: 10px">
  
                  <div class="card-body text-center">
                      <tr>
                          
                      <input type=hidden name="description" value="<?php echo $rows4['descpt']; ?>"/>
                      <?php echo $rows4['descpt']; ?>
  
                          <td><?php echo $rows4['brand']?></td></br>
                          <td>Quantity:</t> <?php echo $rows4['qty'] ?></td></br>
                          <td>Price: </t><?php echo $rows4['price'] ?></td> LBP</br>
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


      <div class="col-lg-4 col-sm-6">
      <p style="font-weight: bold ; font-family: 'Roboto'">Sport Nutrition</p>
      <div class="container-fluid">
      <div class="row">
          <?php
          for ($i = 0; $i <= 3; $i++)
          {
          $rows5 = mysqli_fetch_assoc($result5);
          $image_fields =  trim($rows5['logo']);
          $image_show = "../img/$image_fields"
             ?>

<div class="column">
 <div class="card text-center" style="height: 350px ; width: 230px ; margin-bottom: 20px; margin-left: 15px">
 <img class="card-img-top" src="<?php echo($image_show) ?>" alt="Card image" style="height: 150px ; width: 200px ; margin-left: 15px ; margin-top: 10px">
  
                  <div class="card-body text-center">
                      <tr>
                          
                      <input type=hidden name="description" value="<?php echo $rows5['descpt']; ?>"/>
                      <?php echo $rows5['descpt']; ?>
  
                          <td><?php echo $rows5['brand']?></td></br>
                          <td>Quantity:</t> <?php echo $rows5['qty'] ?></td></br>
                          <td>Price: </t><?php echo $rows5['price'] ?></td> LBP</br>
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
      

      <div class="col-lg-4 col-sm-6">
      <p style="font-weight: bold ; font-family: 'Roboto'">Supplements</p>
      <div class="container-fluid">
      <div class="row">
          <?php
          for ($i = 0; $i <= 3; $i++)
          {
          $rows6 = mysqli_fetch_assoc($result6);
          $image_fields =  trim($rows6['logo']);
          $image_show = "../img/$image_fields"
             ?>

<div class="column">
 <div class="card text-center" style="height: 350px ; width: 230px ; margin-bottom: 20px; margin-left: 15px">
 <img class="card-img-top" src="<?php echo($image_show) ?>" alt="Card image" style="height: 150px ; width: 200px ; margin-left: 15px ; margin-top: 10px">
  
                  <div class="card-body text-center">
                      <tr>
                          
                      <input type=hidden name="description" value="<?php echo $rows6['descpt']; ?>"/>
                      <?php echo $rows6['descpt']; ?>
  
                          <td><?php echo $rows6['brand']?></td></br>
                          <td>Quantity:</t> <?php echo $rows6['qty'] ?></td></br>
                          <td>Price: </t><?php echo $rows6['price'] ?></td> LBP</br>
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
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
  <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script src="https://kit.fontawesome.com/58f469af82.js" crossorigin="anonymous"></script>
  <script src="../js/homepage.js" type="text/javascript"></script>

  <title>Pharmacy Rahbani</title>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container">
      <a class="navbar-brand mx-auto" href="#"
        style="color: black; font-weight: bold; font-family: 'Roboto', sans-serif; font-size: 25px;"> <img
          src="../img/logo.png" alt="logo" height="42" width="42" id="img1"> Rahbani</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false" style="color: black">
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
            <a class="nav-link" href="../about/about.html" style="color: black;"> About </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contact/contact.php" style="color: black;"> Contact </a>
          </li>



        </ul>
      </div>

    

    </div>



    </div>
    </div>
  </nav>
<div class="container">
	<div class="row">
  <div class="col-12">
		<h1>Privacy Policy</h1>
	</div>
	<div class="col-12">
<sp>Last updated: May 12, 2020</sp>
<br>
<p>This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.</p>

<p>We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy.</p>
</div>
<div class="col-12">
<h1>Interpretation and Definitions</h1>
</div>
<div class="col-12">
<h3>Interpretation</h3>
</div>
<p>The words of which the initial letter is capitalized have meanings defined under the following conditions.</p>
<p>The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
<div class="col-12">
<h2>Definitions<br></h2>
</div>
<p>For the purposes of this Privacy Policy:</p>
<ul>
    <li>
        <p><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p>
          </li>
    <li>
        <p><strong>Company</strong> (referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to Rahbani LLC, Jbeil, Metn.</p>
          </li>
      <li><strong>Affiliate</strong> means an entity that controls, is controlled by or is under common control with a party, where "control" means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.</li>
    <li><strong>Account</strong> means a unique account created for You to access our Service or parts of our Service.</li>
  <li><strong>Website</strong> refers to Pharmacy Rahbani, accessible from http://pharmacyrahbani.com</li>        <li><strong>Service</strong> refers to the Website.</li>
      <li><strong>Country</strong> refers to: Lebanon</li>
    <li>
        <p><strong>Service Provider</strong> means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used.</p>
          </li>
    <li><strong>Third-party Social Media Service</strong> refers to any website or any social network website through which a User can log in or create an account to use the Service.</li>
      <li>
        <p><strong>Personal Data</strong> is any information that relates to an identified or identifiable individual.</p>
                </li>
  <li><strong>Cookies</strong> are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.</li>  <li><strong>Device</strong> means any device that can access the Service such as a computer, a cellphone or a digital tablet.</li>
    <li><strong>Usage Data</strong> refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</li>
      </ul>
<div class="col-12">
<h1>Collecting and Using Your Personal Data</h1>
</div>
<div class="col-12">
<h2>Types of Data Collected</h2>
</div>
<h3>Personal Data</h3>
<p>While using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:</p>
<ul>
  <li>Email address</li>  <li>First name and last name</li>          <li>Usage Data</li>
</ul>

<div class="col-12">
<h3>Usage Data</h3>
</div>
<p>Usage Data is collected automatically when using the Service.</p>
<p>Usage Data may include information such as Your Device's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>
<p>When You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.</p>
<p>We may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.</p>

<div class="col-12">
<h2>Use of Your Personal Data</h2>
</div>
<p>The Company may use Personal Data for the following purposes:</p>
<ul>
    <li><strong>To provide and maintain our Service</strong>, including to monitor the usage of our Service.</li>
    <li><strong>To manage Your Account:</strong> to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.</li>
    <li><strong>For the performance of a contract:</strong> the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.</li>
    <li><strong>To contact You:</strong> To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application's push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.</li>
    <li><strong>To provide You</strong> with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.</li>
    <li><strong>To manage Your requests:</strong> To attend and manage Your requests to Us.</li>
</ul>

<p>We may share your personal information in the following situations:</p>

<ul>
    <li><strong>With Service Providers:</strong> We may share Your personal information with Service Providers to monitor and analyze the use of our Service,  to contact You.</li>
    <li><strong>For Business transfers:</strong> We may share or transfer Your personal information in connection with, or during negotiations of, any merger, sale of Company assets, financing, or acquisition of all or a portion of our business to another company.</li>
    <li><strong>With Affiliates:</strong> We may share Your information with Our affiliates, in which case we will require those affiliates to honor this Privacy Policy. Affiliates include Our parent company and any other subsidiaries, joint venture partners or other companies that We control or that are under common control with Us.</li>
    <li><strong>With Business partners:</strong> We may share Your information with Our business partners to offer You certain products, services or promotions.</li>
    <li><strong>With other users:</strong> when You share personal information or otherwise interact in the public areas with other users, such information may be viewed by all users and may be publicly distributed outside. If You interact with other users or register through a Third-Party Social Media Service, Your contacts on the Third-Party Social Media Service may see You name, profile, pictures and description of Your activity. Similarly, other users will be able to view descriptions of Your activity, communicate with You and view Your profile.</li>
</ul>

<h2>Retention of Your Personal Data</h2>
<p>The Company will retain Your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.</p>
<p>The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of Our Service, or We are legally obligated to retain this data for longer time periods.</p>

<h2>Transfer of Your Personal Data</h2>
<p>Your information, including Personal Data, is processed at the Company's operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from Your jurisdiction.</p>
<p>Your consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.</p>
<p>The Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.</p>

<div class="col-12">
<h2>Disclosure of Your Personal Data</h2>
</div>
<h3>Business Transactions</h3>
<p>If the Company is involved in a merger, acquisition or asset sale, Your Personal Data may be transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.</p>
<h3>Law enforcement</h3>
<p>Under certain circumstances, the Company may be required to disclose Your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).</p>

<div class="col-12">  
<h3>Other legal requirements</h3>
</div>

<p>The Company may disclose Your Personal Data in the good faith belief that such action is necessary to:</p>
<ul>
    <li>Comply with a legal obligation</li>
    <li>Protect and defend the rights or property of the Company</li>
    <li>Prevent or investigate possible wrongdoing in connection with the Service</li>
    <li>Protect the personal safety of Users of the Service or the public</li>
    <li>Protect against legal liability</li>
</ul>
<div class="col-12">
<h2>Security of Your Personal Data</h2>
</div>
<p>The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.</p>






    <h1>Children's Privacy</h1>
    <p>Our Service does not address anyone under the age of 13. We do not knowingly collect personally identifiable information from anyone under the age of 13. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information from Our servers.</p>
    <p>If We need to rely on consent as a legal basis for processing Your information and Your country requires consent from a parent, We may require Your parent's consent before We collect and use that information.</p>



<h1>Links to Other Websites</h1>
<p>Our Service may contain links to other websites that are not operated by Us. If You click on a third party link, You will be directed to that third party's site. We strongly advise You to review the Privacy Policy of every site You visit.</p>
<p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>

<h1>Changes to this Privacy Policy</h1>
<p>We may update our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.</p>
<p>We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the "Last updated" date at the top of this Privacy Policy.</p>
<p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>
<div class="col-12">
<h1>Contact Us</h1>
</div>
<p>If you have any questions about this Privacy Policy, You can contact us:</p>
<ul>
        <li>By email: farmarah@gmail.com</li>
			<li>By phone number: 009619946100</li>	
	</ul>
	
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
    </div>

    <div class="container-fluid bg-light">
      <div class="row">
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

        </div>
        <div class="col-lg-3 mx-auto mb-5 mb-lg-0" >
          <p style="font-size: small;"><a href="./Privacy/Privacy.html" id="priv">Privacy Policies </a></p>
        </div>
        <div class="col-md-6 col-lg-3">

        </div>
      </div>
    </div>
  </footer>



</body>




</html>
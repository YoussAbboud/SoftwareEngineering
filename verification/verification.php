<?php
session_start();
require("../connection/connection.php");

if($_POST["email"] == "sonia@admin.com" && $_POST["password"] == "admin")
{
    die("admin");
}

if(!isset($_POST["email"]) || !isset($_POST["password"]))
{
    /*if the two POST fields are not set, return an error*/
    echo("error in fields");
    exit();
}




else;
{
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $sql = $connection->prepare("SELECT c_pass,c_email FROM customer WHERE c_email = ? AND c_pass = ?");
    $sql->bind_param("ss", $email, $pass);
    $sql->execute();
    $sql->store_result();
    $sql->bind_result($password , $useremail);
    $Count = $sql->num_rows;

if($Count > 0) /*if the query returns a non-empty result*/
{
    $sql->fetch();

    /*Verify password , if method returns true, user is signed in*/
    if ($pass == $password)
    {
          
        $_SESSION["email"] = $email;
        die("true");
  
    }
    /*Password is not correct*/
    else
        die ("falsepass");

         
}
}
/*Email is not correct*/

    echo ("falseemail");


?>
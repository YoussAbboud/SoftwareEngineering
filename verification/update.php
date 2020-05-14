<?php 
session_start();
require("../connection/connection.php");

if(isset($_POST["n-email"]) && isset($_POST["n-nbr"]) && $_POST["phone-nbr"] != "")
{
    $newemail = $_POST["n-email"];
    $nbr = $_POST["phone-nbr"];
    $newnbr = $_POST["n-nbr"];
    $first = $_POST["firstname"];
    $last = $_POST["lastname"];


    $sql = "UPDATE employees SET email = '$newemail' AND Phone_nb = '$newnbr' WHERE Phone_nb = '$nbr'"; 
    mysqli_query($connection , $sql);

    die("true");

}
else
die("error");

























?>

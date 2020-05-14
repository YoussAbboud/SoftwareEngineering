<?php 
session_start();
require("../connection/connection.php");

if($_POST["firstname"] != "" && isset($_POST["lastname"]) && isset($_POST["n-email"]) && isset($_POST["n-nbr"]))
{
    $newemail = $_POST["n-email"];
    $newnbr = $_POST["n-nbr"];
    $first = $_POST["firstname"];
    $last = $_POST["lastname"];


    $sql = "UPDATE employees SET email = '$newemail' AND Phone_nb = '$newnbr' WHERE first_name = '$first' AND last_name = '$last'"; 
    mysqli_query($connection , $sql);

    die("true");

}
else
die("error");

























?>

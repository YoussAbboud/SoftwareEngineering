<?php 
session_start();
require("../connection/connection.php");

if(!array_filter($_POST)) 
{
    die("error");
}


if(isset($_POST["remove_firstname"]))
{

    $first = $_POST["remove_firstname"];

    $sql = "SELECT f_name FROM customer WHERE f_name = '$first'";
    $result = $connection->query($sql);
    
    if($result->num_rows == 0)
    {
        die("noemp");
    }

    $sql2 = "DELETE FROM customer WHERE f_name = '$first'"; 
    mysqli_query($connection , $sql2);
    die("true");
    
}


else if(isset($_POST["remove_lastname"]))
{

    $last = $_POST["remove_lastname"];


    $sql3 = "SELECT l_name FROM customer WHERE l_name = '$last'";
    $result = $connection->query($sql3);
    
    if($result->num_rows == 0) 
    {
        die("noemp");
    }

    $sql4 = "DELETE FROM customer WHERE l_name = '$last'"; 
    mysqli_query($connection , $sql4);
    die("true");

}

else if(isset($_POST["remove_pass"]))
{

    $pass = $_POST["remove_pass"];


    $sql4 = "SELECT c_pass FROM customer WHERE c_pass = '$pass'";
    $result = $connection->query($sql4);
    
    if($result->num_rows == 0)
    {
        die("noemp");
    }

    $sql5 = "DELETE FROM customer WHERE c_pass = '$pass'"; 
    mysqli_query($connection , $sql5);
    die("true");


}

else if(isset($_POST["remove_email"]))
{

    $email = $_POST["remove_email"];


    $sql6 = "SELECT c_email FROM customer WHERE c_email = '$email'";
    $result = $connection->query($sql6);
    
    if($result->num_rows == 0)
    {
        die("noemp");
    }

    $sql7 = "DELETE FROM customer WHERE c_email = '$email'"; 
    mysqli_query($connection , $sql7);
    die("true");


}



?>
<?php 
session_start();
require("../connection/connection.php");

if(!array_filter($_POST)) 
{
    die("error");
}




if(isset($_POST["remove_Nbr"]))
{

    $Nbr = $_POST["remove_Nbr"];


    $sql4 = "SELECT Phone_nb FROM employees WHERE Phone_nb = '$Nbr'";
    $result = $connection->query($sql4);
    
    if($result->num_rows == 0)
    {
        die("noemp");
    }

    $sql5 = "DELETE FROM employees WHERE Phone_nb = '$Nbr'"; 
    mysqli_query($connection , $sql5);
    die("true");


}

else if(isset($_POST["remove_email"]))
{

    $email = $_POST["remove_email"];


    $sql6 = "SELECT email FROM employees WHERE email = '$email'";
    $result = $connection->query($sql6);
    
    if($result->num_rows == 0)
    {
        die("noemp");
    }

    $sql7 = "DELETE FROM employees WHERE email = '$email'"; 
    mysqli_query($connection , $sql7);
    die("true");


}



?>
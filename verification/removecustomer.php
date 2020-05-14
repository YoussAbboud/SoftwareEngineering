<?php 
session_start();
require("../connection/connection.php");

if(!array_filter($_POST)) 
{
    die("error");
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
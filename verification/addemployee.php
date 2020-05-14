<?php 
session_start();
require("../connection/connection.php");

if($_POST["firstname"] == "" && $_POST["nbr"] == "")
{
    /*if the two POST fields are not set, return an error*/
    die ("error in fields");
    exit();
    
}


else
{

    $email = $_POST["email"];
    $pass = $_POST["password"];
    $first = $_POST["firstname"];
    $last = $_POST["lastname"];
    $nbr = $_POST["nbr"];

    
    $sql = "SELECT Phone_nb FROM employees WHERE Phone_nb = '$nbr'";
    $result = $connection->query($sql);
    


    if($result->num_rows > 0) /*if the query returns a non-empty result, then an employee already exists with that email*/
    {
        die("error");
    }

    else
    {
        $sql = "INSERT INTO employees (email, first_name, last_name, Phone_nb, pass)VALUES(? ,?, ?, ?, ?)";

        $stmt = $connection->prepare($sql);
        $stmt->bind_param("sssis",$email, $first, $last, $nbr, $pass);
        $stmt->execute();
        die("true");
    }



}

?>
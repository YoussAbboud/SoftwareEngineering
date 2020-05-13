<?php 
session_start();
require("../connection/connection.php");

if($_POST["email"] == "" || $_POST["password"] == "")
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

    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
    
    $sql = $connection->prepare("SELECT c_email FROM customer WHERE c_email = ?");
    $sql->bind_param("s", $email);
    $sql->execute();
    $sql->store_result();
    $sql->bind_result($useremail);
    $Count = $sql->num_rows;

    if($Count > 0)
    {
        die("Already Exists");
    }
    else
    {
        $idCustomer = uniqid (rand (),true);
        $sql = "INSERT INTO customer (c_email, f_name, l_name, c_pass)VALUES(? ,?, ?, ?)";

        

        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ssss",$email, $first, $last, $pass);
        $stmt->execute();
        $_SESSION['email'] = $_POST["email"];
        die("true");

        
    }



}

?>
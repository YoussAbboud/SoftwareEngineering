<?php 
session_start();
require("../connection/connection.php");

if($_POST["desct"] == "" || $_POST["brand"] == "" || $_POST["product"] == "" || $_POST["price"] == "")
{
    /*if the two POST fields are not set, return an error*/
    die ("error in fields");
    exit();
    
}

else
{
    $product = $_POST["product"];
    $desct = $_POST["desct"];
    $brand = $_POST["brand"];
    $price = $_POST["price"];


        $sql = "DELETE FROM '$product'   WHERE descpt = '$desct' AND price = '$price'"; 
        mysqli_query($connection , $sql);
        die("true");










}
?>
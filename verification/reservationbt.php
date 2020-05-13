<?php 
session_start();
require("../connection/connection.php");


if(isset($_SESSION['email']))
{
    $res_id = $_POST["res_id"];
    $email = $_SESSION['email'];
    

    
    $sql = "SELECT cust_id FROM customer WHERE c_email = '$email'";
    $result = mysqli_query($connection , $sql);
    $rows = mysqli_fetch_assoc($result);
    
    $custid = $rows['cust_id'];
    

    $sql4 = "SELECT qty FROM baby_toileteries WHERE id = '$res_id'";
    $result4 = mysqli_query($connection , $sql4);
    $rows4 = mysqli_fetch_assoc($result4);

if($rows4['qty'] > 0)
    {
        $sql2 = "INSERT INTO reservations (item_id, cust_id)VALUES(? ,?)";
        $stmt = $connection->prepare($sql2);
        $stmt->bind_param("ss",$res_id, $custid);
        $stmt->execute();

        $sql3 = "UPDATE baby_toileteries SET qty = qty-1 WHERE id = '$res_id'"; 
        mysqli_query($connection , $sql3);

        die("true");
    }
    else
    die("notavailable");

        
    
}
else
die("false");


?>
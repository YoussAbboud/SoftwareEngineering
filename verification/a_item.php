<?php 
session_start();
require("../connection/connection.php");

if($_POST["desct"] == "" || $_POST["brand"] == "" || $_POST["product"] == "" || $_POST["qty"] == "" || $_POST["price"] == "")
{
    /*if the two POST fields are not set, return an error*/
    die ("error in fields");
    exit();
    
}


else
{
    $product = $_POST["product"];
    
    if($product == "baby_products")
    {
    $desct = $_POST["desct"];
    $brand = $_POST["brand"];
    $qty = $_POST["qty"];
    $price = $_POST["price"];

    $sql = $connection->prepare("SELECT descpt , brand , price FROM baby_products WHERE descpt = ? AND brand = ? AND price = ?");
    $sql->bind_param("ssf", $desct , $brand , $price);
    $sql->execute();
    $sql->store_result();
    $sql->bind_result($description , $itembrand , $itemprice);
    $Count = $sql->num_rows;

    if($Count > 0)
    {
        die("Already Exists");
    }
    else
    {
        if($brand == "Acqua kids")
        {
            $logo = "acquakids.jpeg";

        $sql = "INSERT INTO baby_products (descpt, brand, qty, price , logo)VALUES(? ,?, ?, ?, ?)";

        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ssifs",$desct, $brand, $qty, $price , $logo);
        $stmt->execute();
        die("true");
        }
        else if($brand == "Avent")
        {
            $logo = "avent.jpeg";

        $sql = "INSERT INTO baby_products (descpt, brand, qty, price , logo)VALUES(? ,?, ?, ?, ?)";

        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ssifs",$desct, $brand, $qty, $price , $logo);
        $stmt->execute();
        die("true");

        }
    }
}
    

    

    if($product == "baby_toiletries")
    {
    $desct = $_POST["desct"];
    $brand = $_POST["brand"];
    $qty = $_POST["qty"];
    $price = $_POST["price"];

    $sql = $connection->prepare("SELECT descpt , brand , price FROM baby_toiletries WHERE descpt = ? AND brand = ? AND price = ?");
    $sql->bind_param("ssf", $desct , $brand , $price);
    $sql->execute();
    $sql->store_result();
    $sql->bind_result($description , $itembrand , $itemprice);
    $Count = $sql->num_rows;

    if($Count > 0)
    {
        die("Already Exists");
    }
    else
    {
        if($brand == "Pampers")
        {
            $logo = "pampers.jpeg";

        $sql = "INSERT INTO baby_toiletries (descpt, brand, qty, price , logo)VALUES(? ,?, ?, ?, ?)";

        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ssifs",$desct, $brand, $qty, $price , $logo);
        $stmt->execute();
        die("true");
        }
        else if($brand == "Europharm")
        {
            $logo = "europharm.jpeg";

        $sql = "INSERT INTO baby_toiletries (descpt, brand, qty, price , logo)VALUES(? ,?, ?, ?, ?)";

        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ssifs",$desct, $brand, $qty, $price , $logo);
        $stmt->execute();
        die("true");
        }
        else if($brand == "Pigeon")
        {
            $logo = "pigeon.jpeg";

        $sql = "INSERT INTO baby_toiletries (descpt, brand, qty, price , logo)VALUES(? ,?, ?, ?, ?)";

        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ssifs",$desct, $brand, $qty, $price , $logo);
        $stmt->execute();
        die("true");
        }
        else if($brand == "Playtex")
        {
            $logo = "playtex-logo.jpeg";

        $sql = "INSERT INTO baby_toiletries (descpt, brand, qty, price , logo)VALUES(? ,?, ?, ?, ?)";

        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ssifs",$desct, $brand, $qty, $price , $logo);
        $stmt->execute();
        die("true");
        }
        else if($brand == "Sanofi Aventis")
        {
            $logo = "sanofiaventis.jpeg";

        $sql = "INSERT INTO baby_toiletries (descpt, brand, qty, price , logo)VALUES(? ,?, ?, ?, ?)";

        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ssifs",$desct, $brand, $qty, $price , $logo);
        $stmt->execute();
        die("true");
        }
        else if($brand == "pureborn")
        {
            $logo = "pureborn.jpeg";

        $sql = "INSERT INTO baby_toiletries (descpt, brand, qty, price , logo)VALUES(? ,?, ?, ?, ?)";

        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ssifs",$desct, $brand, $qty, $price , $logo);
        $stmt->execute();
        die("true");
        }

    }

    }

    if($product == "cosmetics")
    {
    $desct = $_POST["desct"];
    $brand = $_POST["brand"];
    $qty = $_POST["qty"];
    $price = $_POST["price"];

    $sql = $connection->prepare("SELECT descpt , brand , price FROM cosmetics WHERE descpt = ? AND brand = ? AND price = ?");
    $sql->bind_param("ssf", $desct , $brand , $price);
    $sql->execute();
    $sql->store_result();
    $sql->bind_result($description , $itembrand , $itemprice);
    $Count = $sql->num_rows;

    if($Count > 0)
    {
        die("Already Exists");
    }
    else
    {
        if($brand == "Vichy")
        {
            $logo = "vichylogo.jpeg";

        $sql = "INSERT INTO cosmetics (descpt, brand, qty, price , logo)VALUES(? ,?, ?, ?, ?)";

        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ssifs",$desct, $brand, $qty, $price , $logo);
        $stmt->execute();
        die("true");
        }
       
    }

    }

    if($product == "dental_products")
    {
    $desct = $_POST["desct"];
    $brand = $_POST["brand"];
    $qty = $_POST["qty"];
    $price = $_POST["price"];

    $sql = $connection->prepare("SELECT descpt , brand , price FROM dental_products WHERE descpt = ? AND brand = ? AND price = ?");
    $sql->bind_param("ssf", $desct , $brand , $price);
    $sql->execute();
    $sql->store_result();
    $sql->bind_result($description , $itembrand , $itemprice);
    $Count = $sql->num_rows;

    if($Count > 0)
    {
        die("Already Exists");
    }
    else
    {
        if($brand == "Corega")
        {
            $logo = "Corega.jpeg";
        }
        else if($brand == "Gum")
        {
            $logo = "gum.jpeg";
        }
        else if($brand == "Listerine")
        {
            $logo = "listerine.jpeg";
        }
        else if($brand == "miradent")
        {
            $logo = "miradent.jpeg";
        }
        else if($brand == "Novafix")
        {
            $logo = "novafix.jpeg";
        }
        else if($brand == "Oral B")
        {
            $logo = "oralB.jpeg";
        }
        else if($brand == "Parodontax")
        {
            $logo = "parondontax.jpeg";
        }
        else if($brand == "Parogencyl")
        {
            $logo = "parogencyl.jpeg";
        }
        else if($brand == "Parodontax")
        {
            $logo = "parondontax.jpeg";
        }
        else if($brand == "Lacer")
        {
            $logo = "lacer.jpeg";
        }
        else if($brand == "Synchroline")
        {
            $logo = "synchroline.jpeg";
        }
        else if($brand == "Regulat")
        {
            $logo = "regulat.jpeg";
        }
        else if($brand == "Pharmaline")
        {
            $logo = "pharmaline.jpeg";
        }

        $sql = "INSERT INTO dental_products (descpt, brand, qty, price , logo)VALUES(? ,?, ?, ?, ?)";

        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ssifs",$desct, $brand, $qty, $price , $logo);
        $stmt->execute();
        die("true");
        
       
    }

    }

    if($product == "para_medicals")
    {
    $desct = $_POST["desct"];
    $brand = $_POST["brand"];
    $qty = $_POST["qty"];
    $price = $_POST["price"];

    $sql = $connection->prepare("SELECT descpt , brand , price FROM para_medicals WHERE descpt = ? AND brand = ? AND price = ?");
    $sql->bind_param("ssf", $desct , $brand , $price);
    $sql->execute();
    $sql->store_result();
    $sql->bind_result($description , $itembrand , $itemprice);
    $Count = $sql->num_rows;

    if($Count > 0)
    {
        die("Already Exists");
    }
    else
    {
        if($brand == "Dettol")
        {
            $logo = "dettol.jpeg";
        }
        

        $sql = "INSERT INTO para_medicals (descpt, brand, qty, price , logo)VALUES(? ,?, ?, ?, ?)";

        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ssifs",$desct, $brand, $qty, $price , $logo);
        $stmt->execute();
        die("true");
        
       
    }

    }

    if($product == "sport_nutrition")
    {
    $desct = $_POST["desct"];
    $brand = $_POST["brand"];
    $qty = $_POST["qty"];
    $price = $_POST["price"];

    $sql = $connection->prepare("SELECT descpt , brand , price FROM sport_nutrition WHERE descpt = ? AND brand = ? AND price = ?");
    $sql->bind_param("ssf", $desct , $brand , $price);
    $sql->execute();
    $sql->store_result();
    $sql->bind_result($description , $itembrand , $itemprice);
    $Count = $sql->num_rows;

    if($Count > 0)
    {
        die("Already Exists");
    }
    else
    {
        if($brand == "mp essentials")
        {
            $logo = "MusclePharm.jpeg";
        }
        else if($brand == "Nestle")
        {
            $logo = "Nestle.jpeg";
        }
        else if($brand == "divers")
        {
            $logo = "divers.jpeg";
        }
        else if($brand == "Weider")
        {
            $logo = "weider.jpeg";
        }
        else if($brand == "Whey")
        {
            $logo = "whey.jpeg";
        }
        

        $sql = "INSERT INTO sport_nutrition (descpt, brand, qty, price , logo)VALUES(? ,?, ?, ?, ?)";

        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ssifs",$desct, $brand, $qty, $price , $logo);
        $stmt->execute();
        die("true");
        
       
    }

    }

    if($product == "supplemets")
    {
    $desct = $_POST["desct"];
    $brand = $_POST["brand"];
    $qty = $_POST["qty"];
    $price = $_POST["price"];

    $sql = $connection->prepare("SELECT descpt , brand , price FROM supplements WHERE descpt = ? AND brand = ? AND price = ?");
    $sql->bind_param("ssf", $desct , $brand , $price);
    $sql->execute();
    $sql->store_result();
    $sql->bind_result($description , $itembrand , $itemprice);
    $Count = $sql->num_rows;

    if($Count > 0)
    {
        die("Already Exists");
    }
    else
    {
        if($brand == "Solgar")
        {
            $logo = "solgar.jpeg";
        }
        

        $sql = "INSERT INTO supplements (descpt, brand, qty, price , logo)VALUES(? ,?, ?, ?, ?)";

        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ssifs",$desct, $brand, $qty, $price , $logo);
        $stmt->execute();
        die("true");
        
       
    }

    }





















}

?>
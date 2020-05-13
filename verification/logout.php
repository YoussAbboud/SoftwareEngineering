<?php
session_start();

if($_POST['action'] == "unsetsession")
{
unset($_SESSION['email']);
die("true");
}
else
die("false");


?>
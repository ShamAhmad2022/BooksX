<?php

session_start();

if(isset($_SESSION['userID'])){

    unset($_SESSION['userID']);

}

header("Location:3 loginAdmin.php");
die;

?>
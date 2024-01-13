<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']){
    header("location:dashboard.php");
    //after every header should have exit code set
    exit;
}
header("location:login.php");
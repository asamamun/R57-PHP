<?php
session_start();
if(!isset($_SESSION['loggedin']) && !$_SESSION['loggedin']){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $_SESSION['user'] ?>, welcome to Dashboard, only restricted users can view this page</h1>
    <a href="logout.php">Logout</a>
    
</body>
</html>
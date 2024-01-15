<?php 
include "ctrl.php"; 
login();
if(isset($_GET['logout'])){
    logout();
}
is_logout();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            display: block;
            margin-bottom: 3px;
        }
    </style>
</head>
<body>
<?php
    if(isset($_SESSION['login']) && $_SESSION['login'] == true){
        echo "<a href='login.php?logout=1'>Logout</a>";
        echo "<a href='dashboard.php'>Dashboard</a>";
    }
?>
    <a href="index.php">Home</a>
<form action="" method="post">
    <label for="user">User</label>
    <input name="user" type="text" id="user"/>
    <label for="pass">Password</label>
    <input name="pass" type="password" id="pass"/>
    <input name="submit" type="submit" value="login"/>
</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_SESSION['login']) && $_SESSION['login'] == true){
            echo "<a href='login.php?logout=1'>Logout</a>";
            echo "<a href='dashboard.php'>Dashboard</a>";
        }else{
            echo "<a href='login.php'>Login</a>";
        }
    ?>
</body>
</html>
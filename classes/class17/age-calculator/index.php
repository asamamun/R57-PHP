<?php
require 'vendor\autoload.php';
use Carbon\Carbon;

if(isset($_POST['submit'])){
    $age = $_POST['age'];
    $ageArray = explode('-', $age);
    echo Carbon::createFromDate((int) $ageArray[0], (int) $ageArray[1], (int) $ageArray[2])->age;
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
    <form action="" method="post">
        <input name="age" type="date"/>
        <button name="submit" value="submit" type="submit">Get Age</button>
    </form>
</body>
</html>
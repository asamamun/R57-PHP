<?php
session_start();
$data = $_GET['data']??"no data given";
// $data = "Sathing";
//set data into session variable
$_SESSION['maria'] = $data;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $data ?>
    <br>
    <?= $_SESSION['maria'] ?>
<ul>
        <li>session_start(): when you want to work with session in a page/file, you MUST call session_start() function at the beginning of a page</li>
        <li>To set value in Session : $_SESSION['variablename'] = value;</li>
        <li>To delete all the session values : session_unset()</li>
        <li>To destroy session itself: session_destroy()</li>
    </ul>
</body>
</html>
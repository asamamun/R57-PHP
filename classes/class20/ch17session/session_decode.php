<h1>session_decode decodes a string data into session variables</h1>
<?php
session_start();
$data = file_get_contents("data");
session_decode($data);
echo $_SESSION['name']."<br>";
echo $_SESSION['batch']."<br>";
echo $_SESSION['time']."<br>";
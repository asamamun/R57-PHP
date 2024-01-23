<?php
try {
    $mysqli = new mysqli('localhost', 'root', '', 'r57_php');//OOP mysqli
    // $mysqli = mysqli_connect('localhost', 'root', '', 'r577_php');//procedural/functional mysqli
} catch (\Throwable $th) {
    echo $th->getMessage();
    echo "<br>";
    echo $mysqli->error;//string message
}
echo "<hr>";
printf("Mysql error number generated: %d", $mysqli->connect_errno);
 if($mysqli->connect_errno){
 printf("Mysql error number generated: %d", $mysqli->connect_errno);
 }
?>
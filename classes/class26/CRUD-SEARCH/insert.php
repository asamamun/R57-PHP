<?php
require "database.php";
echo microtime() . "<br>";
for ($i=0; $i < 1000; $i++) { 
    $name = 'mob'.rand(100000,999999);
    $p = rand(1,999);
    $insertQuery = "insert into products values(NULL,'$name','Product $name',$p.99)";
    echo $insertQuery . "<br>";
    $conn->query($insertQuery);
}
echo microtime() . "<br>";
//12,550,500
//11,429,900
//111,429,900
//echo $conn->affected_rows;
    // close the connection
    $conn->close();
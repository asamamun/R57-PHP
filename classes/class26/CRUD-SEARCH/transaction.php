<?php
require "database.php";
$conn->autocommit(false);
for ($i=0; $i < 1000; $i++) { 
    $name = 'mob'.rand(100000,999999);
    $p = rand(1,999);
    $insertQuery = "insert into products values(NULL,'$name','Product $name',$p.99)";
    echo $insertQuery . "<br>";
    $conn->query($insertQuery);
}
// $conn->commit();
$conn->rollback();
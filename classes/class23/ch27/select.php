<?php
require "connection.php";

$query = "select * from users where username='admin'";
$result = $conn->query($query);
// var_dump($result);
echo $result->num_rows;
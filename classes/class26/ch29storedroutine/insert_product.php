<?php
require "db.php";
$sku = $_POST['sku']??"testsku";
$name = $_POST['name']??"testname";
$price = $_POST['price']??"0.00";
$query = "call ap('{$sku}','{$name}','{$price}')";
$conn->query($query);
// echo $conn->insert_id . "<br>";
// echo $conn->affected_rows;
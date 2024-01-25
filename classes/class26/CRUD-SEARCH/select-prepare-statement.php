<?php
require "database.php";
$page = $_GET['page']??1;
$pageitems = 20;
$indexnum = ($page-1) * $pageitems;
// Create query
// $query = 'SELECT id,sku, name, price FROM products';
// $query = 'SELECT id,sku, name, price FROM products limit 0,10';
// $query = 'SELECT id,sku, name, price FROM products limit 10, 10';
$query = 'SELECT id,sku, name, price FROM products limit '.$indexnum.', '. $pageitems;
// Create a statement object
$stmt = $conn->stmt_init();
// Prepare the statement for execution
$stmt->prepare($query);
// Execute the statement
$stmt->execute();
// Bind the result parameters
$stmt->bind_result($id, $sku, $name, $price);
// Cycle through the results and output the data
while($stmt->fetch())
printf("ID: %s , SKU :  %s, Name: %s, Price: %d <br />", $id ,$sku, $name, $price);
// Recuperate the statement resources
$stmt->close();
// Close the connection
$conn->close();
?>
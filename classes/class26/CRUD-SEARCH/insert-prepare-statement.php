<?php
require "database.php";
echo microtime() . "<br>";
// Create the query and corresponding placeholders
// $query = "INSERT INTO products SET sku=?, name=?, price=?";
$insertQuery = "insert into products values(NULL,?,?,?)";
// Create a statement object
$stmt = $conn->stmt_init();
// Prepare the statement for execution
$stmt->prepare($insertQuery);
// Bind the parameters
$stmt->bind_param('ssd', $sku, $name, $price);
for ($i=0; $i < 1000 ; $i++) { 
    $sku = 'mob'.rand(100000,999999);
    $p = rand(1,999);
    $name = "product ".$sku;
    $price = $p;
    $stmt->execute();
}
// Recuperate the statement resources
$stmt->close();
// Close the connection
$conn->close();
echo microtime() . "<br>";
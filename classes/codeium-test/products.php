<?php
require "database.php";

echo "<table><thead><tr><th>Id</th><th>Name</th><th>Price</th><th>Manufacturer Id</th></tr></thead><tbody>";
$result = $conn->query("SELECT * FROM product");

while($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['price']}</td><td>{$row['manufacturer_id']}</td></tr>";
}

echo "</tbody></table>";

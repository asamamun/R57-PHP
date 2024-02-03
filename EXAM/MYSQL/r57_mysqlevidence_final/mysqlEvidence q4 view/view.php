<?php
$db=new mysqli("localhost", "root", NULL, "company");
$createView= "CREATE OR REPLACE VIEW products_view AS
SELECT id, name,price, manufacturer_id FROM product WHERE price>5000";
if ($db->query($createView)){
	echo "View created successfully";	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Products View</h1>
	<?php
$q = "select * from products_view where 1";
$r = $db->query($q);
while ($row = $r->fetch_assoc()){
	echo "ID: " . $row['id']. ", Name: " . $row['name']. ",Price: " . $row['price']. ", Manufactuter: " . $row['manufacturer_id'] . "<br>";
}
?>
</body>
</html>


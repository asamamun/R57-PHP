<?php
$conn = new mysqli("localhost","root","","r57_php") or die("Error!!!");
$view = "create or replace view productlt100 as select * from products where price < 100";
$conn->query($view);
echo "View is Created ";
$sort = $_GET['sort'] ?? "id";
$selectQ = "select * from productlt100 order by {$sort}";
$records = $conn->query($selectQ);
if($records->num_rows){
    while($row = $records->fetch_assoc()){
        echo "Name: ".$row['name'].", Price: " . $row['price'] . "<br>";
    }
}
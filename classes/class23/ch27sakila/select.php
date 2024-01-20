<?php
require "connection.php";

$query = "select * from film";
$result = $conn->query($query);
// var_dump($result);
if($result->num_rows){
    while($row = $result->fetch_assoc()){
        // while($row = $result->fetch_row()){
    // while($row = $result->fetch_array()){
/*         var_dump($row);
        echo "<br>"; */
            echo $row['title'] . "<br>";
            echo $row['description'] . "<hr>";
    }
}
/* var_dump($result->fetch_assoc());
echo "<hr>\n";
var_dump($result->fetch_assoc());
echo "<hr>\n";
var_dump($result->fetch_assoc());
echo "<hr>\n"; */

<?php
$url = 'https://dummyjson.com/products';
$data = file_get_contents($url); // put the contents of the file into a variable
$records = json_decode($data); // decode the JSON feed
$products = $records->products; 
foreach ($products as $key => $product) {
/*     echo "<div class='singleproduct'>";
    echo "Title: " . $product->title . "<br>";
    echo "Price: " . $product->price . "<br>";
    echo "<img src='" . $product->thumbnail . "' width='200px'><hr>";
    echo "</div>"; */
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #productContainer{
            column-count: 4;
        }
        .singleproduct{ display: inline;}
    </style>
</head>
<body>
    <div id="productContainer">
    <?php
$url = 'https://dummyjson.com/products?limit=100';
$data = file_get_contents($url); // put the contents of the file into a variable
$records = json_decode($data); // decode the JSON feed
$products = $records->products; 
foreach ($products as $key => $product) {
    echo "<div class='singleproduct'>";
    echo "Title: " . $product->title . "<br>";
    echo "Price: " . $product->price . "<br>";
    echo "<img src='" . $product->thumbnail . "' width='200px'><hr>";
    echo "</div>";
}
?>
    </div>
</body>
</html>

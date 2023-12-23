<?php

// API endpoint
$apiUrl = "https://dummyjson.com/products";

// Fetch API data
$response = file_get_contents($apiUrl);
$data = json_decode($response);

// var_dump($data->products);
foreach ($data->products as $key => $value) {
    echo $value->title . " <br>\n";
}


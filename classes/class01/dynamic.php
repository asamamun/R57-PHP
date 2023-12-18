<?php
$colorArr = ["#000000", "#00ff00","red","green","yellow","blue","teal","fuchsia","maroon","lightblue"];
$index = rand(0, count($colorArr)-1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{ background-color: <?php echo $colorArr[$index] ?>;}
    </style>
</head>
<body>
    
</body>
</html>
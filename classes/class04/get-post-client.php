<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($i=89000; $i <= 89500 ; $i++) { 
        echo "<a href='get-post-server.php?newsid={$i}'>News id : {$i}</a> | ";
    }
    ?>
</body>
</html>
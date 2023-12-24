<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" width="100%">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Sex</th>
        <th>Batch Year</th>
    </tr>

<?php
$lines = file("info.csv");
/* echo "<pre>";
var_dump($lines);
echo "</pre>"; */
foreach ($lines as $key => $line) {
    //echo $line . "<br>";
    // $info = explode(";",$line);
    list($name,$age,$sex,$batch) = explode(";",$line);
/*     echo <<<INFO
    <tr>
        <th>{$info[0]}</th>
        <th>{$info[1]}</th>
        <th>{$info[2]}</th>
        <th>{$info[3]}</th>
    </tr>
INFO; */    
    echo <<<INFO
    <tr>
        <th>{$name}</th>
        <th>{$age}</th>
        <th>{$sex}</th>
        <th>{$batch}</th>
    </tr>
INFO;    
}

?>
</table>
</body>
</html>
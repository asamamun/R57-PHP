<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Encryption</h1>
    <p>Encryption can be defined as the translation of data into a format that is intended to be 
unreadable by anyone except the intended party.</p>
<h1>Hashing</h1>

<?php
$pass = "123idb$%^";
echo md5($pass); 
echo "<br>";
echo sha1($pass);
?>
</body>
</html>
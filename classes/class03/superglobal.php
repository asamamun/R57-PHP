<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Superglobal variable: $_SERVER, $_COOKIE,$_GET,$_POST,$_REQUEST,$_SESSION</h1>
    <pre>
    <?php
    var_dump($_SERVER);
    echo $_SERVER['HTTP_COOKIE'];
    echo "<br>";
    echo $_SERVER['REMOTE_ADDR'];
    echo "<br>";
    echo $_SERVER['SERVER_ADDR'];
    ?>
    </pre>
    <hr>
    <?php
foreach ($_SERVER as $var => $value) {
    echo "$var => $value <br />";
   }
    ?>
</body>
</html>
<?php
ini_set("display_errors", '0');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Error and Exception Handling</h1>
    <h3>Error Handling</h3>
    <ul>
        <li>Configuration directives:
            <ul>
                <li>error_reporting</li>
                <li>display_errors:on/off</li>
                <li>log_errors:on/off</li>
                <li>error_log:path/filename</li>
                <li>error_log("New user registered");</li>
                <li>ini_set</li>
            </ul>
        </li>
        <li>Error logging</li>
    </ul>
    <hr>
    <h3>Exception Handling</h3>
    <ul>
        <li>Exception handling</li>
    </ul>
    <hr>
    <h3>All Your Bugs Belong to You</h3>
<?php
$array = array(4,5,6,7);
echo $array;
/* foreach ($array as $key => $value) 
    echo $value;
} */
?>

</body>
</html>
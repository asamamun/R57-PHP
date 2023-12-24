<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>
<body>
    <h3>An array is traditionally defined as a group of items that share certain characteristics, such as similarity (car models, baseball teams, types of fruit, etc.) and type (e.g., all strings or
integers).</h3>
<p>
Arrays used to be defined with the array() construct. This is still supported, but PHP now has a convenient way to define arrays using a shorter syntax with [], known as JSON notation. 
</p>
<p>
    <strong>Keys can be numerical or associative.</strong> <br>
    example of numeric array: 
    <code>
    $carBrands = ["Cheverolet", "Chrysler","Ford", "Honda", "Toyota"];
    $carBrands = array("Cheverolet", "Chrysler","Ford", "Honda", "Toyota");
    </code>
    <hr>
    <strong>Example of associative array</strong>
    <code>
    $states = ["OH" => "Ohio", "PA" => "Pennsylvania", "NY" => "New York"];
    </code>
    <hr>
    <strong>Example of multidimentional array </strong>
    <code>
    $states = [
 "Ohio" => array("population" => "11,353,140", "capital" => "Columbus"),
 "Nebraska" => array("population" => "1,711,263", "capital" => "Omaha")
];
    </code>
</p>
    <ul>
        <li></li>
    </ul>
</body>
</html>
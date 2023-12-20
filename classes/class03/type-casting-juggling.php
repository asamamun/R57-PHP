<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>type casting.</h3>
    <p>Converting values from one data type to another is known as type casting.</p>
    <p>we used parseInt, parseFloat, toString to typecast in javascript</p>
    <pre>
Table 3-2. Type Casting Operators
Cast Operators      Conversion
(array)             Array
(bool) or (boolean) Boolean
(int) or (integer)  Integer
(object)            Object
(real) or (double) or (float) Float
(string)            String
    </pre>
    <?php
    //here 13 is int but type cast to double
$score = (double) 13; // $score = 13.0
// here 14.8 is float but type cast to int. so will get 14
$score = (int) 14.8; // $score = 14
$sentence = "This is a sentence";
echo (int) $sentence; // returns 0
    ?>
    <h3>type juggling.</h3>
    <p>variables are sometimes automatically cast to best fit the circumstances in which they are referenced.</p>
    <?php
    //number and string cannnot be added but program will try to convert string to integer so that we can add the two values. That automatic conversion of data types done by the program is called type juggling
    $total = 5; // an integer
    $count = "15"; // a string
    $total = $total + $count; // $total = 20 (an integer)
    ?>
</body>
</html>
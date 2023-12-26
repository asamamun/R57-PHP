<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>array_count_values()</h3>
    <?php
    $states = ["BAL", "BAL", "BNF", "BAL", "BAL", "BNF", "BAL"];
    $stateFrequency = array_count_values($states);
    print_r($stateFrequency);
    ?>
    <h3>array_unique()</h3>
    <?php
    $uniqueStates = array_unique($states);
    print_r($uniqueStates);
    ?>
    <h3>Reversing Array Element Order</h3>
    <?php
    $states = array("Delaware", "Pennsylvania", "New Jersey");
    print_r(array_reverse($states, 1));
    ?>
    <h3>The array_flip() function reverses the roles of the keys and their corresponding values
        in an array.</h3>
    <?php
    $state = array("DL" => "Delaware", "PS" => "Pennsylvania", "NJ" => "New Jersey");
    $stateflip = array_flip($state);
    print_r($stateflip)
    ?>
    <h3>The sort() function sorts an array, ordering elements from lowest to highest value.</h3>
    <?php
    $grades = array(42, 98, 100, 100, 43, 12, "Z", "A");
    sort($grades);
    print_r($grades);
    echo "<br>";
    $states = array("OH" => "Ohio", "CA" => "California", "MD" => "Maryland");
    sort($states);
    print_r($states);
    ?>
    <h3>Theasort() function is identical to sort(), sorting an array in ascending order, except that the key/value correspondence is maintained.</h3>
    <?php
    $states = array("OH" => "Ohio", "CA" => "California", "MD" => "Maryland");
    asort($states);
    print_r($states);
    ?>
    <h3>The rsort() function is identical to sort(), except that it sorts array items in reverse (descending) order</h3>
    <?php
    $states = array("OH" => "Ohio", "CA" => "California", "MD" => "Maryland");
    rsort($states);
    print_r($states);
    echo "<br>";
    $states = array("OH" => "Ohio", "CA" => "California", "MD" => "Maryland");
    arsort($states);
    print_r($states);
    ?>
    <h3>The natsort() function is intended to offer a sorting mechanism comparable to the mechanisms that people normally use.</h3>
    <?php
    $picture = ["picture11.jpg", "Picture22.jpg", "picture03.jpg", "picture04.jpg", "picture101.jpg", "picture05.jpg", "picture06.jpg"];
    // natsort($picture);//case sensitive
    natcasesort($picture); //case insensitive
    print_r($picture);
    ?>
    <h3>Theksort() function sorts an array by its keys, returning TRUE on success and FALSE otherwise. </h3>
    <?php
    $states = array("OH" => "Ohio", "CA" => "California", "MD" => "Maryland");
    ksort($states);
    print_r($states);
    ?>
    <h1>merge</h1>
    <?php
$face = array("J", "Q", "K", "A");
$numbered = array("2", "3", "4", "5", "6", "7", "8", "9","10");
$cards = array_merge($face, $numbered);

shuffle($cards);
print_r($cards);
    ?>
    <hr>
    <?php
$class1 = array("John" => 100, "James" => 85);
$class2 = array("Micky" => 78, "John" => 45);
$classScores = array_merge_recursive($class1, $class2);
print_r($classScores);
    ?>
</body>

</html>
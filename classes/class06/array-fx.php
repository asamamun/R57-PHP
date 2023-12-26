<h1>Array push, pop, shift, unshift</h1>
<?php
$states = array("Ohio", "New York");
array_unshift($states, "California", "Texas");
// $states = array("California", "Texas", "Ohio", "New York");
array_push($states, "A", 1, "B");
// $states = array("California", "Texas", "Ohio", "New York","A", "B");
$state = array_shift($states);
//$state = "California"; 
// $states = array("Texas", "Ohio", "New York","A", "B");
$state = array_pop($states);
//$state = "B"; 
// $states = array("Texas", "Ohio", "New York","A");
?>
<h1>Locating array elements</h1>
<?php
//
echo in_array("Ohio", $states);
echo "<br>";
echo array_search("New York", $states);
echo "<br>";
echo array_search("1", $states, true);
echo "<br>";
echo array_search("1", $states, true);
?>
<hr>
<?php
include "countryArr.php";
// print_r(array_keys($countryList));
print_r(array_values($countryList));
?>
<hr>
<h3>count</h3>
<?php
$color = [
    "red",
    "green",
    "blue",
    "yellow",
    ["black", ["redblue", "greenblue"], "yellow"]
];
echo count($color, 1);

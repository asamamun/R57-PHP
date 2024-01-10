<?php
echo time(). "<br>"; 
echo gettimeofday()['sec']. "<br>"; 
foreach (gettimeofday() as $key => $value) {
    echo "<strong>$key</strong> :  $value <br>";
} 
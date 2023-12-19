<?php
//function definitions
function add(int $a,int $b):bool{
    return $a+$b;
}
function concatme(string $x, string $y):string{
    return "".$x." and ".$y;
}

// echo add("A",-8);
//function call
try {
    echo add("A",-8);
} catch (\Throwable $th) {
    echo $th->getMessage();
}

echo "<h3>Program Ends</h3>";

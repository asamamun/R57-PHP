<?php
function printNumbers($start, $end) {
    if ($start <= $end) {
        echo $start . " ";
        printNumbers($start + 1, $end);
    }
}

// Call the function to print numbers from 1 to 100
printNumbers(1, 100);

?>

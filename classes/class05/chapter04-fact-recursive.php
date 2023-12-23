<?php
//factorial 
function fact($n){
    if($n == 1 ){ return 1; }
    return $n * fact($n-1);
}
echo fact(4);
// 4 * fact(3)
// 4 * 3 * fact(2)
// 4 * 3 * 2 * 1 
<h1>Assigning Variables by value(copy)</h1>
<?php
$x = 5;
$y = $x;
echo $y;
?>
<hr>
<?php
$y = "ABCDEFGHIJKLMNOPQRSTUVW";
echo $x;
?>
<h1>Assigning Variables by Reference</h1>
<?php
$p = 5;
$q = &$p;
$z = &$q;
// echo $q;
?>
<hr>
<?php
$z = "ABCDEFGHIJKLMNOPQRSTUVW";
echo $p . " , " . $q . " , " . $z;
?>

<h1>printf function can show formatted output</h1>
<h1>The sprintf() statement is functionally identical to printf() except that the output is 
assigned to a string rather than rendered as output to the client.</h1>
<img src="../assets/images/george-booles-200th-birthday.gif" width="500px" alt=""> <hr>
<?php
printf("Hello World");
?>
<hr>
<?php
$total = 1200;
$tax = ".05";
printf("Total amount to pay for %.2f is: %.2f, bcs tax rate is %.2f",$total,$total + $total*$tax,$tax);
echo "<br>";
printf("Bar inventory: %d bottles of tonic water.", 100.55);
$result = 5 > 6;
echo "<br>";
// echo $result;
printf("%d",$result);
echo "<br>";
echo sprintf("%d bottles of tonic water cost $%0.2f.", "100", 43.20);
?>
<h1>Scalar data type</h1>
<?php
$xx = "-1";
$yy = (bool) $xx;
printf("%d",$yy);
?>
<hr>
<h1>integer</h1>
<?php
$p = 0755;//octal value
$q = 0xdeadbeaf;//hexadecimal value
$r = 0b101;//binary value
$s = 1.2E23;
echo "$p <br>";
echo "$q <br>";
echo "$r <br>";
echo "$s <br>";
$a = "123 ";
$b = "456";
echo $a + $b . "\n";




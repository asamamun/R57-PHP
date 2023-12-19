<h1>In PHP, variables work inside double quotes. Inside single quotes variable will not work</h1>
<?php
echo date("d-m-Y h:i:s");
echo "<br>";
echo date("F j, Y");
echo "<br>";
echo date("F j, Y")."<br>";
?>
<hr>
<h1>In PHP, variables work inside double quotes. Inside single quotes variable will not work</h1>
<?php
$a = 5;
$b = 6;
echo "a+b is: ".$a+$b;
echo "<br>";
echo ucfirst("new york city");
echo "<br>";
echo ucwords("new york city");
echo "<h3>hi</h3>";
$mar = '<marquee behavior="" direction="">news '.$a.' | news '.$b.'</marquee>';
$mar2 = "<marquee behavior='' direction=''>New$a | News$b</marquee>";
$mar3 = "<marquee behavior='' direction=''>New{$a} | News{$b}</marquee>";
echo $mar; 
echo $mar2; 
echo $mar3; 
?>




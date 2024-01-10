<h1>strtotime returns unix timestamp</h1>
<h1>+45 days</h1>
<?php
$futuredate = strtotime("+45 days");
echo date("F d, Y", $futuredate);
?>
<h1>-56 days</h1>
<?php
$futuredate = strtotime("-56 days");
echo date("F d, Y", $futuredate);
?>
<h1>3 years 2 months 5 days</h1>
<?php
$futuredate = strtotime("1 year 2 month 5 day");
echo date("F d, Y", $futuredate);
?>
<h1>2 Hours</h1>
<?php
$futuredate = strtotime("2 Hours");
echo date("Y-m-d H:i:s a", $futuredate);
?>
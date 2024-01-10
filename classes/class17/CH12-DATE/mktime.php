<h1>we can convert any date time in unix timestamp with mktime</h1>
<?php
echo mktime(1,12,12,12,16,1971);
?>
<hr>
<?php
echo time();
?>
<h3>Age of Ismail</h3>
<?php
echo (time()-mktime(1,12,12,1,6,1997))/(60*60*24*365);
?>
<hr>
<?php
echo date("Y-m-d H:i:s",61672332);
?>
<h3>Warning
This function has been DEPRECATED as of PHP 7.3.0, and REMOVED as of PHP 8.0.0. Relying on this function is highly discouraged.</h3>
<?php
$file = "fgetsdata.txt";
$fh = fopen($file, 'r');
echo fgetss($fh,null,"");
echo "<hr>";
echo fgets($fh);
fclose($fh);
?>
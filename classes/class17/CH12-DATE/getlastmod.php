<?php
echo date("Y-m-d H:i:s a",getlastmod());
echo "<br>";
echo date("Y-m-d H:i:s a",filemtime(basename(__FILE__)));
// echo filemtime("getdate.php");
echo "<br>";
echo __FILE__;
echo "<br>";
echo __CLASS__;
echo "<br>";
echo __DIR__;
echo "<br>";
echo basename(__FILE__);
echo "<br>";
echo dirname(__FILE__);
echo "<br>";
echo date("t");

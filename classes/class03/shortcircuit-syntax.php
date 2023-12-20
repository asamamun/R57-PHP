<html>
<head>
<title><?= "Welcome to my web site!";?></title>
</head>
<body>
<?php
$t = 120;

/* 
#  $date = "November 2, 2017";
#  $date = date("F j, Y T U"); 
*/
 $date = date("d-m-Y H:i:s a",$t);
 ?>
<p>Today's date is <?=$date;?></p>
</body>
</html>
<?php
$category = $_GET['c']??null;
 switch($category) {
 case "news":
 echo "What's happening around the world";
 break;
 case "weather":
 echo "Your weekly forecast";
 echo " about weather";
 break;
 case "sports":
 echo "Latest sports highlights";
 echo "From your favorite teams";
 break;
 default:
 echo "Welcome to my web site";
 }
?>
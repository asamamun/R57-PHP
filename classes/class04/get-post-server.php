<?php
$url = "https://mzamin.com/news.php?news=".$_GET['newsid'];
echo file_get_contents($url);
?>
<?php
$db = new mysqli('localhost','root','');
$database = "transactions";
$db->query("CREATE DATABASE IF NOT EXISTS `$database`");
$db->select_db($database);
sleep('5');
$path =  __DIR__.'\assets\transaction.sql';
//$path =  'C:/xampp/htdocs/import/assets/transaction.sql';
$file = file_get_contents($path);
//var_dump($file);
//$db->query("SOURCE 'assets\transaction.sql'");
$db->multi_query($file);

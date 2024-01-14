<h1>session_encode() will convert all the session values into a string</h1>
<?php
session_start();
$name = $_GET['name']??"no name available";
$batch = $_GET['batch']??"no batch available";
$_SESSION['name'] = $name;
$_SESSION['batch'] = $batch;
$_SESSION['time'] = time();

$data = session_encode();
$fh = fopen("data","w");
fwrite($fh,$data);
fclose($fh);
//name|s:3:"idb";batch|s:2:"57";time|i:1705205027;
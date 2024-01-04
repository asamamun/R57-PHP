<?php
/* $email = "abc@gmail.com";
$pass = password_hash("secret", PASSWORD_DEFAULT);
$line = $email."|".$pass."|\n"; */
$line = "the line is written at " . date("Y-m-d H:i:s") ."\n";

$fh = fopen("file57.txt","a");//$file-handler fh is a resource
fwrite($fh, $line);
fclose($fh);

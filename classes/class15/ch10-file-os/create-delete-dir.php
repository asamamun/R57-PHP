<?php
$url = "E:/test";
/* mkdir($url);
for ($i=1; $i <= 500; $i++) { 
    mkdir($url."/".$i);
} */
// sleep(5);
for ($i=1; $i <=500 ; $i++) { 
    rmdir($url."/".$i);
}


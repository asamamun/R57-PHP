<?php
$links = [
    'mzamin'=>"http://mzamin.com",
    'palo'=> "https://www.prothomalo.com/"
];
if(!is_dir("data/")) mkdir("data");
// echo file_get_contents("file.txt");
foreach ($links as $key => $value) {
    
    $fh = fopen("data/".$key.date("y-m-d-h").".html","w");
fwrite($fh, file_get_contents($value));
fclose($fh);
}

//cron job
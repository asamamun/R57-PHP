<?php
$file = "file.txt";
echo "File created: ".date("d-m-Y g:i:sa", filectime($file)) . "<br>";
echo "File last updated: ".date("d-m-Y g:i:sa", filemtime($file)) . "<br>";
echo "File last accessed: ".date("d-m-Y g:i:sa", fileatime($file)) . "<br>";

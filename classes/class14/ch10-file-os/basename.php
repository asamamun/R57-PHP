<?php
$url = "http://localhost/ROUND57/PHP/R57-PHP/classes/class14/ch10-file-os/basename.php";
echo basename($url) ." <br>";
echo dirname($url) ." <br>";
$arr = pathinfo($url);//returns array
var_dump($arr);
?>
<pre>
• Directory name: /home/www/htdocs/book/chapter10
• Base name: index.html
• File extension: html
• File name: index
</pre>
<h1>realpath</h1>
<?php
$filename = "../../class13/case_style.png";//relative path
echo realpath($filename);//real path, absolute path
?>
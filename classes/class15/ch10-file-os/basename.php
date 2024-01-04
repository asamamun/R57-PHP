<?php
// $url = "http://localhost/ROUND57/PHP/R57-PHP/classes/class14/ch10-file-os/basename.php";
$url = "https://freetestdata.com/wp-content/uploads/2023/04/1.05KB_JSON-File_FreeTestData.json";
echo basename($url) ." <br>";//filename
echo dirname($url) ." <br>";//folder name
$arr = pathinfo($url);//returns array
echo "<pre>";
var_dump($arr);
echo "</pre>";
?>
<pre>
• Directory name: /home/www/htdocs/book/chapter10
• Base name: index.html
• File extension: html
• File name: index
</pre>
<h1>realpath/absolute path</h1>
<?php
$filename = "../../class13/case_style.png";//relative path
echo realpath($filename);//real path, absolute path
?>
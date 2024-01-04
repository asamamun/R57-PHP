<h1>to delete a file use unlink function</h1>
<h1>to delete a folder use rmdir function</h1>
<?php
$url = "E:/test/19/a.txt";
if(is_file($url))
unlink($url);
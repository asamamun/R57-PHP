<?php
 $text = "This is a link to http://www.wjgilmore.com/.";
 echo preg_replace("/http:\/\/(.*)\//", "<a target=\"_blank\" href=\"\${0}\">\${0}</a>", $text);
// echo $text;
?>
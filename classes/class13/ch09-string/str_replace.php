<?php
$author = "jason@example.com";
// $author = str_replace("@","(at)",$author);
$author = str_replace(["@","."],["(at)","(dot)"],$author);
echo "Contact the author of this article at $author.";
?>
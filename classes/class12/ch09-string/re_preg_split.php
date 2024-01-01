<?php
 $delimitedText = "Jason+++Gilmore+++++++++++Columbus+++OH";
 $fields = preg_split("/\++/", $delimitedText);
 foreach($fields as $field) echo $field."<br />";
?>
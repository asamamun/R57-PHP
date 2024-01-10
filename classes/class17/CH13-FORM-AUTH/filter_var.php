<?php
$var = filter_var("755", FILTER_VALIDATE_INT);
echo $var;
?>
<hr>
<?php
$var = filter_var("abc@gmail.c", FILTER_VALIDATE_EMAIL);
echo $var;
?>
<hr>
<?php
$var = filter_var("abc@gmail.tc", FILTER_SANITIZE_EMAIL);
echo $var;
?>
<hr>

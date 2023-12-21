<h1>Pass the number in this format: get-fact.php?number=7 in URL</h1>
<?php
$fact = $_GET['number']??5;
$result = 1;
for ($i=1; $i <= $fact ; $i++) { 
    // $result = $result * $i;
    $result *=  $i;
}
echo "Factorial of {$fact} is {$result}";
?>
<hr>
<pre>
    <?php
    print_r($_SERVER)
    ?>
</pre>
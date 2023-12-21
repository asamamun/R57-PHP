<?php
define("IDB","Islamic Development Bank");
define("TAX",0.05);
?>
<h1>we are under <?= IDB ?> project</h1>
<?php
$total = $_GET['total']??"1";
echo "You have to pay " . $total + $total * TAX;

<?php
$country = array("Bangladesh", "USA", "UK", "Africa",
"Saudi arabia", "Bhutan", "Nepal","Sri Lanka","Finland");
print_r($country) ;
$countrygroup1 = array_splice($country , 2, -1);
// $countrygroup = array_slice($country , 3, -1);
echo"<br>";
print_r($countrygroup1);
echo"<br>";
print_r($country) ;
// print_r($countrygroup);
?>
<br>
<br>
<br>
<?php
$batch1 = array("jui" => 82, "Tawhid" => 47);
$batch2 = array("sanju" => 42, "jui" => 52);
$batchnumber = array_merge_recursive($batch1, $batch2);
print_r($batchnumber);
?>
<br>
<br>
<?php
$shortform = array("BD", "AF", "SA", "BH");
$country = array("Bangladesh", "Africa","Saudi arabia", "Bhutan");
$Countryarr = array_combine($shortform,$country );
print_r($Countryarr);
?>
<br>
<br>
<?php
$country1 = array("USA", "UK","BD", "AF", "SA", "BH");
$country2 = array("UK","BD", "FA", "HB", "BH","AS");
$country3 = array("TX", "MD", "NE", "OH", "HI","BD");
$matchcountry = array_intersect($country1,$country2, $country3);
print_r($matchcountry);
?>



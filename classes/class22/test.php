<?php
$foods = array("pasta", "steak", "fish", "potatoes"); 
$food = preg_grep("/^p/", $foods);
var_dump($food);
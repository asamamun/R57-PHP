<?php
class A{
    public static $total=0;
    function addhundred(){
        self::$total += 100;
    }
}
class Product{
    public function add($n){
        A::$total += $n;
    }
    public function showtotal(){
        return A::$total;
    }
}

$p1 = new Product();
$p1->add(200);
echo $p1->showtotal();echo "<br>";
$p2 = new Product();
$p2->add(500);
echo $p2->showtotal();echo "<br>";

$t1 = new A();
echo "<br>";
// var_dump($t1 instanceof A);
var_dump(get_class($p2));
echo "<br>";
var_dump(get_class_methods($t1));
echo "<br>";
$c = new mysqli();
echo "<br><pre>";
// var_dump(get_class_methods($c));
var_dump(get_class_methods("mysqli"));
var_dump(get_class_vars("mysqli"));
echo "</pre>";


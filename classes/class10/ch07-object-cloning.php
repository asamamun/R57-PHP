<?php
class Stud{
    public $name = "not set yet";
    //will call automatically when object is cloned
    function __clone() {
        $this->name = "anonymous";
       }
}

$nas = new Stud();
$nas->name = "Nasrin";
//when you assign object variables to another variable a copy is not created, only the reference is used.
//to copy an object you need to use the keyword "clone"
$jui = clone $nas;
echo $jui->name;
echo "<br>";
$jui->name = "Jui";
echo $jui->name;
echo "<br>";
echo $nas->name;


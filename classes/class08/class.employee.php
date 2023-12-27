<?php
class Employee{
    //properties
    public $n;
    //constructor
    function __construct($num=5)
    {      $this->n = $num;     }
    //methods
    function sq(){ return $this->n * $this->n; }
    function cube(){
        //sq calling from inside class
        return $this->sq() * $this->n; }
}
$o = new Employee(8);//created object $o from class Employee
echo $o->SQ();//sq calling from object
echo "<br>";
echo $o->CUBE();